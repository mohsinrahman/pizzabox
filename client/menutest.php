<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <style>

    html {
  box-sizing: border-box;
}

body {
  padding: 0;
  margin: 0;
 
}




/* _-_-_-_-__ morphing navigation styling __-_-_-_-_ */

.header {
  
 
    font-family: "josefin Sans", sans-serif;
}

.navigation {
  width: 100px;
  height: 20%;
  display: block;
  padding-right: 40px;
  position: absolute;
  top: 0;
  right: 0;
  background: #dd0808 ;
  border-radius: 50% 0% 0% 350%;
  -webkit-perspective: 800;
  perspective: 800;
  -webkit-transition: all 800ms cubic-bezier(.9, 0, .33, 1);
  transition: all 800ms cubic-bezier(.9, 0, .33, 1);
}
/*
.logo {
  width: 70px;
  height: 70px;
  display: block;
  position: absolute;
  top: 5%;
  right: 5%;
  background: url(cyberialogo.svg) no-repeat center center;
  cursor: pointer;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  -webkit-transform: rotateY(-360deg);
  transform: rotateY(-360deg);
  -webkit-transition: all 800ms cubic-bezier(.9, 0, .33, 1);
  transition: all 800ms cubic-bezier(.9, 0, .33, 1);
}
 */
.navigation__icon {
  width: 55px;
  height: 44px;
  display: block;
  position: relative;
  top: 10%;
  right: -15%;
  cursor: pointer;
  -webkit-transition: all 800ms cubic-bezier(.9, 0, .33, 1);
  transition: all 800ms cubic-bezier(.9, 0, .33, 1);
}

.navigation__icon .topBar {
  width: 55px;
  height: 5px;
  display: block;
  background: #e3e3e3;
  position: absolute;
  top: 10px;
  -webkit-transform: rotate(0);
  transform: rotate(0);
  -webkit-transition: all 800ms cubic-bezier(.9, 0, .33, 1);
  transition: all 800ms cubic-bezier(.9, 0, .33, 1);
}

.navigation__icon .middleBar {
  width: 55px;
  height: 5px;
  display: block;
  background: #e3e3e3;
  position: absolute;
  top: 20px;
  -webkit-transform: rotate(0);
  transform: rotate(0);
  -webkit-transition: all 800ms cubic-bezier(.9, 0, .33, 1);
  transition: all 800ms cubic-bezier(.9, 0, .33, 1);
}

.navigation__icon .bottomBar {
  width: 35px;
  height: 5px;
  display: block;
  background: #e3e3e3;
  position: absolute;
  top: 30px;
  -webkit-transform: rotate(0);
  transform: rotate(0);
  -webkit-transition: all 800ms cubic-bezier(.9, 0, .33, 1);
  transition: all 800ms cubic-bezier(.9, 0, .33, 1);
}

.navigation .navigation__ul {
  float: left;
  margin-top: 150px;
  opacity: 0;
  visibility: hidden;
  -webkit-transform: rotateY(0deg) translateX(300px);
  transform: rotateY(0deg) translateX(300px);
  -webkit-transition: all 800ms cubic-bezier(.9, 0, .33, 1);
  transition: all 800ms cubic-bezier(.9, 0, .33, 1);
}

.navigation .navigation__ul li {
  list-style: none;
  text-align: right;
}

.navigation .navigation__ul a {
  display: block;
  font-size: 1.5rem;
  text-transform: uppercase;
  text-decoration: none;
  color: #e3e3e3;
  margin-bottom: 15px;
}

.navigation .navigation__ul a:hover {
  color: hsl(185, 96%, 33%);
}



/* _-_-_-_-__ jQuery Navigation-Open __-_-_-_-_ */

.navigation-open {
  width: 350px;
  height: 100%;
  display: block;
  background: #7AC943;
  position: absolute;
  right: 0;
  border-radius: 1% 0% 0% 1%;
}

.navigation-open .logo {
  right: 75%;
  -webkit-transform: rotateY(0);
  transform: rotateY(0);
}

.navigation-open .navigation__icon {
  right: -10%;
}

.navigation-open .navigation__ul {
  opacity: 1;
  visibility: visible;
}

.navigation-open .navigation__social-ul {
  opacity: 1;
  visibility: visible;
}

.navigation-open .topBar {
  top: 21px;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}

.navigation-open .middleBar {
  width: 0;
  top: 22px;
  opacity: 0;
  visibility: hidden;
  -webkit-transform: translateX(30px);
  transform: translateX(30px);
}

.navigation-open .bottomBar {
  width: 55px;
  top: 21px;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
}

.navigation-open .navigation__ul {
  -webkit-transform: rotateY(0deg) translateX(-10px);
  transform: rotateY(0deg) translateX(10px);
}

.navigation__ul img{
    margin-top: 100px;
}

.navigation__ul span{
    margin-top: 10px;
    color:#ffffff;
}

</style>

<script>  $(function() {
   $(".navigation__icon").click(function() {
     $(".navigation").toggleClass('navigation-open');
   });
 });   </script>

</head>
<body>
  <header class="header">

  <nav class="navigation">


    <section class="navigation__icon">
      <span class="topBar"></span>
      <span class="middleBar"></span>
      <span class="bottomBar"></span>
    </section>

     


    <ul class="navigation__ul">
      <li class="list-inline-item"><a href="">HOME</a></li>
      <li class="list-inline-item"><a href="">MENU</a></li>
      <li class="list-inline-item"><a href="">OFFER</a></li>
      <li class="list-inline-item"><a href="">BLOG</a></li>
      <li class="list-inline-item"><a href="">ABOUT US</a></li>
      <li class="list-inline-item"><a href="">CONTACT</a></li>
      <li class="list-inline-item"><img src="images/logo7.svg" width="100" alt="LOGO"></li>
      <li class="list-inline-item"><span>Phone#: +46 31 222 22 22</span></li>
      <li class="list-inline-item"><span>Email: info@pizzabox.se</span></li>
    </ul>
  </nav>

</header>
</body>
</html>
