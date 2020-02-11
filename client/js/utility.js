ScrollReveal().reveal(".main ", { delay: 500 }),
  ScrollReveal().reveal(".heading ", { delay: 800 }),
  ScrollReveal().reveal(".img1 ", { delay: 1e3 }),
  ScrollReveal().reveal(".img2 ", { delay: 1200 }),
  ScrollReveal().reveal(".img2", { delay: 1300 }),
  ScrollReveal().reveal(".headline", { delay: 1e3 }),
  ScrollReveal().reveal(".quote ", { delay: 1500 }),
  ScrollReveal().reveal(".sign", { delay: 1600 }),
  ScrollReveal().reveal(".chef ", { delay: 1800 }),
  ScrollReveal().reveal(".name ", { delay: 2e3 }),
  ScrollReveal().reveal(".card1", { delay: 500 }),
  ScrollReveal().reveal(" .card2", { delay: 800 }),
  ScrollReveal().reveal(" .card3", { delay: 1e3 }),
  ScrollReveal().reveal(" .card4", { delay: 1200 }),
  ScrollReveal().reveal(".card6", { delay: 1500 }),
  ScrollReveal().reveal(".card7", { delay: 1800 }),
  ScrollReveal().reveal(".card5", { delay: 2e3 }),
  ScrollReveal().reveal(".card1-menu", { delay: 500 }),
  ScrollReveal().reveal(" .card2-menu", { delay: 800 }),
  ScrollReveal().reveal(" .card3-menu", { delay: 1e3 }),
  ScrollReveal().reveal(" .card4-menu", { delay: 1200 }),
  ScrollReveal().reveal(".card5-menu", { delay: 1500 }),
  ScrollReveal().reveal(".card6-menu", { delay: 1800 }),
  ScrollReveal().reveal(".card7-menu", { delay: 2e3 }),
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
