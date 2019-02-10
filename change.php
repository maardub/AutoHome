<?php
require_once( 'db_info.php' );

# -- Outlet 1 pins --
# On
shell_exec("/usr/local/bin/gpio mode 15 out");
# Off
shell_exec("/usr/local/bin/gpio mode 1 out");

# -- Outlet 2 pins --
# On
shell_exec("/usr/local/bin/gpio mode 6 out");
# Off
shell_exec("/usr/local/bin/gpio mode 11 out");

# -- Outlet 3 pins --
# On
shell_exec("/usr/local/bin/gpio mode 27 out");
# Off
shell_exec("/usr/local/bin/gpio mode 29 out");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 
	if($_GET['one']=="ON"){
		shell_exec("/usr/local/bin/gpio write 15 0");
		shell_exec("/usr/local/bin/gpio write 15 1");
		sleep(1);
		shell_exec("/usr/local/bin/gpio write 15 0");
		
		$sql = "UPDATE outlets SET outletstate=\"on\" WHERE outlet=\"one\"";
		$conn->query($sql);
	}
	else if($_GET['one']=="OFF"){
		shell_exec("/usr/local/bin/gpio write 1 0");
		shell_exec("/usr/local/bin/gpio write 1 1");
		sleep(1);
		shell_exec("/usr/local/bin/gpio write 1 0");
		
		$sql = "UPDATE outlets SET outletstate=\"off\" WHERE outlet=\"one\"";
		$conn->query($sql);
	}

	if($_GET['two']=="ON"){
		shell_exec("/usr/local/bin/gpio write 6 0");
		shell_exec("/usr/local/bin/gpio write 6 1");
		sleep(1);
		shell_exec("/usr/local/bin/gpio write 6 0");
		
		$sql = "UPDATE outlets SET outletstate=\"on\" WHERE outlet=\"two\"";
		$conn->query($sql);
	}
	else if($_GET['two']=="OFF"){
		shell_exec("/usr/local/bin/gpio write 11 0");
		shell_exec("/usr/local/bin/gpio write 11 1");
		sleep(1);
		shell_exec("/usr/local/bin/gpio write 11 0");
		
		$sql = "UPDATE outlets SET outletstate=\"off\" WHERE outlet=\"two\"";
		$conn->query($sql);
	}

	if($_GET['three']=="ON"){
		shell_exec("/usr/local/bin/gpio write 27 0");
		shell_exec("/usr/local/bin/gpio write 27 1");
		sleep(1);
		shell_exec("/usr/local/bin/gpio write 27 0");
		
		$sql = "UPDATE outlets SET outletstate=\"on\" WHERE outlet=\"three\"";
		$conn->query($sql);
	}
	else if($_GET['three']=="OFF"){
		shell_exec("/usr/local/bin/gpio write 29 0");
		shell_exec("/usr/local/bin/gpio write 29 1");
		sleep(1);
		shell_exec("/usr/local/bin/gpio write 29 0");
		
		$sql = "UPDATE outlets SET outletstate=\"off\" WHERE outlet=\"three\"";
		$conn->query($sql);
	}

$conn->close();
?>