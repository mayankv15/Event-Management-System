<?php
include "config.php";
$str=$_GET["q1"];
$arrays=explode(",",$str);
$city=$arrays[0];
$eventname=$arrays[1];
$eventdate=$arrays[2];
$eventtime=$arrays[3];
$username=$arrays[4];

$sql="UPDATE `event` SET `availableseats`=`availableseats`-1 WHERE `cityname`='".$city."' AND `eventcategory`='".$eventname."' AND `eventdate`='".$eventdate."' AND `eventtime`='".$eventtime."'";
$result = mysqli_query($conn, $sql);

$sql="INSERT INTO `bookingdetail`(`username`, `cityname`, `eventname`, `eventdate`, `eventtime`,`status`) VALUES ('".$username."','".$city."','".$eventname."','".$eventdate."','".$eventtime."','confirmed')";
$result = mysqli_query($conn, $sql);
echo "<div id='ticket'>";
echo "<h2 style='color:#CC0000;'<h2><u>Booking Details</u></h2>";
echo "<h6>Username: ".$username."</h6>";
$sql="SELECT ticketno FROM `bookingdetail` WHERE `username`='".$username."' AND `cityname`='".$city."' AND `eventname`='".$eventname."' AND `eventdate`='".$eventdate."' AND `eventtime`='".$eventtime."'";
$result = mysqli_query($conn, $sql);
echo "<h6>Ticket No: ";
while($row = mysqli_fetch_array($result)) {
    echo '<span style="color:#CC0000;"> '.$row['ticketno'].'</span>';
}
echo "</h6>";
echo "<h6>Event Name: ".$eventname."</h6>";
echo "<h6>Event Date: ".$eventdate."</h6>";
echo "<h6>Event Time: ".$eventtime."</h6>";
echo "<h6>Event City: ".$city."</h6>";
echo "</div>";
echo "<a class='btn_print' style='color:#0000ff; text-decoration:underline;' href='#'>Download Ticket</a>";

echo "<h3 style='color:#CC0000;'>Status: Ticket Booked Successfully.</h3>";
$conn->close();
?>