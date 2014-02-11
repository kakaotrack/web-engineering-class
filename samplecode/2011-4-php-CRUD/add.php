<?php

	$title = $_POST["title"];
	$body = $_POST["body"];

	if (!empty($title) && !empty($body)) {
		mysql_connect("localhost", "root", "apmsetup");
		mysql_select_db("php-blog-db");
		mysql_query("insert into posts(title, body, created)
					values ('$title', '$body', now())");

		echo "Created.";
		echo "<p><a href='index.php'>index</a>";
		exit;
	}

?><h1>Add Posts</h1>
<form method="post" name="PostAddForm" action="add.php">
	<p>title: <input type="text" name="title" /></p>
	<p>body: <textarea name="body"></textarea></p>
	<p><input type="submit" /></p>
</form>
