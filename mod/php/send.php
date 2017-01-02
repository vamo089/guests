
<?php 
  require_once 'login.php';

function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    
    return $value;
}

  if (isset($_POST['name'])   &&
      isset($_POST['email'])    &&
      isset($_POST['subject']) &&
      isset($_POST['message'])){
    

  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $name = clean($name);
  $surname = clean($surname);
  $email = clean($email);
  $message = clean($message);


    
    if(!empty($name) && !empty($email) && !empty($email) && !empty($message)) {       
    $name    = get_post($conn, 'name');
    $email = get_post($conn, 'email');
    $subject     = get_post($conn, 'subject');
    $message     = get_post($conn, 'message');
    $query    = "INSERT INTO guests VALUES" .
      "('$id','$name', '$email', '$subject', '$message','$pass')";
    $result   = $conn->query($query);

      if (!$result) print "INSERT failed: $query<br>" .
      $conn->error . "<br><br>"; 
  }

    }

  
  
  function get_post($conn, $var)
  {
    return $conn->real_escape_string($_POST[$var]);
  }
