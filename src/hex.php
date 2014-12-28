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

	// returns hex string represtation of a decimal value between 0 - 255
	private static function rangeFull() {
		return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT );
	}

	// returns hex string with value of '00' - '99'
	private static function rangeDigit() {
		return str_pad( dechex( mt_rand( 0, 153 ) ), 2, '0', STR_PAD_LEFT );
	}

	// returns hex string with value of 'AA' - 'FF'
	private static function rangeAlpha() {
		return dechex( mt_rand( 170, 255 ) );
	}

	// returns a random hex color
	public static function make(){
		return '#' . Hex::rangeFull() . Hex::rangeFull() . Hex::rangeFull();
	}

	// returns a light color
	public static function light(){
		return '#' . Hex::rangeAlpha() . Hex::rangeAlpha() . Hex::rangeAlpha();
	}

	// returns a dark color
	public static function dark(){
		return '#' . Hex::rangeDigit() . Hex::rangeDigit() . Hex::rangeDigit();
	}

	// returns a cool color
	public static function cool(){
		return '#' . Hex::rangeDigit() . Hex::rangeDigit() . Hex::rangeAlpha();
	}

	// returns a warm color
	public static function warm(){
		return '#' . Hex::rangeAlpha() . Hex::rangeDigit() . Hex::rangeDigit();
	}

}



