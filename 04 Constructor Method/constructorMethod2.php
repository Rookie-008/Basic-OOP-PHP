<?php  
	
	// Product
	class Product {
		public $title,
			   $writer,
			   $publisher,
			   $prize;

		public function __construct( $title = "Title", $writer = "Writer", $publisher = "Publisher", $prize = 0) {
			$this->title = $title;
			$this->writer = $writer;
			$this->publisher = $publisher;
			$this->prize = $prize;
		}

		public function getLabel() {
			return "$this->title, $this->writer";	
		} 
	}

	$product1 = new Product("Ultraman", "Toshizo Nemoto", "Tsuburaya Enterprises", 50000);
	$product2 = new Product("Kamen Rider", "shotaro Ishinomori", "Toei Company", 50000);
	$product3 = new Product("Superman");
	$product4 = new Product("Naruto");

	
	echo "Movies : " . $product1->getLabel();
	echo "<br><br>"
	echo "Movies : " . $product2->getLabel();
	echo "<br><br>"
	// echo "Movies : " . $product3->getLabel();
	var_dump($product3);
	echo "<br><br>"
	var_dump($product4);
	
?>
