<?php  
	
	// Product
	class Product {
		public $title = "Title",
			   $writer = "Writer",
			   $publisher = "Publisher",
			   $prize = 0;

		public function __construct( $title, $writer, $publisher, $prize ) {
			$this->title = $title;
			$this->writer = $writer;
			$this->publisher = $publisher;
			$this->prize = $prize;
		}

		public function getLabel() {
			return "$this->title, $this->publisher";	
		} 
	}

	$product1 = new Product("Ultraman", "Toshizo Nemoto", "Tsuburaya Enterprises", 5000);
	$product2 = new Product("Kamen Rider", "Shotaro Ishinomori", "Toei Company", 5000);

	
	echo "Movies : " . $product1->getLabel();
	echo "<br><br>"
	echo "Movies : " . $product2->getLabel();
	
?>
