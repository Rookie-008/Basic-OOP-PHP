<?php  

	abstract class classAbstract {
		// An Abstract Method Only Needs To Define The Required Arguments
		abstract public function setVariable( $variable );
	}

	class Varriable1 extends classAbstract {
		// A Child Class May Define Optional Parameters Which Are Not Present In The Parents Signature
		public function setVariable ( $variable, $sign = " . " ) {
			if ( $variable == "Food" ) {
				$string == "This Is Food";
			} else if ( $variable == "Drink" ){
				$string = "This Is Drink";
			} else {
				$string = "This Is Not Food Or Drink / May You Write Wrong Data, Check Data Insert";
			}

			return "{$string}{$sign} {$variable}";
		}
	}

	$object1 = new Variable1();
	echo $object1->setVariable("Food"), "<br>";
	echo $object1->setVariable("Drink"), "<br>";

?>