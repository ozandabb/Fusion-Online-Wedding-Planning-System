<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="stylesheets/product.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="cart.js"></script>
</head>

<body> 

	<?php
		
		include_once 'header.php';
	?>

	<!--HEADER END-->
	
	<section id="main-sec">
	
	<img class="dress-img-1" src="images/product-dress/main.png"></img>
	<div class="sub-nav">
	<a class="s-nav" href="product-dress.php">DRESSES</a> - 
	<a class="s-nav" href="product-j.php">JEWELLERY</a> - 
	<a class="s-nav" href="product-photo.php">PHOTOGRAPHY</a> - 
	<a class="s-nav" href="product-venue.php">VENUES</a> - 
	<a class="s-nav" href="product-car.php">VEHICLES</a>
	</div><hr>
	<div id="wrap">
	<div id="columns" class="columns_4">
	
	<h2>BRIDE COLLECTION</h2><br>
	
	 <?php
	 
		include 'includes/config.php';
		
		$sql = "SELECT * FROM product WHERE inner_type='bride_d';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0) {
			while($row = mysqli_fetch_assoc($result)){
				$rowNew = $row['img_location'];
				$pid = $row['product_id'];
    ?>
	
	<figure>
	<img src="uploads/<?php echo $rowNew;?>">
	<figcaption><?php echo $row['product_name'];?></figcaption>
    <a class="button" href="view-product.php?id=<?php echo $row['product_id'];?>">View</a>
	</figure>
	
	<?php } } ?>
	
	<h2>GROOM COLLECTION</h2><br>
	
	<?php
		
		$sql = "SELECT * FROM product WHERE inner_type='groom_d';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if($resultCheck > 0) {
			while($row = mysqli_fetch_assoc($result)){
				$rowNew = $row['img_location'];
				$pid = $row['product_id'];
    ?>
	
	<figure>
	<img src="uploads/<?php echo $rowNew;?>">
	<figcaption><?php echo $row['product_name'];?></figcaption>
    <a class="button" href="view-product.php?id=<?php echo $row['product_id'];?>">View</a>
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