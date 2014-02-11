<?

require "db.php";

$id = $_GET["id"];

$sql = "select * from posts where id = $id";
$results = mysql_query($sql);
$r = mysql_fetch_object($results);

?>
<form method="post" action="update_submit.php">
	<input type="hidden" name="id" value="<?=$r->id?>" />
	<p>제목: <input type="text" name="title" value="<?=$r->title?>"/></p>
	<p>작성자: <input type="text" name="author" value="<?=$r->author?>"/></p>
	<p><input type="submit" value=" 작 성 " /></p>
</form>