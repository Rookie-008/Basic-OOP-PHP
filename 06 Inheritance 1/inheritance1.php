<?php  
	
	// Product
	class Product {
		public $title,
			   $writer,
			   $publisher,
			   $prize,
			   $series,
			   $season,
			   $type;

		public function __construct( $title = "Title", $writer = "Writer", $publisher = "Publisher", $prize = 0, $series = 0, $season = 0, $type ) {
			$this->title = $title;
			$this->writer = $writer;
			$this->publisher = $publisher;
			$this->prize = $prize;
			$this->season = $season;
			$this->series = $series;
			$this->type = $type;
		}

		public function getLabel() {
			return "$this->title, $this->writer, $this->publisher";	
		} 

		public function getInfoProduct() {
			$string = "{$this->type} : {$this->title} | {$this->getLabel()} (Price. {$this->prize})";
			if ( $this->type == "Movies" ) {
				$string .= " - Series {$this->series}";
			} else if( $this->type == "Games" ) {
				$string .= " ~ Season {$this->season}";
			}

			return $string;
		}
	}


	class showInfoProduct {
		public function showProduct( Product $product ) {
			$string = "{$product->title} | {$product->getLabel()} (Price. {$product->prize})";
			return $string;
		}
	}


	$product1 = new Product("Ultraman", "Toshizo Nemoto", "Tsuburaya Enterprises", 5000, 5, 0, "Movies");
	$product2 = new Product("Kamen Rider", "Shotaro Ishinomori", "Toei Company", 5000, 0, 10, "Games");
	$product3 = new Product("Silver Hawks", "Masaki Izuka", "Rankin Animated Entertainment", 5000, 15, 0, "Movies");
	$product4 = new Product("Captain Tsubasa", "Yoichi Takahashi", "Toei Animation", 5000, 0, 20, "Games");
	$product5 = new Product("Yugi Oh", "Kazuki Takahashi", "Studio Gallop", 5000, 25, 0, "Movies");


	echo $product1->getInfoProduct();
	echo "<br><br>"
	echo $product2->getInfoProduct();

?>
