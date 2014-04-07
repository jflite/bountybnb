<?php
$email = $_POST['username'];

//the data
$data = "$email\n";

//open the file and choose the mode
$fh = fopen("users.txt", "a");
fwrite($fh, $data);

//close the file
fclose($fh);
print "User Submitted";
?>