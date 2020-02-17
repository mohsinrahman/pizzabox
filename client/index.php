<!DOCTYPE html>
<?php
session_start();
include_once("../server/api/signupAPI.php");
include_once("../server/api/loginAPI.php");
include_once("../server/api/signoutAPI.php");
if (!empty($_SESSION["id"])){
    echo "logged in";
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//db.onlinewebfonts.com/c/5345fb51cb4f6e796b930b80cdf9af5f?family=Order+Pizza" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../server/includes/functions.js"></script>
    <script src="js/script.js"></script>
    
    <title>Pizza Box</title>
    
</head>
<body>
<!-- Modal Cart -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        <img class ="animated  pulse delay-1s" src="images/pizzagreen.svg" width="50" alt="LOGO">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <p class="modal-body-heading">Shopping Cart</p>
 
 <div class="shopping-cart">
  
   <div class="column-labels">
     <label class="product-image">Image</label>
     <label class="product-details">Product</label>
     <label class="product-price">Price</label>
     <label class="product-quantity">Quantity</label>
     <label class="product-removal">Remove</label>
     <label class="product-line-price">Total</label>
   </div>
  
   <div class="product">
     <div class="product-image">
       <img src="images/offer-img4.jpg">
     </div>
     <div class="product-details">
       <div class="product-title">Kabab Pizza</div>
       <p class="product-description"> Extra Saus, Kabab and spices.</p>
     </div>
     <div class="product-price">80</div>
     <div class="product-quantity">
       <input type="number" value="1" min="1">
     </div>
     <div class="product-removal">
       <button class="remove-product">
         Remove
       </button>
     </div>
     <div class="product-line-price">80</div>
   </div>
  
   <div class="product">
     <div class="product-image">
       <img src="images/menu-img3.jpg">
     </div>
     <div class="product-details">
       <div class="product-title">Italian Pizza</div>
       <p class="product-description">No Meat, Extra Salad.</p>
     </div>
     <div class="product-price">80</div>
     <div class="product-quantity">
       <input type="number" value="1" min="1">
     </div>
     <div class="product-removal">
       <button class="remove-product">
         Remove
       </button>
     </div>
     <div class="product-line-price">80</div>
   </div>
  
   <div class="totals">
     <div class="totals-item">
       <label>Subtotal</label>
       <div class="totals-value" id="cart-subtotal">160</div>
     </div>
     <div class="totals-item">
       <label>Tax (5%)</label>
       <div class="totals-value" id="cart-tax">3.00</div>
     </div>
     <div class="totals-item">
       <label>Shipping</label>
       <div class="totals-value" id="cart-shipping">15.00</div>
     </div>
     <div class="totals-item totals-item-total">
       <label>Grand Total</label>
       <div class="totals-value" id="cart-total">178</div>
     </div>
   </div>
        
       <!-- <button class="checkout">Checkout</button> -->
       <p class="modal-body-heading product">Address</p>
      <div class="container">
        <div class="row">
                <div class="col-lg-12 ">
                    <div class="input-group mb-3 mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Street</span>
                            </div>
                            <input type="text" class="form-control" placeholder="e.g Götgatan 2" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3 mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Postal Code</span>
                            </div>
                            <input type="text" class="form-control" placeholder="e.g 199 00" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3 mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">City</span>
                            </div>
                            <input type="text" class="form-control" placeholder="e.g Göteborg" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3 mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Mobile</span>
                            </div>
                            <input type="telephone" class="form-control" placeholder="e.g 079 454 55 66" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
        </div>
      </div>
      <p class="modal-body-heading product pt-4">Delivery Time</p>
      <div class="container">
        <div class="row">
                <div class="col-lg-12 ">                
                    <div class="form-group">
                    <label for="exampleFormControlTextarea2">Mention time and date.</label>
                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
                    </div>                    
                </div>
        </div>
      </div>
       <p class="modal-body-heading product pt-4">Payment Method</p>
      <div class="container">

        <div class="row">
            <div class="col-lg-6 ">
                  <img class="img-thumbnail img-fluid" src="images/bank.svg" alt="card" width="100">
                  <div class="input-group mb-3 mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Card Number</span>
                        </div>
                        <input type="text" class="form-control" placeholder="e.g 2345 6768 9898 4326" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                  </div>
                  <div class="input-group mb-3 mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Expire Date</span>
                        </div>
                        <input type="text" placeholder="e.g 2025-05-19" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                  </div>
                  <div class="input-group mb-3 mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">CVV2/CVC2</span>
                        </div>
                        <input type="text" placeholder="Last 3 digits at the backside of card" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                  </div>
                  <button class="checkout">Pay Now</button>
            </div>
            <div class="col-lg-6">
                   <img class="img-thumbnail img-fluid" src="images/swish.png" alt="swish" width="100">
                    <div class="input-group mb-3 mt-3">
                                
                                    <p>Now there is a possibility to pay through SWISH.</p>
                                    <p>Number: 123- 456 78 90</p>
                    </div>
            </div>
        </div>

      </div>  <!-- Payment End -->

       
 </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Login Modal-->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
          <p id="message"></p>
        <h4 class="modal-title w-100 font-weight-bold">Login</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form action="" method="POST">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
  </div>

  <div class="form-group row"> 
    <label class="form-check-label col-sm-2 col-form-label" for="adminChecked">Admin</label>
    <div class="form-check"> 
        <div class="col-sm-10">  
            <input type="checkbox" class="form-check-input" id="adminChecked" checked>
        </div>        
    </div>
  </div>
 
  <div class="form-group row">
    <div class="col-sm-5">
      <!-- <button type="submit" class=" signin btn btn-default">Sign in</button> -->
      <input type="button " class=" signin btn btn-default" value="Sign in" width="50">
    </div>
    <div class="col-sm-5">
      <button type="submit" class=" signout btn btn-default">Sign out</button>
    </div>
  </div>
</form>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default signup" data-toggle="modal" data-target="#modalRegisterForm">Signup to get Register</button>
      </div>
    </div>
  </div>
</div>

<!-- Signup Modal-->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Registration</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">

      <div class="form-group row">
                <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
        </div>
        
        <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
        </div>
         <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
        </div>
        <div class="form-group row"> 
                <label class="form-check-label col-sm-2 col-form-label" for="adminChecked">Admin</label>
                <div class="form-check"> 
                <div class="col-sm-10">  
                    <input type="checkbox" class="form-check-input" id="adminChecked" checked>
                </div>        
                </div>
        </div>


      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-deep-orange signup">Sign up</button>
      </div>
    </div>
  </div>
</div>
<!-- Home  -->

    <div class="Pizzabox-heroSection">

    </div>
    <div class="Pizzabox-heroSection-bg">
        <div class="row" style="border-bottom:1px solid #2c2c2c;"> <!-- style="border-bottom:1px solid #2c2c2c;" -->
        <div class="col-lg-6 text-center"><h6 class="Pizzabox-heroSection-email" >Email: info@pizzabox.com Phone: +46 800 000 16</h6>  </div>
        <div class="col-lg-6 text-center">
            <div class="Pizzabox-heroSection-opening">
                <div class="row">
                    <div class="col-lg-8">
                    Opening Hours: 8:00am - 11:30pm
                    </div>                
                    <div class="col-lg-4"> 
                    <img data-toggle="modal" data-target="#modalLoginForm" src="images/login.svg" width="20" alt=""> <span>0</span><img data-toggle="modal" data-target="#myModal" src="images/bag.svg" height="15"  alt="cart">
                    </div>
                </div>

            </div> 
        </div>
<!--         <div class="container-fluid">
        <div class="row">
                    <div class="col-lg-12">
                    <div class="login" id="loginForm">
                     <div class="innerLoginDiv ">
                            <form name="login">
                                <input class="username" type="text" placeholder="Username" name="userid"/>
                                <input class="pass" type="password" placeholder="Password" name="pswrd"/>
                                <input type="button" value="Login" class="loginBtn"/>
                            </form>
                            <div><p class="message"></p></div>  
                        </div>  
                    </div>
                    </div>
        </div>  login row Close 
        </div> -->
    </div>  <!-- Pizzabox-heroSection-bg --> 
        <div class="Pizzabox-heroSection-menu">
            <div class="row" >
                <div class="col-lg-4 text-center">
                <ul class="list-unstyled list-inline">
                    <li class="list-inline-item">HOME</li>
                    <li class="list-inline-item"><a href="#menu">MENU</a></li>
                    <li class="list-inline-item">OFFER</li>
                </ul>
                </div>
                <div class="col-lg-4 text-center">
                <img class ="animated  pulse delay-2s" src="images/logo7.svg" width="100" alt="LOGO">
                </div>
                <div class="col-lg-4 text-center">
                <ul class="list-unstyled list-inline">
                    <li class="list-inline-item"><a href="#contact">CONTACT</a></li>
                    <li class="list-inline-item">BLOG</li>
                    <li class="list-inline-item"><a href="#about">ABOUT US</a></li>
                </ul>
                </div>
             </div>
        </div>
        <div class="row Pizzabox-heroSection-content">
            <div class="col-lg-12 text-center mt-5">
                <h3  class="animated slideInLeft delay-1s pt-5">TASTY & SPICY</h3>
                <h5 class="animated slideInRight delay-1s pt-5">World's Delicious Cuisine</h5>
                <button class="mt-5"> <a href="#menu">ORDER NOW</a> </button>
            </div>
        </div>
       
    </div>


    <div class="Pizzabox-ourStory main load-hidden">
        <h3 id="about" class="heading">Our Story</h3>
        <div class=" Pizzabox-ourStory-content row">
         <div class="col-lg-6">
             <div class="row">
                <div class="col-lg-6">
                <img class="Pizzabox-ourStory-img1 img1" src="images/img6.jpg" width="100%"  alt="img">
                <img class="Pizzabox-ourStory-img2 img2" src="images/img1.jpg" width="100%" alt="img">
                </div>
                <div class="col-lg-6">
                <img class="Pizzabox-ourStory-img3 img3" src="images/img3.jpg" width="100%" alt="img">
                </div>

             </div>
         </div>
         <div class="col-lg-6">
           <div class="Pizzabox-ourStory-content-welcome">
                <h5 class="headline">Welcome to PizzaBox</h5>
                <p class="quote"> Quisque sit amet turpis etipsum elementum facilis. Quisque sed placerat libero. Pellentesque nec tellu
                    sollicitudin, sollicitudin ligula non, tristique nibh Donec vitae turpis sagittis, cursus nunc ac, aliquet.
                    Donec viverra vel massa aaugue consequat posuere sem, eu ornares viverra veleso massa at  posuere. Aliquam 
                    et fringilla au. Quisque sit amet turpis etipsum elementum facilis.Quisque sed placerat libero. Pellentesque
                    nec tellu sollicitudin, sollicitudin ligula non, tristique nibh  Donec vitae turpis sagittis, cursus nunc ac, aliquet.
                    Donec viverra vel massa aaugue consequat posuere sem, eu ornares viverra veleso massa at posuere. Aliquam et fringilla au.
                </p>
                <img  class="Pizzabox-ourStory-content-sign sign" src="images/sign.png" alt="Sign">
                <div class="row">
                    <div class="col-lg-4">
                    <img class="Pizzabox-ourStory-content-chef chef" src="images/chef1.jpg" alt="Chef">
                    </div>
                    <div class="col-lg-8 Pizzabox-ourStory-content-name name">
                     <h4>John Conery</h4>
                     <h6>Master Chef</h6>
                    </div>
                </div>
            </div>
         </div>
        </div>

    </div>

    <div class="Pizzabox-WeekSpecial">
    </div>


                                    <!-- </div>
                                    <div class="title-box">
                                        <b> High Quality Foods</b>
                                    </div>
                                    <div class="description text-justify">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. In aut atque illum.
                                    </div>
                                </div>
                                <div class="parent bg-white text-center p-3 my-3">
                                    <div class="image-Hover6">
                                        <img src="images/coffee-alt.svg" width="80" height="30" class="img-fluid" alt=""> -->
                                   <!--  </div>
                                    <div class="title-box">
                                        <b> High Quality Coffee</b>
                                    </div>
                                    <div class="description text-justify">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. In aut atque illum.
                                    </div>
                                </div>
                                <div class="parent bg-white text-center p-3">
                                    <div class="image-Hover5"> -->
                                        <!-- <img src="images/soup-bowl.svg" width="80" height="30" class="img-fluid" alt=""> -->
                                   <!--  </div>
                                    <div class="title-box">
                                        <b> BestSoap</b>
                                    </div>
                                    <div class="description text-justify">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. In aut atque illum.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div>
                                <div class="parent bg-white text-center p-3 mb-3">
                                    <div class="image-Hover4">
                                         <img src="images/pizza.svg" width="80" height="30" class="img-fluid" alt=""> -->
                              <!--       </div>
                                    <div class="title-box">
                                        <b>Inspiring Recipes</b>
                                    </div>
                                    <div class="description text-justify">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. In aut atque illum.
                                    </div>
                                </div>
                                <div class="img-box">
                                    <img src="images/lady2.png" class="img-fluid height-full" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div>
                                <div class="parent bg-white text-center p-3">
                                    <div class="image-Hover2"> -->
                                        <!-- <img src="images/soft-drinks.svg" width="80" height="30" class="img-fluid" alt=""> -->

                                 <!--    </div>
                                    <div class="title-box">
                                        <b> High Quality Foods</b>
                                    </div>
                                    <div class="description text-justify">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. In aut atque illum.
                                    </div>
                                </div>
                                <div class="parent bg-white text-center p-3 my-3">
                                    <div class="image-Hover1"> -->
                                        <!-- <img src="images/restaurant.svg" width="80" height="30" class="img-fluid" alt=""> -->
                                   <!--  </div>
                                    <div class="title-box">
                                        <b>salutary Meals</b>
                                    </div>
                                    <div class="description text-justify">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. In aut atque illum.
                                    </div>
                                </div>
                                <div class="parent bg-white text-center p-3">
                                    <div class="image-Hover3"> -->
                                        <!-- <img src="images/spoon-and-fork.svg" width="80" height="30" class="img-fluid" alt=""> -->
                    <!--                 </div>
                                    <div class="title-box">
                                        <b> Express Delivery</b>
                                    </div>
                                    <div class="description text-justify">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. In aut atque illum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
 -->
    
   <div  class="Pizzabox-stunningThings pb-5 main load-hidden">
       <h5 class="text-center pt-5 heading">For Your Comfort</h5>
       <h3 class="text-center pt-2 headline">STUNNING THINGS</h3>
       
        <div class="d-flex justify-content-around pt-5">
            <div class="col-lg-3 card card1">
                <img src="images/coffee-alt.png" width="50" alt="coffee">
                <h4>Inspiring Recipes</h4>
                <p>Etiam feugiat eleifend est, sed luctus odio temp vitae. Vivamus maxim- us scelerisque ipsum ne</p>
            </div>
            <div class="col-lg-3 card card2">
            <img src="images/coffee-alt.png" width="50"  alt="coffee">
                <h4>Inspiring Recipes</h4>
                <p>Etiam feugiat eleifend est, sed luctus odio temp vitae. Vivamus maxim- us scelerisque ipsum ne</p>
            </div>
            <div class="col-lg-3 card card3">
            <img src="images/coffee-alt.png" width="50"  alt="coffee">
                <h4>Inspiring Recipes</h4>
                <p>Etiam feugiat eleifend est, sed luctus odio temp vitae. Vivamus maxim- us scelerisque ipsum ne</p>
            </div>
        </div>
        <div class="d-flex justify-content-around mt-5">
            <div class="col-lg-3 card card4">
                <img src="images/coffee-alt.png" width="50" alt="coffee">
                <h4>Inspiring Recipes</h4>
                <p>Etiam feugiat eleifend est, sed luctus odio temp vitae. Vivamus maxim- us scelerisque ipsum ne</p>

            </div>

            <div class="col-lg-3 card card5">
            <img src="images/coffee-alt.png" width="50"  alt="coffee">
                <h4>Inspiring Recipes</h4>
                <p>Etiam feugiat eleifend est, sed luctus odio temp vitae. Vivamus maxim- us scelerisque ipsum ne</p>
            </div>
        </div>

        <div class="d-flex justify-content-around mt-5">
            <div class="col-lg-3 card card6">
                <img src="images/coffee-alt.png" width="50" alt="coffee">
                <h4>Inspiring Recipes</h4>
                <p>Etiam feugiat eleifend est, sed luctus odio temp vitae. Vivamus maxim- us scelerisque ipsum ne</p>

            </div>

            <div class="col-lg-3 card card7">
            <img src="images/coffee-alt.png" width="50"  alt="coffee">
                <h4>Inspiring Recipes</h4>
                <p>Etiam feugiat eleifend est, sed luctus odio temp vitae. Vivamus maxim- us scelerisque ipsum ne</p>
            </div>
        </div>
   

   <div class="Pizzabox-stunningThings-lady text-center ">
      <img src="images/lady2.png" alt="">
   </div>

   </div>





    <div class="Pizzabox-video">
        <div class="Pizzabox-video-area row">
            <div class="col-lg-12">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EnEE8jnZYho" allowfullscreen></iframe>
                </div>
            </div>
        </div>  
        <div class="Pizzabox-video-text row ">
            <div class="col-lg-12">
                <h5>Best Place of Gothenburg</h5>
            </div>
         </div>
    </div>




    <div id="menu" class="Pizzabox-menu pb-5 load-hidden main">
    <h5 class="text-center heading pt-5">Discover</h5>
    <h3 class="text-center mt-3 headline">OUR MENU</h3>
    <div class="container">
    <div class="row">
        <div class="col-lg-6" >
        <h6 class="mt-5">Breakfast</h6>
        <div id="menu"><script> getTheseProducts()</script></div>
        <!--<div class="card mt-5 p-2 card1-menu">
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
        </div> <!-- Card end -->
        <!--<div class="card mt-5 p-2 card2-menu">
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
        </div> <!-- card end -->
        
        </div>  
        <div class="col-lg-6">
        <h6 class="mt-5">Lunch</h6>
        <div class="card mt-5 p-2 card3-menu">
                    <div class="row">
                        <div class="col-lg-3">
                        <img src="images/menu-img2.jpg" alt="breakfast" width="100">
                        </div>
                        <div class="col-lg-9">
                        <p>Western Sunrise <span>20.00kr</span></p>
                         <p>Two fried  eggs with cheese & two breakfast meats made to perfection</p>
                         <button class=""> <img src="images/cart-alt.svg" alt="Cart" width="30"> ADD TO CART</button>
                        </div>
                    </div>
        </div> <!-- card end -->
        <div class="card mt-5 p-2 card4-menu">
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="images/menu-img2.jpg" width="100" alt="breakfast">
                        </div>
                        <div class="col-lg-9">
                         <p>Western Sunrise <span>30.00kr</span></p>
                         <p>Two fried  eggs with cheese & two breakfast meats made to perfection</p>
                         <button class=""> <img src="images/cart-alt.svg" alt="Cart" width="30"> ADD TO CART</button>
                        </div>
                    </div>
        </div> <!-- card end -->

        </div>  
        </div>              
   
   <div class="row">
        <div class="col-lg-6">
        <h6 class="mt-5">Dinner</h6>
        <div class="card mt-5 p-2 card5-menu">
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
        </div> <!-- Card end -->
        <div class="card mt-5 p-2 card6-menu">
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
        </div> <!-- card end -->
        </div>  
        <div class="col-lg-6">
        <h6 class="mt-5">Desert</h6>
        <div class="card mt-5 p-2 card7-menu">
                    <div class="row">
                        <div class="col-lg-3">
                        <img src="images/menu-img1.jpg" alt="breakfast" width="100">
                        </div>
                        <div class="col-lg-9">
                        <p>Western Sunrise <span>20.00kr</span></p>
                         <p>Two fried  eggs with cheese & two breakfast meats made to perfection</p>
                         <button class=""> <img src="images/cart-alt.svg" alt="Cart" width="30"> ADD TO CART</button>
                        </div>
                    </div>
        </div> <!-- card end -->
        <div class="card mt-5 p-2 card8-menu">
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="images/menu-img1.jpg" width="100" alt="breakfast">
                        </div>
                        <div class="col-lg-9">
                         <p>Western Sunrise <span>20.00kr</span></p>
                         <p>Two fried  eggs with cheese & two breakfast meats made to perfection</p>
                         <button class=""> <img src="images/cart-alt.svg" alt="Cart" width="30"> ADD TO CART</button>
                        </div>
                    </div>
        </div> <!-- card end -->

        </div>  
        </div>              
   </div>
   </div>
    </div>
    </div>


    <div id="contact" class="Pizzabox-contactUs load-hidden main">
        <div class="row">
            <div class="col-lg-8">
                        <h5 class="heading">We deliver on correct time</h5>
                        <p class="mt-3 headline">Come & Experience Our Best of</p>
                        <p class="headline">World Class Cousine.</p>
            </div>
            <div class="col-lg-4">
                        <button>CONTACT US</button>
            </div>
        </div>
    </div>
    <div class="Pizzabox-contactUs-map load-hidden main">
        <div class="row">
            <div class="col-lg-6">
                        <h5 class="heading">Contact Us</h5>
                        <p class="headline">Pizza Box, Götgatan 143</p>
                        <p class="headline">+46 705 5055 00</p>
                        <p class="headline">info@pizzabox.se</p>
                        <p class="newsletter mt-4 heading">Newsletter</p>
                        <input class="headline" type="email">
            </div>
            <div class="col-lg-6">
            <div id="googleMap" style="width:100%;height:400px;"></div>
            </div>
        </div>
    </div>
       
   

    <div class="footer py-2 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-content d-flex align-items-center justify-content-between">
                            <div class="left">
                                <span class="d-block text-white">Copyright @ 2020 PizzaBox</span>
                                <span class="text-white">All rights reserved</span>
                            </div>
                            <div class="center">
                                <img src="images/pizzagreen.svg" width="50" height="50" alt="">
                            </div>
                            <div class="right">
                                <span class="text-white mx-2 text-danger">Terms & Conditions</span>
                                <span class="text-white">Privcy Policy</span>
                                <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/pizza-top.svg" alt="TOP" width="30"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/script.js"></script>
    <script src="js/utility.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHndWQc8CEtL0itRV03I2jeE1xc9xP0V4&callback=myMap"></script>
</body>
</html>
