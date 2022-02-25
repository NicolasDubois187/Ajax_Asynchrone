const form = document.querySelector("form");
const tbody = document.querySelector("tbody");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  const formData = new FormData(form); // On génère un ensemble de paires clé/valeur représentant les champs du formulaire et leurs valeurs
  formData.append("action", "add"); // On y ajoute une clé "action" et sa valeur "add"

  fetch("./traitement.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((res) => {
      if (res.status === "ok") {
        // On a récupéré notre réponse "ok", signe que tout s'est bien déroulé.
        display(); // On recharche l'affichage de notre tableau
        // return res;
      } else {
        // return res;
        console.log(res);
      }
    });
});

const display = () => {
  // On réinitialse notre tableau a zéro
  tbody.innerHTML = "";

  fetch("./traitement.php")
    .then((response) => response.json())
    .then((res) => {
      res.forEach((user) => {
        // On parcours l'ensemble des utilisateur renvoyé dans notre réponse "res"
        // Pour chaque utilisateur on crée une ligne dans notre tableau
        const tr = document.createElement("tr");

        // On vient ensuite parcourir l'ensemble des propriétées de notre objet "user"
        // Chaque propriété sera stoqué dans une variable que l'on vient de créer "prop"
        for (let prop in user) {
          // Pour chaque propriété, on crée une colone dans notre tableau
          const td = document.createElement("td");
          // On ajoute à notre cellule la valeur
          //           Si "user" = {
          //     "name": "Martine",
          //     "phone": "02.03.04.05.06",
          //     "email": "Martine@yopmail.com",
          //     "address": "Osef"
          // }
          // alors à la première itération, "prop" = "name" et donc user[prop] = 'Martine'
          // à la seconde itération, "prop" = "phone" et donc user[prop] = '02.03.04.05.06'
          td.innerText = user[prop];

          //On injecte notre cellule dans notre ligne du tableau
          tr.appendChild(td);
        }

        // On crée une dernière colone dans notre ligne
        const lasttd = document.createElement("td");
        //On crée un bouton
        const btn = document.createElement("button");
        btn.classList.add("btn", "delete");
        btn.innerText = "Supprimer";
        // On ajoute l'écouteur d'évènement au click
        btn.addEventListener("click", () => {
          // On appel notre fonction qui va nous permettre de supprimer notre ligne du tableau
          // On lui passe bien évidement le mail de l'utilisateur en question
          removeLine(user.email);
        });

        // On ajoute notre bouton à notre cellule
        lasttd.appendChild(btn);
        // On ajoute notre cellule à notre ligne
        tr.appendChild(lasttd);
        // On ajoute notre ligne à notre tableau
        tbody.appendChild(tr);
      });
    });
};
display();

const removeLine = (email) => {
  const req = new FormData();
  // On génère un ensemble de paires clé/valeur qui vont nous servir à a indiquer a notre fichier traitement.php l'action que l'on désire faire
  // Ici, on demande la suppression
  req.append("action", "del");
  // On oublie pas de passer également l'email de l'utilisateur à supprimer
  req.append("email", email);

  fetch("./traitement.php", {
    method: "POST",
    body: req,
  })
    .then((response) => response.json())
    .then((res) => {
      // Tout s'est bien passé dans notre fichier PHP, on recharge notre tableau
      if (res.status === "ok") display();
      else console.log(res);
    });
};
