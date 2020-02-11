var categoryName;
function getTheseProducts() {
  $.ajax({
    type: "GET",
    dataType: "json",
    url: "../server/api/product/getProduct.php",
    data: { Category: Category },
    success: data => {
      console.log("My object: ", data);
      printOutProducts(data);
    },
    error: error => {
      console.log(error);
    }
  });
}

//Here we print out all products
function printOutProducts(categoryInfo1) {
  var categoryInfo = JSON.parse(categoryInfo1);
  console.log(categoryInfo1);
  var section = document.getElementById("menu");
  // section.innerHTML="TEEEEST"
  for (var i = 0; i < categoryInfo.length; i++) {
    var divForSingleProduct = createCard(categoryInfo[i]);

    section.appendChild(divForSingleProduct);
  }
}

// Here is the function that adds styles to card
function createCard(selectedProduct) {
  var productCard = document.createElement("div");
  productCard.className = "col-lg-6";

  var productTitle = document.createElement("h6");
  productTitle.className = "mt-5";

  var div1 = document.createElement("div");
  div1.className = "card mt-5 p-2 card3-menu";

  var div2 = document.createElement("div");
  div2.className = "row";

  var div3 = document.createElement("div");
  div3.className = "col-lg-3";

  //var productImage = document.createElement("img")
  // productImage.setAttribute('src',"./images/" + selectedProduct.Image)
  // productImage.alt=selectedProduct.Category
  //  productImage.width=100

  //  div3.appendChild(productImage)

  var div4 = document.createElement("div");
  div4.className = "col-lg-9";

  var productName = document.createElement("p");
  productName.innerHTML = selectedProduct.ProductName;

  var productPrice = document.createElement("p");
  productPrice.innerHTML = selectedProduct.UnitPrice + " " + "kr";

  //productName.appendChild(productPrice)

  var productDescription = document.createElement("p");
  productDescription.innerHTML = selectedProduct.Description;

  var addToCartBtn = document.createElement("button");
  // addToCartBtn('src',"images/cart-alt.svg")
  addToCartBtn.alt = "Cart";
  addToCartBtn.width = "30";
  addToCartBtn.innerText = "ADD TO CART";

  div4.appendChild(productName);
  div4.appendChild(productDescription);
  div4.appendChild(addToCartBtn);

  div2.appendChild(div3);
  div2.appendChild(div4);

  div1.appendChild(div2);

  productCard.appendChild(productTitle);
  productCard.appendChild(div1);

  return productCard;
}
