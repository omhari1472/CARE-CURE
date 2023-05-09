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
$query="SELECT *FROM FORM";
$data=mysqli_query($conn, $query);

 $total=mysqli_num_rows($data);


 
//  echo $total;

 if($total !=0)
 {
    
    ?>
   
   <table border="3" >
    <tr>
    <th>Token Number</th>
    <th>Department</th>
    <th>Doctor</th>
    <th>Name</th>
    <th>Email </th>
    <th>Date</th>
    <th>Time </th>
    </tr>


   <?php
    while( $result=mysqli_fetch_assoc($data)){
        
       echo " <tr>
       <td>".$result['Token_no']."</td>
       <td>".$result['Department']."</td>
       <td>".$result['Doctor']."</td>
       <td>".$result['Name']."</td>
       <td>".$result['Email']."</td>
       <td>".$result['Date']."</td>
       <td>".$result['Time']."</td>
       </tr>
       "<br>;
       echo "your token no is .$result['Token_no]";

    }
 }

else{
    echo "No records found";
}
?>
</table>
<!-- echo $result[Department]."".$result[Doctor]."".$result[Name]." ".$result[Email]." ".$result[Date]." ".$result[Time]."<br>"; -->