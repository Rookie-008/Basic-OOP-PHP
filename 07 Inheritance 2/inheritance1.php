<?php  
	
	// Product
	class Product {
		public $title,
			   $writer,
			   $publisher,
			   $price,
			   $series,
			   $season;

		public function __construct( $title = "Title", $writer = "Writer", $publisher = "Publisher", $price = 0, $series = 0, $season = 0) {
			$this->title = $title;
			$this->writer = $writer;
			$this->publisher = $publisher;
			$this->prize = $price;
			$this->series = $series;
			$this->season = $season;	
		}

		public function getLabel() {
			return "$this->title, $this->writer, $this->publisher";	
		} 

		public function getInfoProduct() {
			$string = "{$this->title} | {$this->getLabel()} (Prize. {$this->price}) - Season {$this->season}";

			return $string;
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
		public function getInfoProduct() {
			$string = "Movies : {$this->title} | {$this->getLabel()} (Price. {$this->price}) - Series {$this->series}";
		}
	}

	class Games extends Product {
		public function getInfoProduct() {
			$string = "Games : {$this->title} | {$this->getLabel()} (Price. {$this->price}) ~ Season {$this->season}";
		}
	}


	$product1 = new Movies("Ultraman", "Toshizo Nemoto", "Tsuburaya Enterprises", 5000, 5, 0);
	$product2 = new Games("Kamen Rider", "Shotaro Ishinomori", "Toei Company", 5000, 0, 10);
	$product3 = new Movies("Silver Hawks", "Masaki Izuka", "Rankin Animated Entertainment", 5000, 15, 0);
	$product4 = new Games("Captain Tsubasa", "Yoichi Takahashi", "Toei Animation", 5000, 0, 20);
	$product5 = new Movies("Yugi Oh", "Kazuki Takahashi", "Studio Gallop", 5000, 25, 0);


	echo $product1->getInfoProduct();
	echo "<br><br>"
	echo $product2->getInfoProduct();

?>
