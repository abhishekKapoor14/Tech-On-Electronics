<?php
$connection = mysql_connect("localhost", "root", ""); 
$db = mysql_select_db("colleges", $connection); 
if(isset($_POST['submit'])){
$email = $_POST['email'];
$subject = $_POST['subject'];
$messages = $_POST['message'];
if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into messages(name, email,subject,message) values ('$name', '$email', '$subject', '$message')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); 
?>