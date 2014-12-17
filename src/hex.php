<?php 
namespace Canvasowl;

/**
 * This class is able to output numurous hex colors.
 *
 * Method list:
 * make : 	returns a random color
 * light: 	returns a light color 
 * dark:  	returns a dark color
 * cool:  	returns a cool color;
 * warm:  	returna a warm color;
 */
class Hex
{

	// '0' to '6'
	private static function rangeLow() {
		return chr( mt_rand( 48, 54 ) );
	}

	// '0' to '9'
	private static function rangeMid() {
		return chr( mt_rand( 48, 57 ) );
	}

	// 'A' to 'F'
	private static function rangeHigh() {
		return chr( mt_rand( 65, 70 ) );
	}

	// '0' to 'F'
	private static function rangeFull() {
		$ch = mt_rand( 48, 63 );
		return chr( ( ( $ch > 57 ) ? $ch + 7 : $ch ) );
	}

	// returns a random hex color
	public static function make(){
    	$random = "#";
    	$i = 0;
    	for ( ; $i < 6; $i++ ) {
    		$random .= Hex::rangeFull();
    	}
    	return $random;
	}

	// returns a light color
	public static function light() {
		$lightHex = "#";
		$i = 0;
		for ( ; $i < 6; $i++ ) { 
			$lightHex .= Hex::rangeHigh();
		}
		return $lightHex;
	}

	// returns a dark color
	public static function dark(){
		$darkHex = "#";
		$i = 0;
		for ( ; $i < 6; $i++ ) { 
			$darkHex .= Hex::rangeMid();
		}
		return $darkHex;	
	}

	// returns a cool color
	public static function cool(){
		$coolHex = "#";
		$i = 0;
		for ( ; $i < 4; $i++ ) {
			if ( $i % 2 == 0) {
				$coolHex .= Hex::rangeLow();
			} else {
				$coolHex .= Hex::rangeMid();
			}
		}
		return $coolHex . Hex::rangeHigh() . Hex::rangeFull();
	}

	// returns a warm color (more red)
	public static function warm(){
		$warmHex = "#" . Hex::rangeHigh() . Hex::rangeFull();
		$i = 0;
		for ( ; $i < 4; $i++ ) {
			if ( $i % 2 == 0) {
				$warmHex .= Hex::rangeLow();
			} else {
				$warmHex .= Hex::rangeMid();
			}
		}
		return $warmHex;
	}

}




