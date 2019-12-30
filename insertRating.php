<?php
require_once ('db1.php');
// getting logged in user id
if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }


$userId = $ip;

if (isset($_POST["index"], $_POST["product_id"])) {
    
    $productId = $_POST["product_id"];
    $rating = $_POST["index"];
    
    $checkIfExistQuery = "select * from tbl_rating where user_id = '" . $userId . "' and product_id = '" . $productId . "'";
    if ($result = mysqli_query($conn, $checkIfExistQuery)) {
        $rowcount = mysqli_num_rows($result);
    }
    
    if ($rowcount == 0) {
        $insertQuery = "INSERT INTO tbl_rating(user_id,product_id, rating) VALUES ('" . $userId . "','" . $productId . "','" . $rating . "') ";
        $result = mysqli_query($conn, $insertQuery);
        echo "success"; 
    } else {
        echo "Already Voted!"; 
exit;
		
    }
}
