<?php

$connection = mysqli_connect("localhost","root","","foodforgood") or die("no connection");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$phonenumber = $_POST['phonenumber'];
$emailid = $_POST['emailid'];
$username = $_POST['username'];
$password = $_POST['password'];

$query4 = " insert into user (fname,lname,age,gender,address,phonenumber,emailid,username,password) values ('$fname','$lname','$age','$gender','$address','$phonenumber','$emailid','$username','$password') ";

$equery = mysqli_query($connection,$query4);

if($equery){
	echo ' alert("Thank you. Will reach you soon.") ';
}
else{
	echo "NOT" . mysqli_error($connection);
}
/*
echo '<script type="text/javascript">';
echo ' alert("Thank you. Will reach you soon.") ';
echo '</script>';

    echo '<script type="text/javascript"> ';
   // echo ' function openulr(newurl) {';
    echo '  if (confirm("Thank you. Will reach you soon.")) {';
    echo '    document.location = main.html; ';
    echo '  }';
   // echo '}';
    echo '</script>';*/

mysqli_close($connection);
header('Location: ../main2.html');

?>