<?php  

	// Show Info Product
	class showInfoProduct {
		public $productList = array();

		public function addProduct( Product $product ) {
			$this->productList[] = $product;
		}

		public function showProduct() {
			$string = "PRODUCT LIST : <br>";

			foreach( $this->productList as $PRODUCT ) {
				$string .= "- {$PRODUCT->getInfoProduct()} <br>";
			}

			return $string;
		}
	}

?>