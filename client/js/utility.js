ScrollReveal().reveal(".main ", { delay: 500 });
ScrollReveal().reveal(".heading ", { delay: 800 });
ScrollReveal().reveal(".img1 ", { delay: 1000 });
ScrollReveal().reveal(".img2 ", { delay: 1200 });
ScrollReveal().reveal(".img2", { delay: 1300 });
ScrollReveal().reveal(".headline", { delay: 1000 });
ScrollReveal().reveal(".quote ", { delay: 1500 });
ScrollReveal().reveal(".sign", { delay: 1600 });
ScrollReveal().reveal(".chef ", { delay: 1800 });
ScrollReveal().reveal(".name ", { delay: 2000 });
ScrollReveal().reveal(".card1", { delay: 500 });
ScrollReveal().reveal(" .card2", { delay: 800 });
ScrollReveal().reveal(" .card3", { delay: 1000 });
ScrollReveal().reveal(" .card4", { delay: 1200 });
ScrollReveal().reveal(".card6", { delay: 1500 });
ScrollReveal().reveal(".card7", { delay: 1800 });
ScrollReveal().reveal(".card5", { delay: 2000 });
ScrollReveal().reveal(".card1-menu", { delay: 500 });
ScrollReveal().reveal(" .card2-menu", { delay: 800 });
ScrollReveal().reveal(" .card3-menu", { delay: 1000 });
ScrollReveal().reveal(" .card4-menu", { delay: 1200 });
ScrollReveal().reveal(".card5-menu", { delay: 1500 });
ScrollReveal().reveal(".card6-menu", { delay: 1800 });
ScrollReveal().reveal(".card7-menu", { delay: 2000 });
ScrollReveal().reveal(".card8-menu", { delay: 2200 });

function myMap() {
  var mapProp = {
    center: new google.maps.LatLng(57.70887, 11.97456),
    zoom: 13,
    styles: [
      { elementType: "geometry", stylers: [{ color: "#242f3e" }] },
      { elementType: "labels.text.stroke", stylers: [{ color: "#242f3e" }] },
      { elementType: "labels.text.fill", stylers: [{ color: "#746855" }] }
    ]
  };
  var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}

/* Cart JS */

$(document).ready(function() {
  /* Set rates + misc */
  var taxRate = 0.05;
  var shippingRate = 15.0;
  var fadeTime = 300;

  /* Assign actions */
  $(".product-quantity input").change(function() {
    updateQuantity(this);
  });

  $(".product-removal button").click(function() {
    removeItem(this);
  });

  /* Recalculate cart */
  function recalculateCart() {
    var subtotal = 0;

    /* Sum up row totals */
    $(".product").each(function() {
      subtotal += parseFloat(
        $(this)
          .children(".product-line-price")
          .text()
      );
    });

    /* Calculate totals */
    var tax = subtotal * taxRate;
    var shipping = subtotal > 0 ? shippingRate : 0;
    var total = subtotal + tax + shipping;

    /* Update totals display */
    $(".totals-value").fadeOut(fadeTime, function() {
      $("#cart-subtotal").html(subtotal.toFixed(2));
      $("#cart-tax").html(tax.toFixed(2));
      $("#cart-shipping").html(shipping.toFixed(2));
      $("#cart-total").html(total.toFixed(2));
      if (total == 0) {
        $(".checkout").fadeOut(fadeTime);
      } else {
        $(".checkout").fadeIn(fadeTime);
      }
      $(".totals-value").fadeIn(fadeTime);
    });
  }

  /* Update quantity */
  function updateQuantity(quantityInput) {
    /* Calculate line price */
    var productRow = $(quantityInput)
      .parent()
      .parent();
    var price = parseFloat(productRow.children(".product-price").text());
    var quantity = $(quantityInput).val();
    var linePrice = price * quantity;

    /* Update line price display and recalc cart totals */
    productRow.children(".product-line-price").each(function() {
      $(this).fadeOut(fadeTime, function() {
        $(this).text(linePrice.toFixed(2));
        recalculateCart();
        $(this).fadeIn(fadeTime);
      });
    });
  }

  /* Remove item from cart */
  function removeItem(removeButton) {
    /* Remove row from DOM and recalc cart total */
    var productRow = $(removeButton)
      .parent()
      .parent();
    productRow.slideUp(fadeTime, function() {
      productRow.remove();
      recalculateCart();
    });
  }
});

/* Scroll button */

//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 100 ||
    document.documentElement.scrollTop > 100
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
