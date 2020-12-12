<?php

$connection = mysqli_connect("localhost","root","","foodforgood") or die("no connection");

if(isset($_POST['submit']))
{
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$city = $_POST['city'];

$query2 = " insert into volunteer_details (firstname,lastname,phone,email,city) values ('$firstname','$lastname','$phone','$email','$city') ";

$equery = mysqli_query($connection,$query2);
if($equery){
	echo ' alert("Thank you. Will reach you soon.") ';
}
else{
	echo "NOT" . mysqli_error($connection);
}
}/*
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
header('Location: main.html');

?>