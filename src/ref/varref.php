<?php

declare(strict_types=1);

// Data Types & Type Casting

// 4 Scalar Types
	
	echo "------------ Variable Types ------------" . "<br />";
	
	// bool
	$completed = true;
	echo "bool: ";
	echo $completed . "<br />";
	// int
	$score = 75;
	echo "int: ";
	echo $score . "<br />";
	// float
	$price = 0.99;
	echo "float: ";
	echo $price . "<br />";
	// string
	$greeting = "Hello Gio";
	echo "string: ";
	echo $greeting . "<br />";
	
	echo "VarDump: ";
	var_dump($score);
	echo "<br />";
	
// 4 Compound Types
	// array
	$companies = [1, 2, 3, 0.5, -9.2, 'A', 'b', true];
	echo "array: ";
	print_r($companies);
	
// 2 Special Types
	// resource
	// null
	
function sum(int $x, int $y)
	{
	var_dump($x, $y);
	return ($x + $y);
	}
	
echo "<br />Sum: " , sum(2, 3);

$tCast = 39.3;
echo "<br />TypeCast: " . (int)$tCast;

$firstName = 'Hans';
$lastName = 'Guenther';

$name = $firstName . ' ' . $lastName;
echo $name . '<br />';

$name[-2] = 'I';

var_dump($name);

echo "<br />";

// Strings 

$x = 1;
$y = 2;

// Heredoc
$text = <<<TEXT
Line 1 $x
Line 2 $y
Line 3 ' "
TEXT;

// Nowdoc
$text = <<<'TEXT'
Line 1
Line 2
Line 3 ' "
TEXT;

// Arrays
$programmingLanguages = ['PHP', 'C', 'ASM'];

var_dump(isset($programmingLanguages[3]));

?>