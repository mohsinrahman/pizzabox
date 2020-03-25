<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//db.onlinewebfonts.com/c/5345fb51cb4f6e796b930b80cdf9af5f?family=Order+Pizza" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->
    <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->


    <title>Document</title>
</head>
<body>
    
        <div class="container ">
                <div class="row">
                    
                    
                    <div class="col-md-12">
                    <div class="row"><a class="col-md-6"  href="index.php">back</a> <h2 class="col-md-6">My Orders</h2></div>

                    <div class="table-responsive pt-5 table">                        
                          <table id="mytable" class="table table-bordred table-striped">
                               
                               <thead>
                                                        
                               <th><input type="checkbox" id="checkall" /></th>
                               <th>ID</th>
                                <th>Order ID</th>
                                 <th>Shipping Type</th>
                                 <th>Date</th>
                                 <th>Product ID</th>
                                 <th>Quantity</th>
                                  <th>Edit</th>
                                  
                                   <th>Delete</th>
                               </thead>
                <tbody id="singleCustomerHistoryTableBody">
                
                    
                </tbody>
                    
            </table>
            
            <div class="clearfix"></div>
            <ul class="pagination pull-right">
              <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
            </ul>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            
            
 
                </div>
                

                <!-- <div class="footer py-2 ">
            <div class="container bg-dark">

            </div>
        </div> -->
      
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
            <script src="js/script.js"></script>

</body>
</html>