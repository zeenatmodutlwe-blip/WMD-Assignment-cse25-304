<?php

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$tourdate = $_POST['tourdate'];

$data = "Name: " . $fullname .
        " | Email: " . $email .
        " | Phone: " . $phone .
        " | Tour Date: " . $tourdate . "\n";

$file = fopen("tour_bookings.txt", "a");

fwrite($file, $data);

fclose($file);

echo "Tour booked successfully!";

?>
