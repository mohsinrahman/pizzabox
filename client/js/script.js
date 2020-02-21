



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
      success: function(response) {
        let data =response;
        if (data.isAdmin =="Yes") {
          $("#adminLink").removeClass("disabled");
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
         $("#responseLogin")
           
           .html("Not logged in");
          $("#modalLoginForm").modal("hide");
        
        }
      });
    });
  });
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
    if(fname=="" ||
    lname=="" ||
    email=="" ||
    password=="" 
    ){
      alert("All fields must be filled!");
    }
   else{
    $.ajax({
        url: "../server/api/signup.php",
        method: "POST",
        data: {
          signup: 1,
            fname:fname,
            lname:lname,
            email:email,
            password:password,
            admin:admin,
            phone:phone
            
        },
        dataType: "json",
        success: function() { }
       
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

// function displayNewsletter() {
//   $.ajax({
//     type: "GET",
//     dataType: "json",
//     url: "../server/api/getNewsletter.php",
//     success: data => {
//       let newsletterTableBody = document.getElementById("newsletterTableBody");
//       for (let i = 0; i < data.length; i++) {
//         let tr = document.createElement("tr");
//         let td1 = document.createElement("td");
//         let td2 = document.createElement("td");
//         let td3 = document.createElement("td");
//         newsletterTableBody.append(tr);
//         tr.append(td1);
//         tr.appendChild(td1);
//         tr.append(td2);
//         tr.append(td3);
//         td1.innerHTML = i;
//         td2.innerHTML = data[i].FullName;
//         td3.innerHTML = data[i].Email;
//       }
//     },
//     error: error => {
      
//     }
//   });
// }
//displayNewsletter();
function updateItem() {}
function deleteItem() {}
