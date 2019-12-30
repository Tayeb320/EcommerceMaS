<?php
require_once "db1.php";
require_once "functions.php";
// Here the user id is harcoded.
// You can integrate your authentication code here to get the logged in user id

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

if(isset($data['product_id'])){

$pid = $data['product_id'] ;
$query = "SELECT * FROM products where product_id = $pid ";
$result = mysqli_query($conn, $query);

$outputString = '';

foreach ($result as $row) {
    $userRating = userRating($userId, $row['product_id'], $conn);
    $totalRating = totalRating($row['product_id'], $conn);
    $outputString .= '
        <div class="row-item">
 <div class="row-title">' . $row['product_title'] . '</div> <div class="response" id="response-' . $row['product_id'] . '"></div>
 <ul class="list-inline"  onMouseLeave="mouseOutRating(' . $row['product_id'] . ',' . $userRating . ');"> ';
    
    for ($count = 1; $count <= 5; $count ++) {
        $starRatingId = $row['product_id'] . '_' . $count;
        
        if ($count <= $userRating) {
            
            $outputString .= '<li value="' . $count . '" id="' . $starRatingId . '" class="star selected">&#9733;</li>';
        } else {
            $outputString .= '<li value="' . $count . '"  id="' . $starRatingId . '" class="star" onclick="addRating(' . $row['product_id'] . ',' . $count . ');" onMouseOver="mouseOverRating(' . $row['product_id'] . ',' . $count . ');">&#9733;</li>';
        }
    } // endFor
    
    $outputString .= '
 </ul>
 
 <p class="review-note">Total Reviews: ' . $totalRating . '</p>
 <p class="text-address">' . $row["product_desc"] . '</p>
</div>
 ';
}
echo $outputString;
}
?>
			