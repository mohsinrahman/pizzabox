<!DOCTYPE html>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/0.10.0/lodash.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../server/includes/functions.js"></script>
    
    
    <title>Pizza Box</title>
    
</head>
<body>
<!-- Modal Cart -->
<?php include 'partials/cart.php';?>
<!-- Login Modal-->
<?php include 'partials/login.php';?>

<!-- Signup Modal-->
<?php include 'partials/signup.php';?>
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
                    <li class="list-inline-item" ><a href="" class="disabled">ADMIN</a></li>
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
                    <li class="list-inline-item"><a href=http://localhost:8888/pizzabox/client/history.php>HISTORY</a></li>
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
    <div class="container Pizzabox-menu-container" id="menu-container">
   
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
    <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/pizza-top.svg" alt="TOP" width="30"></button>
            <div class="container">
            <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/pizza-top.svg" alt="TOP" width="30"></button>
            <?php include 'partials/footer.php';?>
            </div>
        </div>
     
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.15/lodash.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/script.js"></script>
    <script src="js/utility.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHndWQc8CEtL0itRV03I2jeE1xc9xP0V4&callback=myMap"></script>
   
    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script>
    <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
</body>
</html>



