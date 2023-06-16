<?php
require "functions.php";
// require "router.php";



// loading the DB class
require "Database.php";
//loading config varaiables
$config = require "config.php";

$db = new Database($config['database']);


$id = $_GET['id'];
$request = "select * from posts where id = :id";
$post = $db->query($request,['id' => $id])->fetch(PDO::FETCH_ASSOC);


dd($post);
