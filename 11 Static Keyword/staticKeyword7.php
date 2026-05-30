<?php  

	class Keyword {
		// public property
		public $variable;

		// public method
		public function humble() {
			return "Keep Calm, Stay Humble. <br>";
		}

		public function strong() {
			return "Dream Big, Work Hard <br>";
		}
		
		public function spirit() {
			return "Stay Strong, Never Give Up <br>";
		}

	}

	$object = new Keyword();
	$object->variable="Emotion";

	echo $object->variable;
	echo "<br>";
	echo $object->humble();
	echo $object->strong();
	echo $object->spirit();

?>