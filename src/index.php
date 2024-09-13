<?php

require "functions.php";
require "Database.php";
//require "router.php";

// connect to the database, and execute a query.
$db = new Database("mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4;", 'root');
$posts = $db->query("select * from posts")->fetch(PDO::FETCH_ASSOC);

foreach ($posts as $post)
	{
	echo "<li>" . $post['title'] . "</li>";
	}