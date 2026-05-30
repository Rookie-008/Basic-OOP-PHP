<?php  

	class Keyword {
		public $number = 1;

		public function emotion() {
			return "Dream Big, Never Give Up" . $this->number++ . "Work Hard, Stay Humble <br>";
		}
	}

	$object = new Keyword;
	echo $object->emotion();
	echo $object->emotion();
	echo $object->emotion();

?>