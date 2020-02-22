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
    error: error => {}
  });
}

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

  console.log(menuitems);
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

  for (let i = 0; i < menu.length; i++) {
    const container = document.getElementById("menu-container");
    let rowDiv = document.createElement("div");
    rowDiv.className = "row";
    container.appendChild(rowDiv);
    for (let j = 0; j < menu[i].length; j++) {
      let colDiv = document.createElement("div");
      colDiv.className = "col-lg-6";
      rowDiv.appendChild(colDiv);
      let categoryH6 = document.createElement("h6");
      categoryH6.className = "mt-5";
      categoryH6.innerHTML = menu[i][j].category;
      colDiv.appendChild(categoryH6);

      for (let k = 0; k < menu[i][j].card.length; k++) {
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

        cardButton.setAttribute("id", menu[i][j].card[k].ProductID);
        cardButton.addEventListener("click", function() {
          //let prCount=document.number(getElementById("pizzaCounter").innerText);
          //prCount++;
          /// document.number(getElementById("pizzaCounter").innerText)=prCount;
          addToCart(cardButton.id);
        });

        /*  console.log(cardButton.id);
          addToCart(cardButton.id);
        }); */

        //      let cardButton1 = document.createElement("Button");
        //      cardDivCol9.appendChild(cardButton1);
        //      cardButton1.addEventListener("click", function() {
        //       printCart();

        //  })

        let cardButtonImg = document.createElement("img");
        cardButtonImg.src = "../../client/images/cart-alt.svg";
        cardButtonImg.setAttribute("alt", "image");
        cardButtonImg.setAttribute("width", "30px");
        cardButton.appendChild(cardButtonImg);
      }
    }
  }
}

function addToCart(id) {
  $.ajax({
    method: "POST",
    dataType: "json",
    url: "../server/api/product/addToCart.php",
    data: { add: id },

    error: error => {}
  });
}

getTheseProducts();

function printCart() {
  $.ajax({
    type: "GET",
    dataType: "json",
    url: "../server/api/printInCart.php",
    success: data => {
      storeCart(data);
    }
  });
}

function storeCart(products) {
  $("#cartTop").html("");
  var total = 0;
  for (let i = 0; i < Object.keys(products).length; i++) {
    total += bagCard(products[i]);
  }
  document.getElementById("cart-subtotal").innerHTML = total;
}

function totalSum(products) {
  var total;
}

function bagCard(product) {
  let divProd = document.createElement("div");
  divProd.className = "product";

  let imgProd = document.createElement("img");
  imgProd.className = "product-image";
  imgProd.src = "../../client/images/" + product.ProductImage;
  divProd.appendChild(imgProd);

  let divDet = document.createElement("div");
  divDet.className = "product-details";

  let divName = document.createElement("div");
  divName.className = "product-title";
  divName.innerHTML = product.ProductName;
  let pDesc = document.createElement("p");
  pDesc.className = "product-description";
  pDesc.innerHTML = product.ProductDescription;

  divDet.appendChild(divName);
  divDet.appendChild(pDesc);

  divProd.appendChild(divDet);

  let divPrice = document.createElement("div");
  divPrice.className = "product-price";
  divPrice.innerHTML = product.UnitPrice;

  divProd.appendChild(divPrice);

  let divQnt = document.createElement("div");
  divQnt.className = "product-quantity";

  let inpt = document.createElement("input");
  inpt.type = "number";
  inpt.value = product.qty;
  inpt.min = 1;

  divQnt.appendChild(inpt);

  divProd.appendChild(divQnt);

  let divDel = document.createElement("div");
  divDel.className = "product-removal";

  let btnDel = document.createElement("button");
  btnDel.className = "remove-product";
  btnDel.innerHTML = "Remove";
  divDel.appendChild(btnDel);
  btnDel.addEventListener("click", function() {
    var i = product.ProductID;
    $.ajax({
      type: "GET",
      dataType: "json",
      url: "../server/api/deleteFromCart.php",
      data: { delete: i },
      success: function() {
        printCart();
      }
    });
  });

  divProd.appendChild(divDel);

  let divTotl = document.createElement("div");
  divTotl.className = "product-line-price";
  divTotl.innerHTML = product.qty * product.UnitPrice;

  divProd.appendChild(divTotl);

  let cart = document.getElementById("cartTop");
  cart.appendChild(divProd);

  return product.qty * product.UnitPrice;
}

function makeOrder() {
  $(document).ready(function() {
    $("#checkout").on("click", function() {
      const street = $("#street").val();
      const postcode = $("#postcode").val();
      const city = $("#city").val();
      const mobile = $("#mobile").val();
      const datetimepicker = $("#datetimepicker").val();
      const selectShipping = $("#selectShipping").val();
      if (
        street == "" ||
        postcode == "" ||
        city == "" ||
        datetimepicker == ""
      ) {
        alert("Please fill all fields");
      } else {
        $.ajax({
          url: "../server/api/order.php",
          method: "POST",
          data: {
            order: 1,
            street: street,
            postcode: postcode,
            city: city,
            mobile: mobile,
            datetimepicker: datetimepicker,
            selectShipping: selectShipping
          },
          dataType: "text",
          success: location.reload()
        });
      }
    });
  });
}
makeOrder();
