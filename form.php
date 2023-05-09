<?php include("connection.php"); ?>


<?php
    if($_POST['register'])
    {
      $department = $_POST['department'];
      $doctor     = $_POST['doctor'];
      $name       =  $_POST['name'];
      $email      = $_POST['email'];
      $date       = $_POST['date'];
      $time        = $_POST['time'];

    
    
   $query =" INSERT INTO FORM (Department,Doctor,Name,Email,Date,Time) VALUES ('$department','$doctor','$name','$email','$date','$time')";
   $data = mysqli_query($conn,$query);
   if($data)
   {
    echo "Your appointment has been confirm. ";
   

   }
   else{
    echo "fail";
   }
}
?>