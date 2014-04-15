<?php
$email = $_POST['username'];
$check1 = $_POST['landlord'];
$check2 = $_POST['tenant'];

//the data
$data = "$email|$check1|$check2\n";
//$data = "$email|$check1\n";

//open the file and choose the mode
$fh = fopen("users.txt", "a");
fwrite($fh, $data);

//close the file
fclose($fh);
print "User Submitted";
?>
