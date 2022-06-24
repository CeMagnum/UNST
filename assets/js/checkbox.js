function checkFilledlog() {
  var inputname = document.getElementById("name").value;
  var inputpass = document.getElementById("pass").value;
  // name
  console.log("ik werk met naam");
  if (inputname == "") {
    inputname.style.backgroundColor = "red";
    alert("test lol2");
  } else {
    inputname.style.backgroundColor = "green";
    alert("test lol1");
  }
  //   pass
  if (inputpass == "") {
    inputpass.style.backgroundColor = "red";
    console.log("ik werk met naam");
  } else {
    inputpass.style.backgroundColor = "green";
    console.log("ik werk met wachtwoord");
  }
  alert("ok kijken of dit werkt");
}

function checkFilledreg() {
  var inputnewname = document.getElementById("newname").value;
  var inputnewemail = document.getElementById("newemail").value;
  var inputnewpass = document.getElementById("newpass").value;

  alert("test lol");
  //   newname
  if (inputnewname == "") {
    inputnewname.style.backgroundColor = "red";
    console.log("ik werk met wachtwoord");
  } else {
    inputnewname.style.backgroundColor = "green";
    console.log("ik werk met wachtwoord");
  }
  //   newemail
  if (inputnewemail == "") {
    inputnewemail.style.backgroundColor = "red";
    console.log("ik werk met wachtwoord");
  } else {
    inputnewemail.style.backgroundColor = "green";
    console.log("ik werk met wachtwoord");
  }
  //   newpass
  if (inputnewpass == "") {
    inputnewpass.style.backgroundColor = "red";
  } else {
    inputnewpass.style.backgroundColor = "green";
  }
}

// epic

// var forming = document.getElementById("formlog");
// document.getElementById("buttonlog").addEventListener("click", function () {
//   forming.submit();
// });

// nog epicer

const input = document.querySelectorAll(".input");
const button = document.querySelector("#formlog");
console.log(button);
button.addEventListener("click", (e) => {
  e.preventDefault();

  for (let i = 0; i < input.length; i++) {
    if (!input[i].value.length) {
      input[i].style.border = "10px solid red !important";
    }
  }
});

const form = document.querySelector("form");
form.sumbit();
