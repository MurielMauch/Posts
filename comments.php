<?php require_once('connection.php'); ?>

<?php

$idP = $_GET['id'];

$sql = "SELECT * FROM Comments WHERE postId = $idP";
$result = $conn->query($sql);

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comments</title>
</head>
  
<body>

<table border="1" align="center">
  <tr align="center" style="font-weight:bold">
    <td>Post</td>
    <td>Name</td>
    <td>Email</td>
    <td>Body</td>
  </tr>
  <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
      <td><?php echo $idP ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['body']; ?></td>
    </tr>
    <?php } ?>
</table>

</body>
</html>