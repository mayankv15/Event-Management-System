<?php
include "config.php";
    $str=$_GET["q"];
    $sql="SELECT distinct `eventcategory` FROM `event` WHERE cityname = '".$str."'";
    $result = mysqli_query($conn, $sql);

    echo '<select name="eventname" class="btn btn-secondary dropdown-toggle drop-down" onchange="showEventDetails(this.value)" style="padding:1% 4%;">
    <option value="">Select Event Name</option>
    ';
while($row = mysqli_fetch_array($result)) {
    echo '<option value="'.$row['eventcategory'].'">'.$row['eventcategory'].'</option>';
}
    $conn->close();
?>