<?php  

	require_once 'App/Product/Product.php';
	require_once 'App/Product/infoProduct.php';
	require_once 'App/Product/showInfoProduct.php';
	require_once 'App/Product/Movies.php';
	require_once 'App/Product/Games.php';

	$product1 = new Movies("Ultraman", "Toshizo Nemoto", "Tsuburaya Enterprises", 5000, 5);
	$product2 = new Games("Kamen Rider", "Shotaro Ishinomori", "Toei Company", 5000, 10);
	$product3 = new Movies("Silver Hawks", "Masaki Izuka", "Rankin Animated Entertainment", 5000, 15);
	$product4 = new Games("Captain Tsubasa", "Yoichi Takahashi", "Toei Animation", 5000, 20);
	$product5 = new Movies("Yugi Oh", "Kazuki Takahashi", "Studio Gallop", 5000, 25);

	$Production1 = new showInfoProduct();
	$Production1->addProduct( $product1 );
	$Production1->addProduct( $product2 );
	echo $Production1->showProduct();

?>