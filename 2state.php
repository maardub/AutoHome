<?php
require_once( 'db_info.php' );

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

	$sql = "SELECT outletstate FROM outlets WHERE outlet=\"two\"";
	$result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $twoState = $row["outletstate"];
            }
        }

$conn->close();

        if(strpos($twoState,"on") !== false){
		print "on";
	} else {
		print "off";
	}
?>