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
