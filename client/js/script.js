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
              $("#response").html(data.FirstName);
              $("#modalLoginForm").modal("hide");
            } else if (data.isAdmin === "No") {
              console.log("Fail");
              $("#adminLink").addClass("disabled");
              $("#response").html(data.FirstName);
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
      console.log(productName);
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
            $("#productAddMessage").html("response");
            /* let data = JSON.parse(response);
          console.log(data.isAdmin); */
          }
        });
      }
    });
  });
}
addProducts();

/* $(document).ready(function() {
  $(".signin").on("click", function() {
    const email = $("#inputEmail").val();
    const password = $("#inputPassword").val();
    console.log(email);
    var formData = new FormData();
    formData.append("email", "email");
    formData.append("password", "password");
    formData.append("login", "1");
    if (email == "" || password == "") {
      alert("Please fill the form");
    } else {
      $.ajax({
        url: "../partials/login1.php",
        method: "POST",
        data: formData,
        data: {
          login: 1,
          email: email,
          password: password
          } 
        processData: false,
        contentType: false,
        success: function(data) {
          console.log(data);
        },
        dataType: "text"
      });
    }
  });
}); */

/* const signup = document.querySelector(".signup");
signup.onclick = function() {
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
}; */

function displayItem() {
  var menu = [
    [
      {
        category: "Breakfast",
        card: [
          {
            name: "Western Sunrise",
            price: "20.00",
            description:
              "Two fried  eggs with cheese & two breakfast meats made to perfection",
            image: "menu-img2.jpg"
          },
          {
            name: "Western Sunrise",
            price: "20.00",
            description:
              "Two fried  eggs with cheese & two breakfast meats made to perfection",
            image: "menu-img2.jpg"
          }
        ]
      },
      {
        category: "Lunch",
        card: [
          {
            name: "Esteren Sunrise",
            price: "20.00",
            description:
              "Two fried  eggs with cheese & two breakfast meats made to perfection",
            image: "menu-img2.jpg"
          },
          {
            name: "Esteren Sunrise",
            price: "20.00",
            description:
              "Two fried  eggs with cheese & two breakfast meats made to perfection",
            image: "menu-img2.jpg"
          }
        ]
      }
    ],
    [
      {
        category: "Dinner",
        card: [
          {
            name: "Spaggatti",
            price: "50.00",
            description:
              "Two fried  eggs with cheese & two breakfast meats made to perfection",
            image: "menu-img2.jpg"
          },
          {
            name: "Spaggatti",
            price: "50.00",
            description:
              "Two fried  eggs with cheese & two breakfast meats made to perfection",
            image: "menu-img2.jpg"
          }
        ]
      },
      {
        category: "Desert",
        card: [
          {
            name: "Festies",
            price: "10.00",
            description:
              "Two fried  eggs with cheese & two breakfast meats made to perfection",
            image: "menu-img2.jpg"
          },
          {
            name: "Festies",
            price: "10.00",
            description:
              "Two fried  eggs with cheese & two breakfast meats made to perfection",
            image: "menu-img2.jpg"
          }
        ]
      }
    ]
  ];
  /*   console.log(menu);
  for (let i = 0; i < menu.length; i++) {
    console.log(menu[i]);
    const container = document.getElementById("pizzabox-menu");
    let rowDiv = document.createElement("div");
    rowDiv.className = "row";
    let leftColDiv = document.createElement("div");
    leftColDiv.className = "col-lg-6";
    let rightColDiv = document.createElement("div");
    rightColDiv.className = "col-lg-6";
    container.innerHTML = rowDiv;
    rowDiv.innerHTML = leftColDiv;
    rowDiv.innerHTML = rightColDiv;
    let leftH6 = document.createElement("h6");
    leftH6.className = "mt-5";
    let rightH6 = document.createElement("h6");
    rightH6.className = "mt-5";

    console.log(row); 
  }*/
}
displayItem();
function updateItem() {}
function deleteItem() {}

/* 
var menu = [
    [
      {
        catgoryBreakfast: [
          {
            card1: {
              name: "Western Sunrise",
              price: "20.00",
              description:
                "Two fried  eggs with cheese & two breakfast meats made to perfection",
              image: "menu-img2.jpg"
            }
          },
          {
            card2: {
              name: "Esteren Sunrise",
              price: "20.00",
              description:
                "Two fried  eggs with cheese & two breakfast meats made to perfection",
              image: "menu-img2.jpg"
            }
          }
        ]
      },
      {
        Lunch: [
          {
            card1: {
              name: "Amarican Pizza",
              price: "40.00",
              description:
                "Two fried  eggs with cheese & two breakfast meats made to perfection",
              image: "menu-img2.jpg"
            }
          },
          {
            card2: {
              name: "Kabab Pizza",
              price: "30.00",
              description:
                "Two fried  eggs with cheese & two breakfast meats made to perfection",
              image: "menu-img2.jpg"
            }
          }
        ]
      }
    ],
    [
      {
        Dinner: [
          {
            card1: {
              name: "Spaggatti",
              price: "50.00",
              description:
                "Two fried  eggs with cheese & two breakfast meats made to perfection",
              image: "menu-img2.jpg"
            }
          },
          {
            card2: {
              name: "Tikka Masala",
              price: "50.00",
              description:
                "Two fried  eggs with cheese & two breakfast meats made to perfection",
              image: "menu-img2.jpg"
            }
          }
        ]
      },
      {
        Desert: [
          {
            card1: {
              name: "Festies",
              price: "10.00",
              description:
                "Two fried  eggs with cheese & two breakfast meats made to perfection",
              image: "menu-img2.jpg"
            }
          },
          {
            card2: {
              name: "Donut",
              price: "20.00",
              description:
                "Two fried  eggs with cheese & two breakfast meats made to perfection",
              image: "menu-img2.jpg"
            }
          }
        ]
      }
    ]
  ]; */
