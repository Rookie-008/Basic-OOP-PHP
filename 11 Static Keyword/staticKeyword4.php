<?php  

	class Keyword {
		public $number = 1;

		public function emotion() {
			return "Dream Big, Never Give Up" . $this->number++ . "Work Hard, Stay Humble <br>";
		}
	}

	$object1 = new Keyword;
	echo $object1->emotion();
	echo $object1->emotion();
	echo $object1->emotion();

	echo "<hr>";

	$object2 = new Keyword;
	echo $object2->emotion();
	echo $object2->emotion();
	echo $object2->emotion();

?>