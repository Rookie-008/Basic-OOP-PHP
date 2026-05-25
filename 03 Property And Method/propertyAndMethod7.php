<?php  

	// Product
	class Product {
		public $title = "Title",
			   $writer = "Writer",
			   $publisher = "Publisher",
			   $prize = 0;

		public function getLabel() {
			return "$this->title, $this->writer";	
		} 
	}

	$product1 = new Product();
	$product1->title = "Ultraman";
	$product1->writer = "Toshizo Nemoto";
	$product1->publisher = "Tsuburaya Enterprises";
	$product1->prize = 50000;
	// var_dump($product1);


	$product2 = new Product();
	$product2->title = "Kamen Rider";
	$product2->writer = "Shotaro Ishinomori";
	$product2->publisher = "Toei Company";
	$product2->prize = 50000;

	
	echo "Novel : " . $product1->getLabel();
	echo "<br><br>"
	echo "Movies : " . $product2->getLabel();
	
?>