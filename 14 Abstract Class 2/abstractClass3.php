<?php  

	// Abstract base class
	abstract class Variable {
		public $string;

		// Non-Abstract Method
		public function __construct( $string ) {
			$this->string = $string;
		}

		// Abstract Method - Forces Child Classes to Implements
		abstract public function createString();
	}


	// Child class that extends the abstract class
	class Emotion1 extends Variable {
		public function createString() {
			return "Variable1_$this->string";
		}
	}


	// Child class that extends the abstract class
	class Emotion2 extends Variable {
		public function createString() {
			return "Variable2_$this->string";
		}
	}


	// Create Object of The Child Classes
	$Emotion1 = new Emotion1("Dream Big, Work Hard, Stay Humble");
	echo $Emotion1->createString();
	echo "<br>";

	$Emotion2 = new Emotion2("Just Be Yourself, There Is No One Better");
	echo $Emotion2->createString();

?>