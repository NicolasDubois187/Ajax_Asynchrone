form = document.querySelector("form");
form.addEventListener("submit", async (e) => {
  e.preventDefault();

  const data = new FormData(form);

  const query = await fetch("./traitement", {
    method: "POST",
    body: data,
  });
  const response = await query.json();
  console.log(response);
});

const getUser = async () => {
  const tata = await fetch("./traitement");

  const response = await tata.json();

  console.log(response);
};
getUser();
