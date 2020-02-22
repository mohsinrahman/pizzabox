<?php
session_start();
	if(isset($_SESSION['Id'])){
        
      echo "passwerty";
  }
  else{
    echo "No";
  }
?>

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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


    <title>Document</title>
</head>
<body>
    
        <div class="container ">
                <div class="row">
                    
                    
                    <div class="col-md-12">
<!--                     <div style="display:inline-block; background: red; width: 100%;"><a style="display:inline-block;" href="">back</a> <h2 style="display:inline-block; " class="text-center pt-5">My Orders</h2></div>
 -->                    <div class="row"><a class="col-md-6"  href="index.php">back</a> <h2 class="col-md-6">My Orders</h2></div>

                    <div class="table-responsive pt-5 table">
            
                            
                          <table id="mytable" class="table table-bordred table-striped">
                               
                               <thead>
                               
                               <th><input type="checkbox" id="checkall" /></th>
                               <th>First Name</th>
                                <th>Last Name</th>
                                 <th>Address</th>
                                 <th>Email</th>
                                 <th>Contact</th>
                                 <th>Order#</th>
                                  <th>Edit</th>
                                  
                                   <th>Delete</th>
                               </thead>
                <tbody>
                
                <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Mohsin</td>
                <td>Rahman</td>
                <td>Incrediblegatan 99, 199 00, Göteborge</td>
                <td>mohsinrahmang@gmail.com</td>
                <td>+4676000000</td>
                <td>20201</td>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                </tr>
                
             <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Mohsin</td>
                <td>Rahman</td>
                <td>Incrediblegatan 99, 199 00, Göteborge </td>
                <td>mohsinrahmang@gmail.com</td>
                <td>+4676000000</td>
                <td>20206</td>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
              </tr>
                
                
             <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Mohsin</td>
                <td>Rahman</td>
                <td>Incrediblegatan 99, 199 00, Göteborge </td>
                <td>mohsinrahmang@gmail.com</td>
                <td>+4676000000</td>
                <td>20203</td>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
              </tr>
                               
             <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Mohsin</td>
                <td>Rahman</td>
                <td>Incrediblegatan 99, 199 00, Göteborge</td>
                <td>mohsinrahmang@gmail.com</td>
                <td>+4676000000</td>
                <td>20208</td>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
              </tr>
                
                
               <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Mohsin</td>
                <td>Rahman</td>
                <td>Incrediblegatan 99, 199 00, Göteborge</td>
                <td>isometric.mohsin@gmail.com</td>
                <td>+4676000000</td>
                <td>20209</td>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                </tr>              
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
                

                <div class="footer py-2 ">
            <div class="container bg-dark">
            <?php include 'partials/footer.php';?>
            </div>
        </div>
      
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
      <script>
      $(document).ready(function(){
$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
    
    $("[data-toggle=tooltip]").tooltip();
});

      </script>
</body>
</html>