<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$symptoms = $_POST['symptoms'];
$temperature = $_POST['temperature'];
$glucoseLevel = $_POST['glucoseLevel'];
$medication = $_POST['medication'];
$diet = $_POST['diet'];

	//Database connection
//$con = mysqli_connect("olcalhost","root","root","test");
echo $firstName;
$conn = new mysqli("localhost:3307","root","","kratin");
if ($conn -> connect_error) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
}

//mysqli_select_db("test",$con);
//$query = "INSERT INTO doctor (firstName, lastName, symptoms, temperature, glucoseLevel, medication, diet)
//VALUES ('Cardinal','TomErichsen','Skagen21',12,4006,'Norway','diet');";

echo gettype($firstName);
echo gettype($lastName);
echo gettype($symptoms);
echo gettype($temperature);
echo gettype($glucoseLevel);
echo gettype($medication);
echo gettype($diet);


$query='INSERT INTO doctor VALUES(\'' . $firstName . '\',\'' . $lastName .'\',\''. $symptoms . '\',\'' . $temperature .'\',
\''. $glucoseLevel . '\',\'' . $medication . '\',\'' .$diet .'\');';
if ($conn->query($query) === TRUE) {
  echo "New records created successfully";
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