<?php

$id = $_GET["id"];

mysql_connect("localhost", "root", "apmsetup");
mysql_select_db("php-blog-db");
$results = mysql_query("select * from posts where id = '$id'");
$r = mysql_fetch_object($results);
?>

<h1><?=$r->title?></h1>
<p><?=$r->body?></p>

<p><a href="index.php">index</a></p>
