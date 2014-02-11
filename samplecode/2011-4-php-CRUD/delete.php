<?php

$id = $_GET['id'];

mysql_connect("localhost", "root", "apmsetup");
mysql_select_db("php-blog-db");
mysql_query("delete from posts where id = '$id'");

echo "<p>Deleted.</p>";
echo "<a href='index.php'>index</a>";

?>
