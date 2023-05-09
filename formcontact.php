<?php include("connectioncontact.php"); ?>


<?php
    if($_POST['register'])
    {
      $name = $_POST['name'];
      $email     = $_POST['email'];
      $subject       =  $_POST['subject'];
      $message      = $_POST['message'];
    
   $query =" INSERT INTO FORM1 VALUES ('$name','$email','$subject','$message')";
   $data = mysqli_query($conn,$query);
   if($data)
   {
    echo "Your query has been submitted. ";
   

   }
   else{
    echo "fail";
   }
}
?>