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
    let categoryList = document.getElementById("categoryList");
    let anchor = document.createElement("a");
    anchor.innerHTML = category[i];
    anchor.className = "dropdown-item";
    anchor.id = category[i];
    anchor.setAttribute("href", "#menu");
    categoryList.appendChild(anchor);

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

  for (let index = 0; index < category.length; index++) {
    let cat = document.getElementById(category[index]).innerHTML;
    for (let item = 0; item < menuitems.length; item++) {
      if (cat == menuitems[item].category) {
        let categoryId = document.getElementById(category[index]);
        categoryId.onclick = function() {
          console.log(categoryId);
          let container = document.getElementById("menu-container");
          container.innerHTML = "";
          let catRow = document.createElement("div");
          catRow.className = "row";
          container.appendChild(catRow);
          let catCol = document.createElement("div");
          catCol.className = "col-lg-12 col-md-12";
          catRow.appendChild(catCol);
          let cath6 = document.createElement("h6");
          cath6.innerHTML = menuitems[item].category;
          catCol.appendChild(cath6);
          for (let i = 0; i < menuitems[item].card.length; i++) {
            let catCard = menuitems[item].card[i];
            let cardDiv = document.createElement("div");
            cardDiv.className = "card mt-5 p-2 card1-menu";
            catCol.appendChild(cardDiv);
            let cardDivRow = document.createElement("div");
            cardDivRow.className = "row";
            cardDiv.appendChild(cardDivRow);
            let cardDivCol3 = document.createElement("div");
            cardDivCol3.className = "col-lg-3";
            cardDivRow.appendChild(cardDivCol3);
            let cardImg = document.createElement("img");
            cardImg.src = "../../client/images/" + catCard.ProductImage;
            cardImg.setAttribute("alt", "breakfast");
            cardImg.setAttribute("width", "100px");
            cardDivCol3.appendChild(cardImg);

            let cardDivCol9 = document.createElement("div");
            cardDivCol9.className = "col-lg-9";
            cardDivRow.appendChild(cardDivCol9);
            let cardPName = document.createElement("p");
            cardPName.innerHTML = catCard.ProductName;
            cardDivCol9.appendChild(cardPName);
            let cardPSpan = document.createElement("span");
            cardPSpan.innerHTML = " " + catCard.UnitPrice + "kr";
            cardPSpan.style.color = "#dd0808";
            cardPName.appendChild(cardPSpan);

            let cardPDescrip = document.createElement("p");
            cardPDescrip.innerHTML = catCard.ProductDescription;
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
        };
      }
    }
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
      //console.log(container);
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

getTheseProducts();
