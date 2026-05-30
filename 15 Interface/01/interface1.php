<?php  

	// Define Interface
	interface Variable {
		public function createString();
	}

	// Implement The Interface in a Class
	class String1 implements Variable {
		public function createString() {
			echo "Dream Big, Work Hard, Stay Humble";
		}
	}

	// Implement The Interface in a Class
	class String2 implements Variable {
		public function createString() {
			echo "Just Be Yourself, There Is No One Better";
		}
	}


	$String1 = new String1();
	$String1->createString();
	echo "<br>";
	$String2 = new String2();
	$String2->createString();

?>