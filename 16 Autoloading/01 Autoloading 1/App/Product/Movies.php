<?php  

	class Movies extends Product {
		public $series;

		public function __construct( $title = "Title", $writer = "Writer", $publisher = "Publisher", $price = 0, $series = 0 ) {
			parent::__construct( $title, $writer, $publisher, $price );
			$this->series = $series;
		}	

		public function getInfoProduct() {
			$string = "Movies : " . $this->getInfo() . " - Series {$this->series}";
		}

		public function getInfo() {
			$string = "{$this->title} | {$this->getLabel()} (Price. {$this->price}) - Season {$this->season}";

			return $string;
		}
	}

?>