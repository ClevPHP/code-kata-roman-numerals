<?php

require_once 'functions.php';
require_once 'roman-numerals.php';

$numerals = array(
	'I'    => 1,
	'ii'   => 2,
	'III'  => 3,
	'IV'   => 4,
	'V'    => 5,
	'vi'   => 6,
	'VII'  => 7,
	'VIII' => 8,
	'ix'   => 9,
	'X'    => 10,
	'XI'   => 11,
	'xii'  => 12,
	'XIII' => 13,
	'XIV'  => 14,
	'XV'   => 15,
	'XL'   => 40,
	'L'    => 50,
	'XC'   => 90,
	'xcix' => 99,
	'C'    => 100,
	'CD'   => 400,
	'd'    => 500,
	'M'    => 1000,
	'MCDXLIV' => 1444,
	'mmmccxxiii' => 3223,
	'MMMCMXCIX' => 3999,
);


foreach( $numerals as $test => $answer ) {
	echo $test . ' is ' . roman_numerals( $test ) . ". " . check('roman_numerals', $test, $answer) . "\n";
}


