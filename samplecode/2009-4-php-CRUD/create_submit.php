<?

require "db.php";

$title = $_POST['title'];
$author = $_POST['author'];

$sql = "INSERT INTO posts(title, author, regdate)
VALUES ('$title', '$author', now())";

mysql_query($sql);

echo "성공적으로 작성했습니다.";

?>