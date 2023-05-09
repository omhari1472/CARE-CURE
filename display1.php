<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "appointment_form";

// CREATE CONNECTION
$conn = new mysqli($servername,
	$username, $password, $databasename);

// GET CONNECTION ERRORS
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// SQL QUERY
$query = "SELECT * FROM `from`;";

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);

	if ($result->num_rows > 0)
	{
	// OUTPUT DATA OF EACH ROW
   while($row = $result->fetch_assoc())
   {
      echo "Department: " .
         $row["Department"]. " - Doctor: " .
         $row["Doctor"]. " | Name: " .
         $row["Name"]. " | Email: " .
         $row["Email"]. " | Date: " .
         $row["Date"]. " | Time: " .
         $row["Time"]. "<br>";
   }
}
else {
   echo "0 results";
}

$conn->close();

?>