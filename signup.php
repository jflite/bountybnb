<?php
$email = $_POST['username'];
$comments = $_POST['comments'];

if (isset($_POST['landlord'])) { $check1 = $_POST['landlord']; } else { $check1 = ""; }
if (isset($_POST['tenant'])) { $check2 = $_POST['tenant']; } else { $check2 = ""; }

//the data
$data = "$email|$check1|$check2|$comments\n";

//open the file and choose the mode
$fh = fopen("users.txt", "a");
fwrite($fh, $data);

//close the file
fclose($fh);
print "Thanks $email, you will be contacted shortly";
?>
