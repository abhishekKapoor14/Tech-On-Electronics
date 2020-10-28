<?php


require('config.php');


extract($_POST);


$sql = "INSERT into contactus (name,email,contact,message,) VALUES('" . $name . "','" . $email . "','" . $contact . "','" . $message . "')";


$success = $mysqli->query($sql);


if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}


echo "Thank You For Contacting Us ";


$conn->close();


?>