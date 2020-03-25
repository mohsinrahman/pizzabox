function initLoggedInProps() {
  // Collect the logged in user from server (unserialize($_SESSION["loggedInUser"]))
  // If the user is logged in, example show log out button
  // If user is admin, show dashboard button
  // If not logged in, show log in button
}

function login() {
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
        dataType: "json",
        success: function(data) {
          /* console.log(response);
          let data = JSON.parse(response); */
          console.log(data);
          console.log(data.isAdmin);
          if (data.isAdmin === "Yes") {
            console.log("pass");
            $("a").removeClass("disabled");
            /*        let data =response;
        if (data.isAdmin =="Yes") {
          $("#adminLink").removeClass("disabled"); */
            $("#responseLogin").html(data.FirstName);
            $("#modalLoginForm").modal("hide");
          } else if (data.isAdmin === "No") {
            $("#adminLink").addClass("disabled");
            $("#responseLogin").html(data.FirstName);
            $("#modalLoginForm").modal("hide");
          } else {
            $("#adminLink").addClass("disabled");
          }
        }
      });
    }
    /* window.location.reload(); */
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
            .html(" ");
          $("#modalLoginForm").modal("hide");
        }
      });
    });
/*     window.location.reload();
 */  });
}
logout();

function signup() {
  $("#signup").on("click", function() {
    const fname = $("#fname").val();
    const lname = $("#lname").val();
    const admin = $("#CheckboxAdmin").prop("checked");
    const email = $("#email").val();
    const password = $("#password").val();
    const phone = $("#phone").val();
    if (fname == "" || lname == "" || email == "" || password == "") {
      alert("All fields must be filled!");
    } else {
      $.ajax({
        url: "../server/api/signup.php",
        method: "POST",
        data: {
          signup: 1,
          fname: fname,
          lname: lname,
          email: email,
          password: password,
          admin: admin,
          phone: phone
        },
        dataType: "json",
        success: function() {}
      });
      window.location.reload();
    }
  });
}
signup();

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

      if (
        productName == "" ||
        productPrice == "" ||
        productCategory == "" ||
        productDescription == "" ||
        categoryId == "" ||
        productUnitsInStock == "" ||
        productImage == ""
      ) {
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
            $("#productAddMessage").html(response);
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
            let data = JSON.parse(response);
            $("#message-newsletter").html(data);
            $("#message-newsletter")
              .delay(2000)
              .fadeOut("slow");
          }
        });
      }
    });
  });
}
newsletter();

function displayNewsletter() {
  $.ajax({
    type: "GET",
    dataType: "json",
    url: "../server/api/getNewsletter.php",
    success: data => {
      let newsletterTableBody = document.getElementById("newsletterTableBody");
      for (let i = 0; i < data.length; i++) {
        let tr = document.createElement("tr");
        let td1 = document.createElement("td");
        let td2 = document.createElement("td");
        let td3 = document.createElement("td");
        newsletterTableBody.append(tr);
        tr.append(td1);
        tr.append(td2);
        tr.append(td3);
        td1.innerHTML = i;
        td2.innerHTML = data[i].FullName;
        td3.innerHTML = data[i].Email;
      }
    },
    error: error => {}
  });
}
displayNewsletter();

function displaySingleCustomerHistory() {
  $.ajax({
    type: "GET",
    dataType: "json",
    url: "../server/api/getSingleCustomerHistory.php",
    success: data => {
      console.log(data);
      let singleCustomerHistoryTableBody = document.getElementById(
        "singleCustomerHistoryTableBody"
      );
      for (let i = 0; i < data.length; i++) {
        let tr = document.createElement("tr");

        let td1 = document.createElement("td");
        let input = document.createElement("input");
        input.setAttribute("type", "checkbox");
        input.setAttribute("id", "check" + i);
        let td2 = document.createElement("td");
        let td3 = document.createElement("td");
        let td4 = document.createElement("td");
        let td5 = document.createElement("td");
        let td6 = document.createElement("td");
        let td7 = document.createElement("td");
        let td8 = document.createElement("td");
        let td9 = document.createElement("td");
        singleCustomerHistoryTableBody.append(tr);

        tr.append(td1);
        td1.append(input);
        tr.append(td2);
        tr.append(td3);
        tr.append(td4);
        tr.append(td5);
        tr.append(td6);
        tr.append(td7);
        tr.append(td8);
        tr.append(td9);

        td2.innerHTML = data[i].ID;
        td3.innerHTML = data[i].OrderID;
        td4.innerHTML = data[i].ShippingType;
        td5.innerHTML = data[i].Date;
        td6.innerHTML = data[i].ProductID;
        td7.innerHTML = data[i].Quantity;
        td8.innerHTML = "Edit";
        td9.innerHTML = "Delete";
      }
    },
    error: error => {}
  });
}
displaySingleCustomerHistory();

function displayAllCustomerOrders() {
  $.ajax({
    type: "GET",
    dataType: "json",
    url: "../server/api/getAllCustomerOrders.php",
    success: data => {
      console.log(data);
      let allCustomerHistoryTableBody = document.getElementById(
        "AllCustomerOrdersTableBody"
      );
      for (let i = 0; i < data.length; i++) {
        let tr = document.createElement("tr");

        let td1 = document.createElement("td");
        let td2 = document.createElement("td");
        let td3 = document.createElement("td");
        let td4 = document.createElement("td");
        let td5 = document.createElement("td");
        let td6 = document.createElement("td");

        let buttonDelete = document.createElement("button");
        buttonDelete.innerHTML = "Delete";
        buttonDelete.setAttribute("width", "75px");
        buttonDelete.setAttribute("height", "25px");
        buttonDelete.setAttribute("background", "red");
        buttonDelete.setAttribute("class", "btn-danger");

        var array = ["pending", "accept"];

        //Create and append select list
        let buttonSelect = document.createElement("select");
        buttonSelect.id = "orderAccept";
        td5.appendChild(buttonSelect);
        buttonSelect.setAttribute("class", "form-control");
        buttonSelect.setAttribute("width", "75px");

        //Create and append the options
        for (let i = 0; i < array.length; i++) {
          let option = document.createElement("option");
          option.value = array[i];
          option.text = array[i];
          buttonSelect.appendChild(option);
        }

        buttonDelete.setAttribute("width", "75px");
        buttonDelete.setAttribute("height", "25px");
        buttonDelete.setAttribute("background", "red");
        buttonDelete.setAttribute("class", "btn-danger");

        allCustomerHistoryTableBody.append(tr);

        tr.append(td1);
        tr.append(td2);
        tr.append(td3);
        tr.append(td4);
        tr.append(td5);
        tr.append(td6);
        tr.setAttribute("id", data[i].OrderID);

        td1.innerHTML = data[i].OrderID;
        td2.innerHTML = data[i].ID;
        td3.innerHTML = data[i].ShippingType;
        td4.innerHTML = data[i].Date;
        /*         td5.append(buttonSelect);
         */ td6.append(buttonDelete);
      }
    },
    error: error => {}
  });
}
displayAllCustomerOrders();

function acceptOrder() {
  $(document).ready(function($) {
    $(document.body).on("change", function() {
      let selectedOption = $("select option:selected").val();
      let id = event.target.parentNode.parentNode.childNodes[0].innerHTML;
      console.log(selectedOption);
      $.ajax({
        type: "POST",
        dataType: "json",
        url: "../server/api/orderAcceptAction.php",
        data: {
          selectedOption,
          id
        },
        success: data => {
          console.log(data);
        }
      });
    });
  });
}

acceptOrder();

function updateItem() {}
function deleteItem() {}
