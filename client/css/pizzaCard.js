


 function createCard(selectedProduct) { 
    var productCard= document.createElement("div")
    phoneCard.className="col-lg-6"

    var productTitle= document.createElement("h6")
    productTitle.className="mt-5"

    var div1=document.createElement("div")
    div1.className="card mt-5 p-2 card3-menu"

    var div2=document.createElement("div")
    div2.className="row"

    var div3=document.createElement("div")
    div3.className="col-lg-3"

    var productImage = document.createElement("img")
    productImage.setAttribute('src',"./images/" + selectedPhone.Image)
    productImage.alt=selectedProduct.Category
    productImage.width=100
  

    div3.appendChild(productImage)

    var div4=document.createElement("div")
    div4.className="col-lg-9"

    var productName=document.createElement("p")
    productName=selectedProduct.productName

    var productPrice=document.createElement("span")
    productPrice.innerText = selectedProduct.price+" "+"kr";

    productName.appendChild(productPrice)
 
    var productDescription=document.createElement("p")
    productDescription=selectedProduct.description

    var addToCartBtn=document.createElement("button");
    addToCartBtn('src',"images/cart-alt.svg")
    addToCartBtn.alt="Cart"
    addToCartBtn.width="30"
    addToCartBtn.innerText="ADD TO CART"


    div4.appendChild(productName)
    div4.appendChild(productDescription)
    div4.appendChild(addToCartBtn)


    div2.appendChild(div3)
    div2.appendChild(div4)


    div1.appendChild(div2)

    productCart.appendChild(productTitle)
    productCart.appendChild(div1)


 }







  