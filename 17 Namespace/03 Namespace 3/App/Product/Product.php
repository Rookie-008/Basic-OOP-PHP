<?php  

	abstract class Product {
		private $title,
			   $writer,
			   $publisher,
			   $price,
			   $discount = 0;

		public function __construct( $title = "Title", $writer = "Writer", $publisher = "Publisher", $price = 0) {
			$this->title = $title;
			$this->writer = $writer;
			$this->publisher = $publisher;
			$this->price = $price;
		}



		public function setTitle( $title ) {
			return $this->title = $title;
		}

		public function setWriter( $writer ) {
			return $this->writer = $writer;
		}

		public function setPublisher( $publisher ) {
			return $this->publisher = $publisher;
		}

		public function setPrice( $price ) {
			return $this->price = $price;
		}

		public function setDiscount( $discount ) {
			$this->discount = $discount;
		}

		public function getLabel() {
			return "$this->title, $this->writer, $this->publisher";	
		} 

		


		public function getTitle() {
			return $this->title;
		}

		public function getWriter() {
			return $this->writer;
		}

		public function getPublisher() {
			return $this->publisher;
		}

		public function getPrice() {
			return $this->price - ( $this->prize * $this->discount / 100 );
		}

		public function getDiscount() {
			return $this->discount;
		}



		abstract public function getInfo();
		// abstract protected function getInfo();
		// abstract private function getInfo();
	}

?>