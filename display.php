<!DOCTYPE html>
<html>
<head>
<style>
body{
	background: #68a9da;
  
  padding: 0 30px;

}
table { 
    border-collapse: collapse;
    font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    font-size: 75%;
    width: 700px;
    text-align: center;
    
    margin: 0 auto;
}
tr>:nth-child(1){
  text-align: left;
}
tr:hover td{
  opacity: 1.0;
}

th{
  background-image: 
    linear-gradient(#2c6272, #2c6272);
    background-image: -webkit-linear-gradient(#2c6272, #2c6272);
    background-image: -moz-linear-gradient(#2c6272, #2c6272);
    background-image: -o-linear-gradient(#2c6272, #2c6272);
  color: #ffffff;
  font-weight: bold;
  height: 40px;
  vertical-align: middle;
  padding: 5px 15px 5px 15px;
  -webkit-border-radius: 10px 10px 0 0;
  border-radius: 10px 10px 0 0;
  border-bottom: 3px solid #59bc41;
  border-right: 2px solid #ffffff;
 }
td{
  padding: 10px;
  background: #e4f3c0;
  color: #000000;
  text-shadow: 2px 2px #F4f4f4;
  height: 20px;
  border: 2px solid #ffffff;
  border-radius: 2px;
  opacity: 0.75;
}
</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
// Create connection
$conn = new mysqli("localhost:3307","root","","kratin");
// Check connection
if ($conn->connect_error)  {
    die("Connection failed: " . $conn->connect_error);
} 
//MySQL query goes here
$sql = "SELECT patient.firstName, patient.lastName, doctor.medication, doctor.diet FROM patient, doctor 
WHERE patient.symptoms =doctor.symptoms AND patient.temperature = doctor.temperature";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
    <tr>
    <th>firstName</th> 
    <th>lastName</th> 
    <th>medication</th> 
    <th>diet</th> 
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["firstName"]. "</td> 
        <td>" . $row["lastName"]. "</td> 
        <td>" . $row["medication"]. "</td> 
        <td>" . $row["diet"]. "</td> 
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?> 
</body>
</html>