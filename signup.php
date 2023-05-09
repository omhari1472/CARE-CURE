<?php include("connection.php"); ?>


<?php
    if($_POST['register'])
    {
      $username = $_POST['username'];
      $password     = $_POST['password'];  
   $query =" INSERT INTO USER (username,password) VALUES ('$username','$password')";
   $data = mysqli_query($conn,$query);
   if($data)
   {
    echo "Welcome to The Cure And Care.";
    session_start();
    $_SESSION['username'] = $username;
    header('location: index1.html');

   }
   else{
    echo "fail";
   }
}
?>