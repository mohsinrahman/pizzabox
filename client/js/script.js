/* const signin = document.querySelector(".signin");
signin.onclick = function() {
  const email = document.getElementById("inputEmail").value;
  const password = document.getElementById("inputPassword").value;
  if (email == "Mohsin@gmail.com" && password == "12345") {
    document.getElementById("message").innerHTML = "Welcome";
  } else {
    document.getElementById("message").innerHTML =
      "ERROR: Please confirm your email and password.";
  }
}; */

$(document).ready(function() {
  $(".signin").on("click", function() {
    const email = $("#inputEmail").val();
    const password = $("#inputPassword").val();
    console.log(email);
    if (email == "" || password == "") {
      alert("Please fill the form");
    } else {
      $.ajax({
        url: "login.php",
        method: "POST",
        data: {
          login: 1,
          email: email,
          password: password
        },
        success: function(data) {
          console.log(data);
        },
        dataType: "text"
      });
    }
  });
});

/* const signup = document.querySelector(".signup");
signup.onclick = function() {
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
}; */

function addItem() {}
function updateItem() {}
function deleteItem() {}
