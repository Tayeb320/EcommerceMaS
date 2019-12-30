<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rate our Product</title>
<style>


ul {
    margin: 0px;
    padding: 10px 0px 0px 0px;
}

li.star {
    list-style: none;
    display: inline-block;
    margin-right: 5px;
    cursor: pointer;
    color: #9E9E9E;
}

li.star.selected {
    color: #ff6e00;
}

.row-title {
    font-size: 20px;
    color: #00BCD4;
}

.review-note {
    font-size: 12px;
    color: #999;
    font-style: italic;
}
.row-item {
    margin-bottom: 20px;
    border-bottom: #F0F0F0 1px solid;
}
p.text-address {
    font-size: 12px;
}
</style>
</head>

<body>
    <div class="container">
	
	  <div class="row" >
		<div class="col-md-4">
		
		<?php
			
			if(isset($_GET["id"]))
				
				{
			$data = array();
			$id = $_GET["id"];
			$sql_query = "SELECT * FROM products where product_id = ?";
		
		$stmt = $con->stmt_init();
		if($stmt->prepare($sql_query)) {	
			// Bind your variables to replace the ?s
			$stmt->bind_param('s', $id);
			// Execute query
			$stmt->execute();
			// store result 
			$stmt->store_result();
			$stmt->bind_result(
					$data['product_id'], 
					$data['product_cat'],
					$data['product_title'],
					$data['product_price'],
					$data['product_cost'],
					$data['quantity'],
					$data['status'],
					$data['product_desc'],
					$data['product_image'],
					$data['product_keywords'],
					$data['discount'],
					$data['sub_cateid']
					);
			$stmt->fetch();
			$stmt->close();
		}
			
			?>
		
		<img src="images/<?php echo $data['product_image']; ?>" style="height:150px;width:100%;">
		
		
		
				<?php }  ?>
		</div>
		
		
		<div class="col-md-8">
		
		<center><?php echo $data['product_title'];?> </center>
		<hr/>
		
		In stock : <?php echo $data['quantity'];?> <br/>
		
		Price : <?php echo $data['product_price'];?> <br/>
		
		
		</div>
	  
	  
	  
	  </div>
        <h2>Give your Ratings</h2>
        <span id="product_list"></span>
		
		<?php
		include "getRatingData.php"; ?>
    </div>
</body>
</html>

<script type="text/javascript">

    function showProductData(url)
    {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("product_list").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", url, true);
        xhttp.send();

    } 

    function mouseOverRating(productId, rating) {

        resetRatingStars(productId)

        for (var i = 1; i <= rating; i++)
        {
            var ratingId = productId + "_" + i;
            document.getElementById(ratingId).style.color = "#ff6e00";

        }
    }

    function resetRatingStars(productId)
    {
        for (var i = 1; i <= 5; i++)
        {
            var ratingId = productId + "_" + i;
            document.getElementById(ratingId).style.color = "#9E9E9E";
        }
    }

   function mouseOutRating(productId, userRating) {
	   var ratingId;
       if(userRating !=0) {
    	       for (var i = 1; i <= userRating; i++) {
    	    	      ratingId = productId + "_" + i;
    	          document.getElementById(ratingId).style.color = "#ff6e00";
    	       }
       }
       if(userRating <= 5) {
    	       for (var i = (userRating+1); i <= 5; i++) {
	    	      ratingId = productId + "_" + i;
	          document.getElementById(ratingId).style.color = "#9E9E9E";
	       }
       }
    }

    function addRating (productId, ratingValue) {
            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function ()
            {
                if (this.readyState == 4 && this.status == 200) {

                    showProductData('getRatingData.php');
                    
                    if(this.responseText != "success") {
                    	   alert(this.responseText);
                    }
                }
            };

            xhttp.open("POST", "insertRating.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            var parameters = "index=" + ratingValue + "&product_id=" + productId;
            xhttp.send(parameters);
    }
</script>