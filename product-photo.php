<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylesheets/product.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body> 

	<?php
		
		include_once 'header.php';
	?>

	<!--HEADER END-->
	
	<section id="main-sec">
	
	<img class="dress-img-1" src="images/product-photo/main.png"></img>
	<div class="sub-nav">
	<a class="s-nav" href="product-dress.php">DRESSES</a> - 
	<a class="s-nav" href="product-j.php">JEWELLERY</a> - 
	<a class="s-nav" href="product-photo.php">PHOTOGRAPHY</a> - 
	<a class="s-nav" href="product-venue.php">VENUES</a> - 
	<a class="s-nav" href="product-car.php">VEHICLES</a>
	</div><hr>
	<div id="wrap">
	<div id="columns" class="columns_4">
	
	<h2>&nbsp</h2>
	
	<?php
	 
		include 'includes/config.php';
		
		$sql = "SELECT * FROM product WHERE product_type='photography';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0) {
			while($row = mysqli_fetch_assoc($result)){
				$rowNew = $row['img_location'];
    ?>
	
	<figure>
	<img src="uploads/<?php echo $rowNew;?>">
	<figcaption><?php echo $row['product_name'];?></figcaption>
    <a class="button" href="view-j.html">View</a>
	</figure>
	
	<?php } } ?>
	
	</div>
	</div>
	</section>
	
	<!--FOOTER START-->
	
	<?php
	
		include_once 'footer.php';
	?>
	
</body>


</html>