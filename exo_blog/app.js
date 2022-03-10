const form = document.querySelector("#publish");
const formBlog = document.querySelector(".formBlog");

const createPost = (data) => {
  // formBlog.innerText = "";

  console.log(data);
  let card = document.createElement("div");

  card.innerHTML = `
    
    <h2>${data.title}</h2>
    <h2>${data.author}</h2>
    <p>${data.content}</p>
   
    `;

  formBlog.appendChild(card);
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
      console.log(res);
      createPost(res);
    });
});
const getUser = async () => {
  const tata = await fetch("./traitement.php");

  const response = await tata.json();

  console.log(response);
  response.forEach((post) => {
    createPost(post);
    console.log(post);
  });
};
getUser();
