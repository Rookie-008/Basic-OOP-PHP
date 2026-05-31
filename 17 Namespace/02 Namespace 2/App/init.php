<?php  

	// // PRODUCT
	// require_once 'App/Product/Product.php';
	// require_once 'App/Product/infoProduct.php';
	// require_once 'App/Product/showInfoProduct.php';
	// require_once 'App/Product/Movies.php';
	// require_once 'App/Product/Games.php';
	// require_once 'App/Product/User.php';

	// // SERVICE
	// require_once 'App/Service/User.php';


	// Cara 1
	// spl_autoload_register(function( $class ){
	// 	require_once 'Product/' . $class . '.php';
	// });	

	// Cara 2
	spl_autoload_register(function( $class ){
		$class = explode('\\', $class);
		$class = end($class);
		require_once __DIR__ . '/Product/' . $class . '.php';
	});


	spl_autoload_register(function( $class ){
		$class = explode('\\', $class);
		$class = end($class);
		require_once __DIR__ . '/Product/' . $class . '.php';
	});

?>