const input = document.querySelectorAll(".input");
const button = document.querySelector("#button");
console.log(button)
button.addEventListener("click", (e) => {
    e.preventDefault();

    for (let i = 0; i < input.length; i++) {
        if (!input[i].value.length) {
            input[i].style.border = "1px solid red";
        }}});

const form = document.querySelector("form");
form.sumbit();