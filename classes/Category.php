<?php

class Category
{
   

    public $id;
    public $name;

    public function toList()
    {
        $query = "SELECT id, name FROM categories";
	$connection = new PDO('mysql:host=127.0.0.1;dbname=stock', 'root', 'alura');
	$result = $connection->query($query);
	$list = $result->fetchAll();

	return $list;
    }	
       
}