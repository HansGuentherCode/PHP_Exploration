<?php
$books = 
	[
		[
		'name' => 'Do Androids Dream of Electric Sheep',
		'releaseYear' => 1988,
		'author' => 'Philip K. Dick',
		'purchaseUrl' => 'http://example.com'
		],
		[
		'name' => 'Project Hail Mary',
		'releaseYear' => 2021,
		'author' => 'Andy Weir',
		'purchaseUrl' => 'http://example.com'
		],
		[
		'name' => 'The Martian',
		'releaseYear' => 2021,
		'author' => 'Andy Weir',
		'purchaseUrl' => 'http://example.com'
		]
	];
	
function filter($items, $func)
	{
	$filteredItems = [];
	
	foreach ($items as $item)
		{
		if ($func($item))
			{
			$filteredItems[] = $item;
			}
		}
	
	return ($filteredItems);
	}
	
$filteredBooks = array_filter($books, function($book) {
	return ($book['releaseYear'] < 2000);
});

require "index.view.php";