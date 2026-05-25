<?php  

	class Product {

		// Property
		public $name;
		public $flavor;

		// Method to set the properties
		function set_details($name, $flavor) {
			$this->name = $name;
			$this->flavor = $flavor;
		}

		// Method to Display the properties
		function get_details() {
			echo "Name : " . $this->name . "<br> Flavor : " . $this->flavor . "<br><br>";
		}
	
	}


	// Create an Object named $product1 from the class Data
	$product1 = new Product();
	$product1->set_details('Soy Sauce', 'Sweet'); // Set Property Values
	$product1->get_details();


	// Create an Object named $product2 from the class Data
	$product2 = new Product();
	$product2->set_details('Soy Sauce', 'Salty'); // Set Property Values
	$product2->get_details();


?>