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

function login() {
  $(document).ready(function() {
    initLoggedInProps();

    function initLoggedInProps() {
      // Collect the logged in user from server (unserialize($_SESSION["loggedInUser"]))
      // If the user is logged in, example show log out button
      // If user is admin, show dashboard button
      // If not logged in, show log in button
    }

    $(".signin").on("click", function() {
      const email = $("#inputEmail").val();
      const password = $("#inputPassword").val();
      const isAdmin = $("#selectAdmin").val();
      if (email == "" || password == "") {
        $(".loginModalInput").addClass("loginModalMessage");
      } else {
        $.ajax({
          url: "../server/api/signin.php",
          method: "POST",
          data: {
            login: 1,
            email: email,
            password: password,
            isAdmin: isAdmin
          },
          dataType: "text",
          success: function(response) {
            console.log(response);
            let data = JSON.parse(response);
            console.log(data.isAdmin);
            if (data.isAdmin === "Yes") {
              console.log("pass");
              $("a").removeClass("disabled");
              $("#responseLogin").html(data.FirstName);
              $("#modalLoginForm").modal("hide");
            } else if (data.isAdmin === "No") {
              console.log("Fail");
              $("#adminLink").addClass("disabled");
              $("#responseLogin").html(data.FirstName);
              $("#modalLoginForm").modal("hide");
            } else {
              $("#adminLink").addClass("disabled");
            }
          }
        });
      }
    });
  });
}
login();

function logout() {
  $(document).ready(function() {
    $(".signout").on("click", function() {
      $.ajax({
        url: "../client/partials/logout.php",
        type: "GET",
        success: function(response) {
          console.log(response);
          $("#responseLogin")
            .slideUp(2000)
            .html("");
          $("#modalLoginForm").modal("hide");
          $("#adminLink").addClass("disabled");
        }
      });
    });
  });
}
logout();

function addProducts() {
  $(document).ready(function() {
    $(".addProduct").on("click", function() {
      const productName = $("#productName").val();
      const productPrice = $("#productPrice").val();
      const productCategory = $("#productCategory").val();
      const productDescription = $("#productDescription").val();
      const categoryId = $("#categoryId").val();
      const productUnitsInStock = $("#productUnitsInStock").val();
      const productImage = $("#productImage").val();
      /* Empty input Fields */
      $("#productName").val("");
      $("#productPrice").val("");
      $("#productCategory").val("");
      $("#productDescription").val("");
      $("#categoryId").val("");
      $("#productUnitsInStock").val("");
      $("#productImage").val("");
      //console.log(productName);
      if (
        productName == "" ||
        productPrice == "" ||
        productCategory == "" ||
        productDescription == "" ||
        categoryId == "" ||
        productUnitsInStock == "" ||
        productImage == ""
      ) {
        //$(".loginModalInput").addClass("loginModalMessage");
        alert("Please fill all fields");
      } else {
        $.ajax({
          url: "../server/api/product/addProduct.php",
          method: "POST",
          data: {
            productName: productName,
            productPrice: productPrice,
            productCategory: productCategory,
            productDescription: productDescription,
            categoryId: categoryId,
            productUnitsInStock: productUnitsInStock,
            productImage: productImage
          },
          dataType: "text",
          success: function(response) {
            console.log(response);
            $("#productAddMessage").html(response);
            /* let data = JSON.parse(response);
          console.log(data.isAdmin); */
          }
        });
      }
    });
  });
}
addProducts();

function newsletter() {
  $(document).ready(function() {
    $(".btn-newsletter").on("click", function() {
      let newsletter_email = $("#newsletter-email").val();
      let newsletter_name = $("#newsletter-name").val();
      $("#newsletter-email").val("");
      $("#newsletter-name").val("");
      if (newsletter_email == "" || newsletter_name == "") {
        alert("Please enter email & name");
      } else {
        $.ajax({
          url: "../server/api/newsletter.php",
          method: "POST",
          data: {
            newsletter_name,
            newsletter_email
          },
          dataType: "text",
          success: function(response) {
            console.log(response);
            let data = JSON.parse(response);
            console.log(data);
          }
        });
      }
    });
  });
}
newsletter();

function updateItem() {}
function deleteItem() {}
