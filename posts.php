<?php require_once('connection.php'); ?>

<?php

$sql = "SELECT * FROM Posts";
$result = $conn->query($sql);
/*
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Title: " . $row["title"]. " Body: " . $row["body"]. " User Id: " .$row["userId"] . "<br>";
    }
} else {
    echo "0 results";
}
*/
/*
mysql_select_db($dbname, $conexao);
$query_rs_posts = "SELECT * FROM Posts";
$rs_posts = mysql_query($query_rs_posts, $conexao) or die(mysql_error());
$row_rs_posts = mysql_fetch_assoc($rs_posts);
$totalRows_rs_posts = mysql_num_rows($rs_posts);
*/
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Posts</title>
</head>
  
<body>

<table border="1" align="center">
  <tr align="center" style="font-weight:bold">
    <td>Id</td>
    <td>Title</td>
    <td>Body</td>
    <td>Comentários</td>
  </tr>
  <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['title']; ?></td>
      <td><?php echo $row['body']; ?></td>
      <td><a href="comments.php?id=<?php echo $row['id'];?>">Comentários</a></td>
    <?php } ?>
</table>

</body>
</html>
