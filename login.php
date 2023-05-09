<?php include("connection.php"); ?>
<?php

// Check if the form has been submitted
if (isset($_POST['register'])) {
  // Get the submitted username and password
  $username = $_POST['username'];
  $password = $_POST['password'];
  

  
  // Check if the username and password are correct
  $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $query);
  
  // If the username and password are correct, log the user in
  if (mysqli_num_rows($result) == 1) {
    session_start();
    $_SESSION['username'] = $username;
    header('location: index1.html');
  } else {
    // If the login is invalid, display an error message
    $error = 'Invalid login';
  }
}

?>

<!-- Display an error message if the login is invalid -->
<?php if (isset($error)) { ?>
  <p><?php echo $error; ?></p>
<?php } ?>
