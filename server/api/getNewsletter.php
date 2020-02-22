<?php
session_start();
include("../includes/user.class.php");
$method = isset($_SERVER['REQUEST_METHOD']);
if($method){
    if($method == 'GET') {
        
        
        $userNewsletter = new User();
{
                    $listNewsletter = $userNewsletter->getListNewsletter();
                    echo json_encode($listNewsletter);
                }
        }
         else {
            echo json_encode("No List.");
        }
    }
//}

?>