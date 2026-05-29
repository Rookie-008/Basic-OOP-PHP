<?php  
	
	// Product
	class Product {
		public $title,
			   $writer,
			   $publisher,
			   $discount = 0;
			   
		private $price;

		public function __construct( $title = "Title", $writer = "Writer", $publisher = "Publisher", $price = 0) {
			$this->title = $title;
			$this->writer = $writer;
			$this->publisher = $publisher;
			$this->price = $price;
		}

		public function getLabel() {
			return "$this->title, $this->writer, $this->publisher";	
		} 

		public function getInfoProduct() {
			$string = "{$this->title} | {$this->getLabel()} (Price. {$this->price}) - Season {$this->season}";

			return $string;
		}

		public function getPrice() {
			return $this->price - ( $this->price * $this->discount / 100 );
		}

		public function setDiscount( $discount ) {
			$this->discount = $discount;
		}
	}


	// Show Info Product
	class showInfoProduct {
		public function showProduct( Product $product ) {
			$string = "{$product->title} | {$product->getLabel()} (Price. {$product->price})";
			return $string;
		}
	}


	// Extends Product
	class Movies extends Product {
		public $series;

		public function __construct( $title = "Title", $writer = "Writer", $publisher = "Publisher", $price = 0, $series = 0 ) {
			parent::__construct( $title, $writer, $publisher, $price );
			$this->series = $series;
		}

		public function getInfoProduct() {
			$string = "Movies : " . parent::getInfoProduct() . " - Series {$this->series}";
		}
	}


	class Games extends Product {
		public $season;

		public function __construct( $title = "Title", $writer = "Writer", $publisher = "Publisher", $price = 0, $season = 0 ) {
			parent::__construct( $title, $writer, $publisher, $price );
			$this->season = $season;
		}

		public function getInfoProduct() {
			$string = "Games : " . parent::getInfoProduct() . " ~ Season {$this->season}";
		}
	}


	$product1 = new Movies("Ultraman", "Toshizo Nemoto", "Tsuburaya Enterprises", 5000, 5);
	$product2 = new Games("Kamen Rider", "Shotaro Ishinomori", "Toei Company", 5000, 10);
	$product3 = new Movies("Silver Hawks", "Masaki Izuka", "Rankin Animated Entertainment", 5000, 15);
	$product4 = new Games("Captain Tsubasa", "Yoichi Takahashi", "Toei Animation", 5000, 20);
	$product5 = new Movies("Yugi Oh", "Kazuki Takahashi", "Studio Gallop", 5000, 25);


	echo $product1->getInfoProduct();
	echo "<br><br>"
	echo $product2->getInfoProduct();
	echo "<hr>";

	// Change Data Visibility PUBLIC - PRICE
	// $product1->price = 50000;
	// echo $product1->price;
	// echo $product1->getPrice();

	// Change Data Visibility PUBLIC - DISCOUNT
	$product1->discount = 80;
	echo $product1->price;
	echo $product1->getPrice();

	// echo $product1->getPrice();

?>