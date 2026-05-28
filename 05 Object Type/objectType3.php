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
			return "$this->title, $this->writer, $this->publisher";	
		} 
	}


	class showInfoProduct {
		public function showProduct( Product $product ) {
			$string = "{$product->title} | {$product->getLabel()} (Rp. {$product->prize})";
			return $string;
		}
	}


	class showProductPrize {
		public function productPrize( Product $product ) {
			$string = "{$product->title} | (Rp. {$product->prize})";
			return $string;
		}
	}


	$product1 = new Product("Ultraman", "Toshizo Nemoto", "Tsuburaya Enterprises");
	$product2 = new Product("Kamen Rider", "Shotaro Ishinomori", "Toei Company");
	$product3 = new Product("Silver Hawks", "Masaki Izuka", "Rankin Animated Entertainment");
	$product4 = new Product("Captain Tsubasa", "Yoichi Takahashi", "Toei Animation");
	$product5 = new Product("Yugi Oh", "Kazuki Takahashi", "Studio Gallop");

	
	$infoProduct1 = new showInfoProduct();
	echo $infoProduct1->showProduct($product1);
	echo "<br>";
	$infoProduct1 = new showProductPrize();
	echo $infoProduct1->productPrize($product1);
	echo "<br><br><br>";

	$infoProduct2 = new showInfoProduct();
	echo $infoProduct2->showProduct($product2);
	echo "<br>";
	$infoProduct2 = new showProductPrize();
	echo $infoProduct2->productPrize($product2);
	echo "<br><br><br>";

	$infoProduct3 = new showInfoProduct();
	echo $infoProduct3->showProduct($product3);
	echo "<br>";
	$infoProduct3 = new showProductPrize();
	echo $infoProduct3->productPrize($product3);
	echo "<br><br><br>";

	$infoProduct4 = new showInfoProduct();
	echo $infoProduct4->showProduct($product4);
	echo "<br>";
	$infoProduct4 = new showProductPrize();
	echo $infoProduct4->productPrize($product4);
	echo "<br><br><br>";
	
	$infoProduct5 = new showInfoProduct();
	echo $infoProduct5->showProduct($product5);
	echo "<br>";
	$infoProduct5 = new showProductPrize();
	echo $infoProduct5->productPrize($product5);
	
?>