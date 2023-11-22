<?php
include "config.php";
    $str=$_GET["q"];
    $str=explode(",",$str);
    $sql="SELECT `eventdate`,`eventtime`,`availableseats`,`ticketprice` FROM `event` WHERE `eventcategory` = '".$str[0]."' and `cityname` = '".$str[1]."' and `eventdate` >= CURDATE()";
    $result = mysqli_query($conn, $sql);

    echo "
    <h2 style='margin:5px;'>Upcoming events, <u>click</u> the row to book the <b>event</b>.</h2>
    <table id='eventtable' class='table table-striped' style='margin-top:10px;'>
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th>Available Seats</th>
                <th>Price</th>
                <th>Book Now</th>
            </tr>";
            
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['eventdate'] . "</td>";
        echo "<td>" . $row['eventtime'] . "</td>";
        echo "<td>" . $row['availableseats'] . "</td>";
        echo "<td>&#8377; " . $row['ticketprice'] . "</td>";
        echo "<td><input type='text' class='btn btn-primary' value='Book' readonly></td>";
        echo "</tr>";
        }
        echo "</table>";
    $conn->close();
?>
