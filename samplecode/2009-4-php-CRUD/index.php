<?

require "db.php";

$results = mysql_query("select * from posts");

while ($r = mysql_fetch_object($results)) {
	echo "<div>";
	echo $r->title . " - ";
	echo $r->author . " at ";
	echo $r->regdate . " ";
	echo "<a href='update.php?id=$r->id'>Update</a>/";
	echo "<a href='#' onclick='return del($r->id)'>Delete</a>";
	echo "</div>";
}

echo "<a href='create.php'>Create</a>";
?>

<script type="text/javascript">
function del(id) {
	if (confirm('정말 삭제하시겠습니까?'))
		location.href = 'delete_submit.php?id=' + id;
		
	return false;
}
</script>