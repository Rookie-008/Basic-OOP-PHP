<?php  
	
	// Product
	class Product {
		public $title = "Title",
			   $writer = "Writer",
			   $publisher = "Publisher",
			   $price = 0;

		public function __construct( $title, $writer, $publisher, $price ) {
			$this->title = $title;
			$this->writer = $writer;
			$this->publisher = $publisher;
			$this->price = $price;
		}

		public function getLabel() {
			return "$this->title, $this->publisher";	
		} 
	}

	$product1 = new Product("Ultraman", "Toshizo Nemoto", "Tsuburaya Enterprises", 5000);
	$product2 = new Product("Kamen Rider", "Shotaro Ishinomori", "Toei Company", 5000);

	
	echo "Movies : " . $product1->getLabel();
	echo "<br><br>"
	echo "Games  : " . $product2->getLabel();
	
?>
