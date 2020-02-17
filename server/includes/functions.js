document.write(
  unescape(
    "%3Cscript src='https://cdn.jsdelivr.net/npm/lodash@4.17.15/lodash.min.js' type='text/javascript'%3E%3C/script%3E"
  )
);
var categoryName;
function getTheseProducts() {
  $.ajax({
    type: "GET",
    dataType: "json",
    url: "../server/api/product/getProduct.php",
    success: data => {
      printOutProducts(data);
    },
    error: error => {
      console.log(error);
    }
  });
}

//Here we print out all products
function printOutProducts(products) {
  var allitems = [];
  var menuitems = [];
  for (let i = 0; i < products.length; i++) {
    allitems.push(products[i].Category);
  }
  var category = allitems.reduce(function(a, b) {
    if (a.indexOf(b) < 0) a.push(b);
    return a;
  }, []);
  for (let i = 0; i < category.length; i++) {
    var obj = {
      category: category[i]
    };
    var card = [];
    for (let j = 0; j < products.length; j++) {
      if (category[i] == products[j].Category) {
        card.push(products[j]);
      }
    }
    var obj = {
      category: category[i],
      card: card
    };

    menuitems.push(obj);
  }

  console.log(menuitems);
  var menu = _.chunk(menuitems, 2);

  console.log(menu);
  for (let i = 0; i < menu.length; i++) {
    const container = document.getElementById("menu-container");
    let rowDiv = document.createElement("div");
    rowDiv.className = "row";
    container.appendChild(rowDiv);
    for (let j = 0; j < menu[i].length; j++) {
      console.log(menu[i][j].category);
      let colDiv = document.createElement("div");
      colDiv.className = "col-lg-6";
      console.log(container);
      rowDiv.appendChild(colDiv);
      let categoryH6 = document.createElement("h6");
      categoryH6.className = "mt-5";
      categoryH6.innerHTML = menu[i][j].category;
      colDiv.appendChild(categoryH6);
      /*       <div class="card mt-5 p-2 card1-menu">
      <div class="row">
          <div class="col-lg-3">
              <img src="images/menu-img2.jpg" width="100" alt="breakfast">
          </div>
          <div class="col-lg-9">
           <p>Western Sunrise <span>20.00kr</span></p>
           <p>Two fried  eggs with cheese & two breakfast meats made to perfection</p>
           <button class=""> <img src="images/cart-alt.svg" alt="Cart" width="30"> ADD TO CART</button>
          </div>
      </div>
</div> <!-- Card end --> */
      for (let k = 0; k < menu[i][j].card.length; k++) {
        console.log(menu[i][j].card[k].Image);
        let cardDiv = document.createElement("div");
        cardDiv.className = "card mt-5 p-2 card1-menu";
        colDiv.appendChild(cardDiv);
        let cardDivRow = document.createElement("div");
        cardDivRow.className = "row";
        cardDiv.appendChild(cardDivRow);
        let cardDivCol3 = document.createElement("div");
        cardDivCol3.className = "col-lg-3";
        cardDivRow.appendChild(cardDivCol3);
        let cardImg = document.createElement("img");
        cardImg.src = "../../client/images/" + menu[i][j].card[k].ProductImage;
        cardImg.setAttribute("alt", "breakfast");
        cardImg.setAttribute("width", "100px");
        cardDivCol3.appendChild(cardImg);
        let cardDivCol9 = document.createElement("div");
        cardDivCol9.className = "col-lg-9";
        cardDivRow.appendChild(cardDivCol9);
        let cardPName = document.createElement("p");
        cardPName.innerHTML = menu[i][j].card[k].ProductName;
        cardDivCol9.appendChild(cardPName);
        let cardPSpan = document.createElement("span");
        cardPSpan.innerHTML = " " + menu[i][j].card[k].UnitPrice + "kr";
        cardPSpan.style.color = "#dd0808";
        cardPName.appendChild(cardPSpan);

        let cardPDescrip = document.createElement("p");
        cardPDescrip.innerHTML = menu[i][j].card[k].ProductDescription;
        cardDivCol9.appendChild(cardPDescrip);
        let cardButton = document.createElement("Button");
        cardDivCol9.appendChild(cardButton);
        cardButton.innerHTML = "Add To Cart";
        let cardButtonImg = document.createElement("img");
        cardButtonImg.src = "../../client/images/cart-alt.svg";
        cardButtonImg.setAttribute("alt", "image");
        cardButtonImg.setAttribute("width", "30px");
        cardButton.appendChild(cardButtonImg);
      }
    }
  }
}

/* var categoryInfo = JSON.parse(categoryInfo1);
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

  return productCard; */

getTheseProducts();
