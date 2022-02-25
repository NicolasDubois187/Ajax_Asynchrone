// comprendre l'asynchrone
// console.log(1);

// setTimeout(() => {
//   console.log(2);
// }, 5000);

// console.log(3);

// ........................................

// const inpSearch = document.querySelector("#name");
// const form = document.querySelector("#formGitHub");

// const createCard = (wrapper, data) => {
//   wrapper.innerText = "";

//   console.log(data);
//   let card = document.createElement("div");
//   card.classList.add("card");

//   card.innerHTML = `
//     <img src="${data.avatar_url}" alt"avatar de ${data.login}" />
//     <h2>${data.login}</h2>
//     <h3>${data.name}</h3>
//     <p>Utilisateur créé le ${new Date(data.created_at).toLocaleDateString()}</p>
//     <p>Nombre de repos : ${data.public_repos}</p>
//     <a href="${data.html_url}" class="button">Voir</a>

//     `;

//   wrapper.appendChild(card);
// };

// // XMLHttpRequest
// const wrapper_xml = document.querySelector(".wrapper.xml");
// form.addEventListener("submit", (e) => {
//   e.preventDefault();
//   console.log(inpSearch.value);

//   const xhr = new XMLHttpRequest(); //On initialise  XMLHttpRequest

//   xhr.open("GET", `https://api.github.com/users/${inpSearch.value}`); //On lance notre requête avec la méthode GET
//   xhr.responseType = "json"; //On indique le type de réponse souhaitée

//   xhr.send();

//   xhr.onload = () => {
//     // console.log(xhr.status);
//     if (xhr.status === 200) {
//       const res = xhr.response;

//       createCard(wrapper_xml, res);
//     }
//   };
// });

// *****************************************************

// Fetch

// const wrapper_fetch = document.querySelector(".wrapper.fetch");
// form.addEventListener("submit", (e) => {
//   e.preventDefault();

//   fetch(`https://api.github.com/users/${inpSearch.value}`)
//     .then((response) => response.json())
//     .then((res) => {
//       createCard(wrapper_fetch, res);
//     });
// });

// ******************************************************

// Assync / Await

// const wrapper_async = document.querySelector(".wrapper.async");
// form.addEventListener("submit", async (e) => {
//   e.preventDefault();

//   const response = await fetch(
//     `https://api.github.com/users/${inpSearch.value}`
//   );

//   if (response.ok) {
//     const data = await response.json();

//     createCard(wrapper_async, data);
//   }
// });

const form = document.querySelector("#connexion");
const wrapper_connect = document.querySelector(".wrapper.connect");

const createCardPhp = (wrapper, data) => {
  wrapper.innerText = "";

  console.log(data);
  let card = document.createElement("div");
  card.classList.add("card");

  card.innerHTML = `
    
    <h2>${data.pseudo}</h2>
    <h2>${data.age}</h2>
    <p>${data.adresse}</p>
   
    `;

  wrapper.appendChild(card);
};

form.addEventListener("submit", (e) => {
  e.preventDefault();

  const data = new FormData(form);

  fetch("./traitement.php", {
    method: "POST",
    body: data,
  })
    .then((response) => response.json())
    .then((res) => {
      createCardPhp(wrapper_connect, res.data);
      console.log(res);
    });
});
