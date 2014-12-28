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
	
	// returns hex string represtation of a decimal value between 0 - 150
	private static function rangeLow() {
		return str_pad( dechex( mt_rand( 0, 150 ) ), 2, '0', STR_PAD_LEFT );
	}

	// returns hex string represtation of a decimal value between 160 - 255
	private static function rangeHigh() {
		return dechex( mt_rand( 160, 255 ) );
	}

	// returns hex string represtation of a decimal value between 0 - 255
	private static function rangeFull() {
		return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT );
	}

	// returns a character between '0' - '9'
	private static function charDigit() {
		return chr( mt_rand( 48, 57 ) );
	}

	// returns a character between 'A' - 'F'
	private static function charAlpha() {
		return chr( mt_rand( 65, 70 ) );
	}

	// returns a random hex color
	public static function make(){
    	return '#' . Hex::rangeFull() . Hex::rangeFull() . Hex::rangeFull();
	}

	// returns a light color
	public static function light(){
		$lightHex = "#";
		$i = 0;
		for ( ; $i <= 5; $i++) { 
			$lightHex .= Hex::charAlpha();
		}
		return $lightHex;
	}

	// returns a dark color
	public static function dark(){
		$darkHex = "#";
		$i = 0;
		for ( ; $i <= 5; $i++) { 
			$darkHex .= Hex::charDigit();
		}
		return $darkHex;
	}

	// returns a cool color
	public static function cool(){
		return '#' . Hex::rangeLow() . Hex::rangeLow() . Hex::rangeHigh();
	}

	// returns a warm color
	public static function warm(){
		return '#' . Hex::rangeHigh() . Hex::rangeLow() . Hex::rangeLow();
	}

}



