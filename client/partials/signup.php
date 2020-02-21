<?php
     /*if($_GET){
        if(isset($_GET['insert'])){
            insert();
        }elseif(isset($_GET['select'])){
            select();
        }
    }

    function select() {
        echo "The select function is called.";
        exit;
    }

    function insert() {
        echo "The insert function is called.";
        exit;
    }
*/?>

<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<form action="" method="POST" >
  <div class="modal-content">
    <div class="modal-header text-center">
      <h4 class="modal-title w-100 font-weight-bold">Registration</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body mx-3">

    <div class="form-group row">
              <label for="fname" class="col-sm-3 col-form-label">First Name</label>
              <div class="col-sm-9">
                  <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name">
              </div>
      </div>

      <div class="form-group row">
              <label for="lname" class="col-sm-3 col-form-label">Last Name</label>
              <div class="col-sm-9">
                  <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name">
              </div>
      </div>

      <div class="form-group row">
              <label for="phone" class="col-sm-3 col-form-label">Phone</label>
              <div class="col-sm-9">
                  <input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone">
              </div>
      </div>
      
      <div class="form-group row">
              <label for="email" class="col-sm-3 col-form-label">Email</label>
              <div class="col-sm-9">
                  <input type="email" name="email" class="form-control" id="email" placeholder="Email">
              </div>
      </div>
       <div class="form-group row">
              <label for="password" class="col-sm-3 col-form-label">Password</label>
              <div class="col-sm-9">
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
              </div>
      </div>

      <div class=" form-group row"> 
              <label for="admin" class=" col-sm-3 col-form-label" >Admin</label>
              <div class="col-sm-9"> 
                  <input type="checkbox" name="admin" class="form-control " checked="Yes" id="CheckboxAdmin">        
              </div>        
      </div>


    </div>
    <div class="modal-footer d-flex justify-content-center">
    <input type="button" class="signup btn btn-default" id="signup" value="Sign up" width="50">
      <!-- <button class="btn btn-deep-orange signup" id="signup" >Sign up</button> -->
    </div>
  </div>
  </form>
</div>
</div>
