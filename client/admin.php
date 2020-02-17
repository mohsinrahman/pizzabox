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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Add Menu</title>
</head>
<body>  
     <div class="container ">
          <div class="row">        
            <div class="col-md-12">
              <div class="row"><a class="col-md-6"  href="index.php">back</a> <h2 class="col-md-6">Admin Control Panel</h2></div>
            </div>
          </div>
        
<div class=" register">
  <div class="row">
    <div class="col-md-3 register-left">
         <img src="images/pizzagreen.svg" alt=""/>
         <h3>Add Products</h3>
         <p id="productAddMessage"></p>
    </div>               
    <div class="col-md-9">
    <form action="" method="POST">


    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Product Name</span>
        </div>
        <input type="text" class="form-control" id="productName" aria-label="Default" aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
        </div>
        <input type="text" class="form-control" id="productDescription" aria-label="Default" aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
        </div>
        <input type="text" class="form-control" id="productPrice" aria-label="Default" aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Category</span>
        </div>
        <input type="text" class="form-control" id="productCategory" aria-label="Default" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Category ID</span>
        </div>
        <input type="text" class="form-control" id="categoryId" aria-label="Default" aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Stock</span>
        </div>
        <input type="text" class="form-control" id="productUnitsInStock" aria-label="Default" aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
        </div>
        <input type="text" class="form-control" id="productImage" aria-label="Default" aria-describedby="inputGroup-sizing-default">
    </div>



    <div class="input-group mb-3 text-center">
    <input type="button" class=" addProduct btn btn-light" value="Add Product" width="50">
    </div>
    </div>

   </div>
    
  </div>

 </div>
</div> <!-- container  End -->
            
            
  
                <div class="footer py-2 ">
            <div class="container bg-dark">
            <?php include 'partials/footer.php';?>
            </div>
        </div>
      
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>