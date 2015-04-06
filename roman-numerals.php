<?php

/**
 * Roman Numerals
 *
 * @param string $numerals
 * @return integer
 */

// klhall987's Answer

function roman_numerals( $numerals ) {

	$numerals = strtolower( $numerals );
	$arabic_Numbers = str_split( $numerals );
	var_dump( $arabic_Numbers );
	foreach($arabic_Numbers as $numerals) {
		if($numerals == 'i'){
			$numerals = 1;
		} elseif($numerals == 'v') {
			$numerals = 5;
		} elseif ($numerals == 'x') {
			$numerals = 10;
		}
	}
	return($numerals);

}


