<?php  

	class staticExample {
		public static $number = 1;

		public static function emotion() {
			return "Dream Big, Never Give Up" . self::$number++ . "Work Hard, Stay Humble";
		}
	}

	echo staticExample::$number;
	echo "<br>";
	echo staticExample::emotion();
	echo "<hr>";
	echo staticExample::emotion();

?>