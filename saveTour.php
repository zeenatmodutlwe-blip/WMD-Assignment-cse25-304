<?php

$fullname = $_POST['fullname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$tourdate = $_POST['tourdate'];
$tourtime = $_POST['tourtime'];
$bedrooms = $_POST['bedrooms'];
$comments = $_POST['comments'];

$data = "Name: $fullname | Address: $address | Phone: $phone | Date: $tourdate | Time: $tourtime | Bedrooms: $bedrooms | Comments: $comments\n";

$file = fopen("tour_bookings.txt", "a");

fwrite($file, $data);

fclose($file);

echo "Tour booked successfully!";

?>
