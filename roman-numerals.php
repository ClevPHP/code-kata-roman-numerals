<?php

/**
 * Roman Numerals
 *
 * @param string $numerals
 * @return integer
 */


function roman_numerals( $numerals ) {

	$numerals = strtolower( $numerals );

	$numbers = str_split( $numerals );

	foreach( $numbers as $key => $roman ) {

		if( $roman == 'i' ) {

			$numbers[ $key ] = 1;

		} elseif( $roman == 'v' ) {

			$numbers[ $key ] = 5;

		} elseif( $roman == 'x' ) {

			$numbers[ $key ] = 10;

		}
	}

	if ( count( $numbers ) == 1 ) {

		$result = $numbers[ 0 ];

		return $result;

	} elseif ( count( $numbers ) == 2 AND ( ( $numbers[ 0 ] > $numbers[ 1 ] ) || ( $numbers[ 0 ] == $numbers[ 1 ] ) ) ) {

		$result = $numbers[ 0 ] + $numbers[ 1 ];

		return $result;

	} elseif ( count( $numbers ) == 2 AND ( $numbers[ 0 ] < $numbers[ 1 ] ) ) {

		$result = $numbers[ 1 ] - $numbers[ 0 ];

		return $result;

	} elseif ( count( $numbers ) == 3 AND ( $numbers[ 1 ] < $numbers[ 2 ] ) ) {

		$result = $numbers[ 2 ] - $numbers[ 1 ];

		$result = $result + $numbers[ 0 ];

		return $result;
	} elseif ( count( $numbers ) == 3 ) {

		$result = $numbers[ 0 ] + $numbers[ 1 ] + $numbers[ 2 ];

		return $result;
	
	} elseif ( count( $numbers ) == 4 ) {

		$result = $numbers[ 0 ] + $numbers[ 1 ] + $numbers[ 2 ] + $numbers[ 3 ];

		return $result;
	}

}
