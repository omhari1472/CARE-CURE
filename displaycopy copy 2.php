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
    echo "Your appointment has been confirm. ";
   

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
   
   <table border="3" >
    <tr>
    <th style="padding: 10px;">Name</th>
    <th style="padding: 10px;" >Token_no</th>
    </tr>


   <?php
    while( $result=mysqli_fetch_assoc($data)){
       echo " <tr>
       <td >".$result['Name']."</td>
       <td>".$result['Token_no']."</td>
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