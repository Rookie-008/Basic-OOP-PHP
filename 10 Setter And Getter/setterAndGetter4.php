<?php  
	
	// Product
	class Product {
		private $title,
			   $writer,
			   $publisher,
			   $price,
			   $discount = 0;

		public function __construct( $title = "Title", $writer = "Writer", $publisher = "Publisher", $price = 0) {
			$this->title = $title;
			$this->writer = $writer;
			$this->publisher = $publisher;
			$this->price = $price;
		}

		public function setTitle( $title ) {
			return $this->title = $title;
		}

		public function setWriter( $writer ) {
			return $this->writer = $writer;
		}

		public function setPublisher( $publisher ) {
			return $this->publisher = $publisher;
		}

		public function setPrice( $price ) {
			return $this->price = $price;
		}

		public function setDiscount( $discount ) {
			$this->discount = $discount;
		}

		public function getLabel() {
			return "$this->title, $this->writer, $this->publisher";	
		} 

		public function getInfoProduct() {
			$string = "{$this->title} | {$this->getLabel()} (Price. {$this->price}) - Season {$this->season}";

			return $string;
		}

		public function getTitle() {
			return $this->title;
		}

		public function getWriter() {
			return $this->writer;
		}

		public function getPublisher() {
			return $this->publisher;
		}

		public function getPrice() {
			return $this->price - ( $this->prize * $this->discount / 100 );
		}

		public function getDiscount() {
			return $this->discount;
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

	// Change Data Visibility PUBLIC
	// $product1->price = 50000;
	// echo $product1->price;

	// $product1->setDiscount(0);
	$product1->setDiscount(50);
	echo $product1->getPrice();
	echo "<br><br>"
	$product2->setDiscount(25);
	echo $product2->getPrice();
	echo "<hr>";

	// Condition Error
	// $product6 = new Product("Power Ranger");
	// echo $product6->title;


	echo $product1->getTitle();
	echo "<br><br>";
	echo "<hr>";
	echo $product1->setTitle("Dragon Ball");
	echo $product1->getTitle();
	echo "<br>";
	echo $product1->setWriter("Akira Toriyama");
	echo $product1->getWriter();
	echo "<br>";
	echo $product1->setPublisher("Shonen Jump");
	echo $product1->getPublisher();
	echo "<br>";
	echo $product1->setPrice(5000);
	echo $product1->getPrice();


?>