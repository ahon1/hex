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
	// returns a random hex color
	public static function make(){
    	$rh = "#";
    	$i = 0;
    	for ( ; $i < 6; $i++ ) {
    		$j = mt_rand( 48, 63 );
    		if ( $j > 57 ) {
    			$j += 39;
    		}
    		$rh .= chr( $j );
    	}
    	return $rh;
	}

	// returns a light color
	public static function light() {
		$lightHex = "#";
		$i = 0;
		for ( ; $i < 6; $i++ ) { 
			$lightHex .= chr( mt_rand( 97 , 102 ) );
		}
		return $lightHex;
	}

	// returns a dark color
	public static function dark(){
		$darkHex = "#";
		$i = 0;
		for ( ; $i < 6; $i++ ) { 
			$darkHex .= chr( mt_rand( 48, 57 ) );
		}
		return $darkHex;	
	}

	// returns a cool color (more blue)
	public static function cool(){
		$coolHex = "#";
		$i = 0;
		// red and green (00 - 96)
		for ( ; i < 4; i++ ) {
			if ( i % 2 == 0) {
				$coolHex .= chr( mt_rand( 48, 54 ) ); // 0-6
			} else {
				$coolHex .= chr( mt_rand( 48, 57 ) ); // 0-9
			}
		}
		// blue (A0 to FF)
		$coolHex .= chr( mt_rand( 97, 102 ) ); // A-F
		$j = mt_rand( 48, 63 );
		if ( $j > 57 ) {
			$j += 39;
		}
    	$coolHex .= chr( $j ); // 0-F
		return $coolHex;
	}

	// returns a warm color (more red)
	public static function warm(){
		$warmHex = "#";
		// red (A0 to FF)
		$coolHex .= chr( mt_rand( 97, 102 ) ); // A-F
		$j = mt_rand( 48, 63 );
		if ( $j > 57 ) {
			$j += 39;
		}
    	$coolHex .= chr( $j ); // 0-F
    	// green and blue (00 - 96)
		for ( ; i < 4; i++ ) {
			if ( i % 2 == 0) {
				$coolHex .= chr( mt_rand( 48, 54 ) ); // 0-6
			} else {
				$coolHex .= chr( mt_rand( 48, 57 ) ); // 0-9
			}
		}
		return $warmHex;
	}

}




