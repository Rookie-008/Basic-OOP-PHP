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
			return "$this->title, $this->publisher";	
		} 
	}


	class showInfoProduct {
		public function showProduct( Product $product ) {
			$string = "{$product->title} | {$product->getLabel()} (Rp. {$product->prize})";
			return $string;
		}
	}


	$product1 = new Product("Ultraman", "Toshizo Nemoto", "Tsuburaya Enterprises", 5000);
	$product2 = new Product("Kamen Rider", "Shotaro Ishinomori", "Toei Company", 5000);
	$product3 = new Product("Silver Hawks", "Masaki Izuka", "Rankin Animated Entertainment", 5000);
	$product4 = new Product("Captain Tsubasa", "Yoichi Takahashi", "Toei Animation", 5000);
	$product5 = new Product("Yugi Oh", "Kazuki Takahashi", "Studio Gallop", 5000);

	
	echo "Movies : " . $product1->getLabel();
	echo "<br><br>"
	echo "Games  : " . $product2->getLabel();
	echo "<br><br>"
	echo "Movies : " . $product3->getLabel();
	echo "<br><br>"
	echo "Games  : " . $product4->getLabel();
	echo "<br><br>"
	echo "Movies : " . $product5->getLabel();
	echo "<br><br>"

	$infoProduct1 = new showInfoProduct();
	echo $infoProduct1->showProduct($product1);
	echo "<br><br>"
	$infoProduct5 = new showInfoProduct();
	echo $infoProduct5->showProduct($product5);
	
?>