<?

	require "db.php";

	$id = $_POST["id"];
	$title = $_POST['title'];
	$author = $_POST['author'];
	
	$sql = "UPDATE posts SET title = '$title', author = '$author'
	WHERE id = $id";

	mysql_query($sql);

	echo "성공적으로 업데이트했습니다.";

?>

<a href="index.php">Back</a>