const form = document.querySelector("form");
const ul = document.querySelector("ul");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  const data = new FormData(form);
  data.append("action", "add");

  fetch("./traitement.php", {
    method: "POST",
    body: data,
  })
    .then((response) => response.json())
    .then((res) => {
      displayTask();
      console.log(res);
    });
});

const displayTask = () => {
  ul.innerHTML = "";

  fetch("./traitement.php")
    .then((response) => response.json())
    .then((res) => {
      res.forEach((task) => {
        const li = document.createElement("li");
        // li.innerHTML = task.task;
        const checkbox = document.createElement("input");
        checkbox.type = "checkbox";
        checkbox.checked = parseInt(task.done);
        li.append(checkbox, task.task);
        ul.appendChild(li);
        // console.log(task);

        checkbox.addEventListener("change", async () => {
          if (!checkbox.checked) {
            setTimeout(() => {
              ul.removeChild(li);
            }, 1000);
            const data = new FormData(form);
            data.append("action", "delete");
            data.append("id", task.id);

            fetch("./traitement.php", {
              method: "POST",
              body: data,
            })
              .then((response) => response.json())
              .then((res) => {
                console.log(res);
              });
          }
        });
      });
    });
};
displayTask();
