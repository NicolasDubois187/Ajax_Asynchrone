<?php

declare(strict_types=1);


function connect_to_mysql(): PDO
{
	$dsn = 'mysql:dbname=async_await;host=localhost;port=3307';
	$user = 'root';
	$password = '';
	$connection = new PDO($dsn, $user, $password);
	$connection->exec("set names utf8mb4");

	return $connection;
}

?>