<?php

$message="";

if(count($_POST)>0) {
	$connection = mysqli_connect("localhost","root","","foodforgood");
	$result = mysqli_query($connection,"SELECT * FROM user WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		//echo '<script type="text/javascript">';
		//echo ' alert("Invalid Username or Password!") ';
	    //echo '  if (ok()) {';
   		//echo '    document.location = login.html; ';
    	//echo '  }';
    	//echo '</script>';
		header('Location: login.html');
	} 
	else {
		//echo '<script type="text/javascript">';
		//echo ' alert("You are successfully authenticated!") ';
	    //echo '  if (ok()) {';
   		//echo '    document.location = ../main2.html; ';
    	//echo '  }';
		//echo '</script>';
		header('Location: ../main2.html');

	}
}

//echo ' alert("$message") ';
/*echo '<script type="text/javascript">';
echo 'window.location.href = "../main2.html" ';
echo '</script>';*/

mysqli_close($connection);

//echo '<meta http-equiv=REFRESH CONTENT=5;url= ../main2.html>';
//header('Location: ../main2.html');
?>