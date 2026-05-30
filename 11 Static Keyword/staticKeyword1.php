<?php  

	class staticExample {
		public static $number = 1;

		public static function emotion() {
			return "Work Hard, Dream Big, Never Give Up";
		}
	}

	echo staticExample::$number;
	echo "<br>";
	echo staticExample::emotion();
	echo "<hr>";

?>