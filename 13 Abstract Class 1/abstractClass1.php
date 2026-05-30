<?php  

	abstract class classAbstract {

		// Force Extending Class To Define Method
		abstract public function getVariable();
		abstract public function setVariable($value);

		// Common Method
		public function showData() {
			print $this->getVariable() . "<br>";
		}
	}


	class Variable1 extends classAbstract {
		public function getVariable() {
			return "Dream Big, Work Hard, Stay Humble";
		}

		public function setVariable($value) {
			return "{$value}Dream Big, Work Hard, Stay Humble";
		}
	}

	class Variable2 extends classAbstract {
		public function getVariable() {
			return "Just Be Yourself, There Is No One Better";
		}

		public function setVariable($value) {
			return "{$value}Just Be Yourself, There Is No One Better";
		}
	}


	$object1 = new Variable1();
	$object1->showData();
	echo $object1->setVariable('Variable1_'), "<br>";
	echo "<br>";
	$object2 = new Variable2();
	$object2->showData();
	echo $object2->setVariable('Variable2_'), "<br>";

?>