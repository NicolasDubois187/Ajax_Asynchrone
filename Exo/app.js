const form = document.querySelector("form");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  const formData = new FormData(form);
  formData.append("action", "add");

  fetch("./traitement.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then(res);
});

// const createTable = (wrapper, data) => {
//   wrapper.innerText = "";

//   console.log(data);
//   let table = document.createElement("div");
//   table.classList.add("table");

//   table.innerHTML = `

//   <table>
//   <tr>
//     <th>'Name'</th>
//     <th>'Phone'</th>
//     <th>'Email'</th>
//     <th>'Address'</th>
//   </tr>
//   <tr>
//     <td>${data.name}</td>
//     <td>${data.phone}</td>
//     <td>${data.email}</td>
//     <td>${data.address}</td>
//   </tr>
// </table>

//     `;
//   wrapper.appendChild(table);
// };

// form.addEventListener("submit", (e) => {
//   e.preventDefault();

//   const data = new FormData(form);

//   fetch("./traitement.php", {
//     method: "POST",
//     body: data,
//   })
//     .then((response) => response.json())
//     .then((res) => {
//       createTable(wrapper_fetch, res.data);
//       console.log(res);
//     });
// });
