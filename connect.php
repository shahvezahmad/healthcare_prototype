<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$symptoms = $_POST['symptoms'];
$temperature = $_POST['temperature'];
$glucoseLevel =$_POST['glucoseLevel'];


	//Database connection
//$con = mysqli_connect("olcalhost","root","root","test");
echo $firstName;
$conn = new mysqli("localhost:3307","root","","kratin");
if ($conn -> connect_error) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
}

//mysqli_select_db("test",$con);
// $query = "INSERT INTO doctor (firstName, lastName, gender, symptoms, temperature, glucoseLevel) VALUES ('Riya','Tayade','f', 'fever', 12,4006);";


 echo gettype($firstName);
 echo gettype($lastName);
 echo gettype($symptoms);
 echo gettype($temperature);
 echo gettype($glucoseLevel);


$query='INSERT INTO patient VALUES(\'' . $firstName . '\',\'' . $lastName .'\',\''. $symptoms . '\',\'' . $temperature .'\',\''. $glucoseLevel . '\');';
if ($conn->query($query) === TRUE) {
header('location:http://localhost:8080/kratin/display.php');
} else {
  echo "Error: " . $query . "<br>" . $conn->error;
}

//$result=$conn->query($query);
// if(!mysql_query($query,$con))
// {
// die('Error...'.mysqli_error(null));
// }else
// {
// echo "Data Inserted";
// }

?>