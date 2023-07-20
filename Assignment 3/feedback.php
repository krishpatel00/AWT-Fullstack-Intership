<?php
		$servername = "localhost";
        $username = "root";
        $password = "";
        $databasename = "sou";
        
        $conn = mysqli_connect($servername, $username, $password, $databasename);

		if ($conn->connect_error) {
            die($conn->connect_error);
        } else {
            echo "MySql Connection Successful!";
        }
        
		$name = $_REQUEST['name'];
		$enroll = $_REQUEST['enrollno'];
		$email = $_REQUEST['emailid'];
		$rating = $_REQUEST['demo'];
		$feedback = $_REQUEST['feedback'];

		$sql = "INSERT INTO feedback VALUES ('$name','$enroll','$email','$rating','$feedback')";
		
		if(mysqli_query($conn, $sql)){
			echo "Successfull save";
		} else{
			echo "ERROR $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection 
		mysqli_close($conn);
		?>