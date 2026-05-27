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
	$product2 = new Product("Kamen Rider", "Shotaro Ishinomori", "Toei Company", 50000);
	$product3 = new Product("Silver Hawks", "Jules Bass, Masaki Izuka, Lee Dannacher", "Rankin Animated Entertainment", 50000 );
	$product4 = new Product("Captain Tsubasa", "Yoichi Takahashi", "Group TAC", 50000);
	$product5 = new Product("Shaman King", "Hiroyuki Takei", "Shonen Jump", 50000);

	
	echo "Novel  : " . $product1->getLabel();
	echo "<br><br>"
	echo "Movies : " . $product2->getLabel();
	echo "<br><br>"
	echo "Movies : " . $product3->getLabel();
	echo "<br><br>"
	echo "Movies : " . $product4->getLabel();
	echo "<br><br>"
	echo "Movies : " . $product5->getLabel();
	
?>