<?php  

	// Product
	class Product {
		public $title = "Title",
			   $writer = "Writer",
			   $publisher = "Publisher",
			   $price = 0;
	}

	$product1 = new Product();
	$product1->title = "Ultraman";
	$product1->writer = "Toshizo Nemoto";
	$product1->publisher = "Tsuburaya Enterprises";
	$product1->prize = 50000;
	var_dump($product1);

	echo "Movies : $product1->title, $product1->publisher";

	
?>
