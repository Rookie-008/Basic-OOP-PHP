<?php  

	class Keyword {
		// public property
		public $number = 1;

		// public method
		public function humble() {
			return "Keep Calm " . $this->number++ . " Stay Humble. <br>";
		}

		public function strong() {
			return "Dream Big " . $this->number++ . " Work Hard <br>";
		}
		
		public function spirit() {
			return "Stay Strong" . $this->number++ . " Never Give Up <br>";
		}

	}

	$object = new Keyword();

	echo $object->humble();
	echo $object->strong();
	echo $object->spirit();

?>