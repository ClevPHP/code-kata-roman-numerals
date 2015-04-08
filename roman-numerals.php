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
		} elseif( $roman == 'l' ) {
			$numbers[ $key ] = 50;
		} elseif( $roman == 'c' ) {
			$numbers[ $key ] = 100;
		} elseif( $roman == 'd' ) {
			$numbers[ $key ] = 500;
		} elseif( $roman == 'm' ) {
			$numbers[ $key ] = 1000;
		}
	}

	// There are ones but no tens or hundreds
	if( in_array( 1, $numbers ) == TRUE && in_array( 10, $numbers ) == FALSE && in_array( 100, $numbers ) == FALSE  ) {
		$onekey = array_search( 1, $numbers );

		if( $numbers[ $onekey ] < $numbers[ $onekey + 1 ] ) {
			$numbers[ $onekey ] = -1;
			$results = array_sum( $numbers );
			return $results;
		} else {
			$results = array_sum( $numbers );
			return $results;
		}
	// There are tens but no ones or hundreds
	} elseif ( in_array( 1, $numbers ) == FALSE && in_array( 10, $numbers ) == TRUE && in_array( 100, $numbers ) == FALSE ) {
		$tenkey = array_search( 10, $numbers );

		if( $numbers[ $tenkey ] < $numbers[ $tenkey + 1 ] ) {
			$numbers[ $tenkey ] = -10;
			$results = array_sum( $numbers );
			return $results;
		} else {
			$results = array_sum( $numbers );
			return $results;
		}
	// There are hundreds but no tens or ones
	} elseif ( in_array( 1, $numbers ) == FALSE && in_array( 10, $numbers ) == FALSE && in_array( 100, $numbers ) == TRUE ) {
		$hundredkey = array_search( 100, $numbers );

		if( $numbers[ $hundredkey ] < $numbers[ $hundredkey + 1 ] ) {
			$numbers[ $hundredkey ] = -100;
			$results = array_sum( $numbers );
			return $results;
		} else {
			$results = array_sum( $numbers );
			return $results;
		}
	// There are ones and tens but no hundreds
	} elseif ( in_array( 1, $numbers ) == TRUE && in_array( 10, $numbers ) == TRUE && in_array( 100, $numbers ) == FALSE  ) {
		$onekey = array_search( 1, $numbers );
		$tenkey = array_search( 10, $numbers );

		if( $numbers[ $onekey ] < $numbers[ $onekey + 1 ] ) {
			$numbers[ $onekey ] = -1;
		}

		if( $numbers[ $tenkey ] < $numbers[ $tenkey + 1 ] ) {
			$numbers[ $tenkey ] = -10;
		}

		$results = array_sum( $numbers );
		return $results;
	// There are tens and hundreds but no ones
	} elseif ( in_array( 1, $numbers ) == FALSE && in_array( 10, $numbers ) == TRUE && in_array( 100, $numbers ) == TRUE ) {
		$tenkey = array_search( 10, $numbers );
		$hundredkey = array_search( 100, $numbers );

		if( $numbers[ $tenkey ] < $numbers[ $tenkey + 1 ] ) {
			$numbers[ $tenkey ] = -10;
		}

		if( $numbers[ $hundredkey ] < $numbers[ $hundredkey + 1 ] ) {
			$numbers[ $hundredkey ] = -100;
		}

		$results = array_sum( $numbers );
		return $results;
	// There are ones and hundreds but no tens
	} elseif ( in_array( 1, $numbers ) == TRUE && in_array( 10, $numbers ) == FALSE && in_array( 100, $numbers ) == TRUE ) {
		$onekey = array_search( 1, $numbers );
		$hundredkey = array_search( 100, $numbers );

		if( $numbers[ $onekey ] < $numbers[ $onekey + 1 ] ) {
			$numbers[ $onekey ] = -1;
		}

		if( $numbers[ $hundredkey ] < $numbers[ $hundredkey + 1 ] ) {
			$numbers[ $hundredkey ] = -100;
		}

		$results = array_sum( $numbers );
		return $results;
	} elseif ( in_array( 1, $numbers ) == TRUE && in_array( 10, $numbers ) == TRUE && in_array( 100, $numbers ) == TRUE ) {
		$onekey = array_search( 1, $numbers );
		$tenkey = array_search( 10, $numbers );
		$hundredkey = array_search( 100, $numbers );

		if( $numbers[ $onekey ] < $numbers[ $onekey + 1 ] ) {
			$numbers[ $onekey ] = -1;
		}

		if( $numbers[ $tenkey ] < $numbers[ $tenkey + 1 ] ) {
			$numbers[ $tenkey ] = -10;
		}

		if( $numbers[ $hundredkey ] < $numbers[ $hundredkey + 1 ] ) {
			$numbers[ $hundredkey ] = -100;
		}

		$results = array_sum( $numbers );
		return $results;
	} else {
		$result = array_sum( $numbers );
		return $result;
	}
} // ends roman numerals function
