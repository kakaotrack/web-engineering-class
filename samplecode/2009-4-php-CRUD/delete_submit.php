<?

require "db.php";

$id = $_GET["id"];

$sql = "DELETE FROM posts WHERE id = $id";

mysql_query($sql);

echo "Deleted Successfully";

?>

<a href="index.php">Back</a>