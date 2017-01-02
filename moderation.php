<!DOCTYPE html>
<html lang="en">
<head>
  <title>Модерация</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="mod/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="col-md-12 wrapper-all">
			<?php 
  include 'mod/php/login.php';

  if (isset($_POST['delete']) && isset($_POST['id']))
  {
    $id   = get_post($conn, 'id');
    $query  = "DELETE FROM guests WHERE id='$id'";
    $result = $conn->query($query);
    if (!$result) print "DELETE failed: $query<br>" .
      $conn->error . "<br><br>";

  }

  if (isset($_POST['pass']) && isset($_POST['passid']))
  {
    $passid   = get_post($conn, 'passid');
    $query  = "UPDATE guests SET pass='1' WHERE id='$passid'";
    $result = $conn->query($query);
    if (!$result) print "DELETE failed: $query<br>" .
      $conn->error . "<br><br>";

  }

  $query  = "SELECT * FROM guests WHERE pass='0'";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed: " . $conn->error);

  $rows = $result->num_rows;
  
  for ($j = 0 ; $j < $rows ; ++$j)
      {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_NUM);

    print <<<_END
  '<div class="comments"><span>Имя:</span><p>$row[1]<p><span>Email: </span>$row[2]
  <p><span>Заголовок: </span>$row[3]<p><span>Сообщение: </span>$row[4]</div><hr/>'
  <form class="delete-form" action="moderation.php" method="post">
  <input type="hidden" name="delete" value="yes">
  <input type="hidden" name="id" value="$row[0]">
  <button type="submit" class="btn btn-danger">Удалить</button>
  </form>
  <form action="moderation.php" method="post">
  <input type="hidden" name="pass" value="yes">
  <input type="hidden" name="passid" value="$row[0]">
  <button type="submit" class="btn btn-success">Опубликовать</button><hr/></form>
_END;
  }
  
  $result->close();
  $conn->close();
  
  function get_post($conn, $var)
  {
    return $conn->real_escape_string($_POST[$var]);
  }
?>

		</div>
	</div>
</body>
</html>