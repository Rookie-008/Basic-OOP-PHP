<?php  

	// Product
	class Product {
		public $title = "Title",
			   $writer = "Writer",
			   $publisher = "Publisher",
			   $prize = 0;

		public function ultramanSeries() {
			return "Ultraman Series";	
		} 
	}

	$product1 = new Product();
	$product1->title = "Ultraman";
	$product1->writer = "Toshizo Nemoto";
	$product1->publisher = "Tsuburaya Enterprises";
	$product1->prize = 50000;
	// var_dump($product1);

	echo "Movies : $product1->title, $product1->publisher";
	echo "<br><br>"
	echo $product1->ultramanSeries();
	
?>
