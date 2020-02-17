<?php
/*
if(isset($_POST["login"])){
    /* echo json_encode($_POST["email"]); 
    $email = $_POST["email"];
    $password = $_POST["password"];

    exit($email . '=' .  $password);
}*/
?>

<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<!-- <form  method="post" action="/partials/login.php"> -->

  <div class="modal-content">
    <div class="modal-header text-center">
        <p id="message"></p>
      <h4 class="modal-title w-100 font-weight-bold">Login</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body mx-3">
    <form  method="post" action="index.php">
<div class="form-group row">
  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
  <div class="col-sm-10">
    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
  </div>
</div>
<div class="form-group row">
  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
  <div class="col-sm-10">
    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
  </div>
</div>

  
  <div class=" form-group row"> 
     <label class=" col-sm-2 col-form-label" for="adminChecked">Admin</label>
      <div class="col-sm-10"> 
      <input type="checkbox" class="form-control " id="CheckboxAdmin" >        
      </div>        
  </div>

<div class="form-group row">
  <div class="col-sm-5">
    <!-- <button type="submit" class=" signin btn btn-default">Sign in</button> -->
    <input type="submit" class="signin btn btn-default" name="login" value="Sign in" width="50">
  </div>
 <?//php echo $_SESSION["id"];?>
  <div class="col-sm-5">
    <input type="submit" class="signout btn btn-default" name="signout" value="Sign out">
  </div>
</div>
</form>

    </div>
    <div class="modal-footer d-flex justify-content-center">
      <button type="button" class="btn btn-default signup" data-toggle="modal" data-target="#modalRegisterForm">Signup to get Register</button>
    </div>
  </div>

</div>
</div>
