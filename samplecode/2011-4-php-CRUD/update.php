<?php

$id = $_GET["id"];
		
mysql_connect("localhost", "root", "apmsetup");
mysql_select_db("php-blog-db");

if (empty($id)) {
		$id = $_POST["id"];
		$title = $_POST["title"];
		$body = $_POST["body"];

		mysql_query("update posts set title = '$title', body = '$body' where id = '$id'");

		echo "<p>Updated.</p>";
		echo "<a href='index.php'>index</a>";
		exit;
} else {
		$results = mysql_query("select * from posts where id = '$id'");
		$r = mysql_fetch_object($results);
}

?>
<h1>Update Posts</h1>
<form name="UpdatePostForm" method="post" action="update.php">
	<input type="hidden" name="id" value="<?=$id?>" />
	<p><input type="text" name="title" value="<?=$r->title?>" /></p>
	<textarea name="body"><?=$r->body?></textarea>
	<p><input type="submit" /></p>
</form>
