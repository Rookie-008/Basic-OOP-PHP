<?php  

	class Games extends Product {
		public $season;

		public function __construct( $title = "Title", $writer = "Writer", $publisher = "Publisher", $price = 0, $season = 0 ) {
			parent::__construct( $title, $writer, $publisher, $price );
			$this->season = $season;
		}

		public function getInfoProduct() {
			$string = "Games : " . $this->getInfo() . " ~ Season {$this->season}";
		}

		public function getInfo() {
			$string = "{$this->title} | {$this->getLabel()} (Price. {$this->price}) - Season {$this->season}";

			return $string;
		}
	}

?>