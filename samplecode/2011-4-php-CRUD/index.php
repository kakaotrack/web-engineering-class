<?php
mysql_connect("localhost", "root", "apmsetup");
mysql_select_db("php-blog-db");
$results = mysql_query("select * from posts order by id desc");
?>
<h1>Blog Posts</h1>
<a href="add.php">Add Post</a>
<table border="1">
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Actions</th>
		<th>Created</th>
	</tr>
	<?php
	while ($r = mysql_fetch_object($results)) {
	?>
	<tr>
		<td><?=$r->id?></td>
		<td><a href="view.php?id=<?=$r->id?>"><?=$r->title?></a></td>
		<td>
			<a href="delete.php?id=<?=$r->id?>">Delete</a>
			<a href="update.php?id=<?=$r->id?>">Update</a>
		</td>
		<td><?=$r->created?></td>
	</tr>
	<?php
	}
	?>
</table>
