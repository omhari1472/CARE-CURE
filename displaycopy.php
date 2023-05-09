<?php include("connection.php"); ?>

<!-- error_reporting(0); -->

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
      echo '<p style="color: blue; margin-botttom:50px;margin-top:20px;margin-left:20px; font-size: 40px;">Your appointment has been booked.</p>';

   //  echo " Your appointment has been confirm. ";
   

   }
   else{
    echo "fail";
   }
}
?>

<?php
$query="SELECT * FROM FORM
WHERE Token_no = (SELECT MAX(Token_no) FROM FORM)";

// "SELECT *FROM FORM where Name in('shanky')";
$data=mysqli_query($conn, $query);

 $total=mysqli_num_rows($data);


 
//  echo $total;

 if($total !=0)
 {
    
    ?>
   
   <table border="3" style= "margin:auto; text-align:center; border:solid green; width: 50%;">
    <tr>
    <th style="padding: 10px; background-color: #46C2CB;">Patient Name</th>
    <th style="padding: 10px; background-color: #46C2CB;" >Token no</th>
    </tr>


   <?php
    while( $result=mysqli_fetch_assoc($data)){
      echo '<body style="background-color: #10A19D;">';  
       echo " <tr>
       <td style='background-color: #46C2CB;'>".$result['Name']."</td>
       <td style='background-color: #46C2CB;'>".$result['Token_no']."</td>
       </tr>
       ";
    }
   //  echo "your token no is".$result['Token_no'];
 }

else{
    echo "No records found";
}
?>
</table>


<!-- echo $result[Department]."".$result[Doctor]."".$result[Name]." ".$result[Email]." ".$result[Date]." ".$result[Time]."<br>"; -->



