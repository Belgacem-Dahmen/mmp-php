<?php
require "functions.php";
// require "router.php";



// loading the DB class
require "Database.php";
//loading config varaiables
$config = require "config.php";

$db = new Database($config['database']);
$posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);


dd($posts);
