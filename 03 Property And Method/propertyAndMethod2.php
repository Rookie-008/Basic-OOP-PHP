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
	var_dump($product1);

	$product2 = new Product();
	// $product2->title = "Kamen Rider";
	var_dump($product2->title);
	
?>
