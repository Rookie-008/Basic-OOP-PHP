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
			return "$this->title, $this->writer";	
		} 
	}

	$product1 = new Product("Ultraman", "Toshizo Nemoto", "Tsuburaya Enterprises", 50000);
	$product2 = new Product("Kamen Rider", "shotaro Ishinomori", "Toei Company", 50000);

	
	echo "Movies : " . $product1->getLabel();
	echo "<br><br>"
	echo "Movies : " . $product2->getLabel();
	
?>
