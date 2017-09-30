<?php require_once('connection.php'); ?>

<?php
$sql = "SELECT * FROM Posts";
$result = $conn->query($sql);
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
    <td>Comments</td>
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
