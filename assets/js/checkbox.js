function checkFilledlog() {
  var inputname = document.getElementById("name").value;
  var inputpass = document.getElementById("pass").value;
  // name
  if (inputname == "") {
    inputname.style.backgroundColor = "red";
  } else {
    inputname.style.backgroundColor = "green";
  }
  //   pass
  if (inputpass == "") {
    inputpass.style.backgroundColor = "red";
  } else {
    inputpass.style.backgroundColor = "green";
  }
}

function checkFilledreg() {
  var inputnewname = document.getElementById("newname").value;
  var inputnewemail = document.getElementById("newemail").value;
  var inputnewpass = document.getElementById("newpass").value;

  //   newname
  if (inputnewname == "") {
    inputnewname.style.backgroundColor = "red";
  } else {
    inputnewname.style.backgroundColor = "green";
  }
  //   newemail
  if (inputnewemail == "") {
    inputnewemail.style.backgroundColor = "red";
  } else {
    inputnewemail.style.backgroundColor = "green";
  }
  //   newpass
  if (inputnewpass == "") {
    inputnewpass.style.backgroundColor = "red";
  } else {
    inputnewpass.style.backgroundColor = "green";
  }
}
