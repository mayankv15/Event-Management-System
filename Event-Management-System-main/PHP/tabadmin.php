<?php
include "config.php";
if (isset($_POST["submit"])) {
    $city = $_POST["city"];
    $eventname = $_POST["eventname"];
    $eventdate = $_POST["eventdate"];
    $eventtime = $_POST["eventtime"];
    $totalseats= $_POST["totalseats"];
    $availableseats= $_POST["availableseats"];
    $price= $_POST["price"];
    $sql = "INSERT INTO `event` VALUES ('$city', '$eventname', '$eventdate', '$eventtime', '$totalseats', '$availableseats', '$price')";
    $result = $conn->query($sql);
    if ($result == true) {
        echo '<script>alert("New record created successfully.")</script>';
    } else {
        echo "Error:".$sql."<br>".$conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js"></script> 
    <title>Admin Panel</title>
</head>
<body>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Add Event</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Event Details</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Credentials</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="booking-tab" data-bs-toggle="tab" data-bs-target="#booking-tab-pane" type="button" role="tab" aria-controls="booking-tab-pane" aria-selected="false">Bookings</button>
  </li>
  <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-danger" type="submit" style="position:absolute;margin-left:820px;"><a href="logout.php" style="text-decoration:none;color:white;">Logout</a></button>
    </form>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
  <div class="admin-form" style="margin-top:25px; margin-left:35%;">
            <form action="" method="POST">
                <!-- <h1 style="margin-bottom:25px;"><u>Add</u> Event</h1> -->
                <div class="form-group row">
                    <label for="city" class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="city" id="city" placeholder="Enter City">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="eventname" class="col-sm-2 col-form-label">Event Name</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="eventname" id="eventname" placeholder="Enter Event Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="eventdate" class="col-sm-2 col-form-label">Event Date</label>
                    <div class="col-sm-4">
                    <input type="date" class="form-control" name="eventdate" id="eventdate" placeholder="Enter Event Date">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="eventtime" class="col-sm-2 col-form-label">Event Time</label>
                    <div class="col-sm-4">
                    <input type="time" class="form-control" name="eventtime" id="eventtime" placeholder="Enter Event Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="totalseats" class="col-sm-2 col-form-label">Total Seats</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="totalseats" id="totalseats" placeholder="Enter Total Number Seats">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="availableseats" class="col-sm-2 col-form-label">Available Seats</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="availableseats" id="availableseats" placeholder="Enter Total Number of Available Seats">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label">Price of a Ticket</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="price" id="price" placeholder="Enter Price of a Ticket">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <input type="submit" name="submit" value="Add Event Details" class="btn btn-danger btn-block" style="margin-top: 22px" onclick="return registervalidate()">
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <div class="col-sm-6">
                        <a href="logout.php" class="btn btn-danger btn-block" style="margin-top: 22px; text-decoration:none;color:white;">Logout</a>
                    </div>
                </div> -->
            </form>
    </div>
  </div>

  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
  <?php
    include "config.php";
    $sql="SELECT * FROM `event` order by cityname desc";
    $result = mysqli_query($conn, $sql);

    
    echo "<table id='eventtable' class='table table-striped' style='margin-top:10px;'>
            <tr>
                <th>City</th>
                <th>Event Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Total Seats</th>
                <th>Available Seats</th>
                <th>Price</th>
            </tr>";
            
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['cityname'] . "</td>";
        echo "<td>" . $row['eventcategory'] . "</td>";
        echo "<td>" . $row['eventdate'] . "</td>";
        echo "<td>" . $row['eventtime'] . "</td>";
        echo "<td>" . $row['totalseats'] . "</td>";
        echo "<td>" . $row['availableseats'] . "</td>";
        echo "<td>&#8377; " . $row['ticketprice'] . "</td>";
        echo "</tr>";
        }
        echo "</table>";
    $conn->close();
    ?>
  </div>

  <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
  <?php
    include "config.php";
    $sql="SELECT `username`,`password` FROM `login`";
    $result = mysqli_query($conn, $sql);

    echo "<table id='passwordtable' class='table table-striped' style='margin-top:10px;'>
            <tr>
                <th>User Name</th>
                <th>Password</th>
            </tr>";
            
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "</tr>";
        }
        echo "</table>";
    $conn->close();
    ?>
  </div>
  <div class="tab-pane fade" id="booking-tab-pane" role="tabpanel" aria-labelledby="booking-tab" tabindex="0">
  <?php
    include "config.php";
    $sql="SELECT * FROM `bookingdetail`";
    $result = mysqli_query($conn, $sql);

    
    echo "<table id='bookingtable' class='table table-striped' style='margin-top:10px;'>
            <tr>
                <th>User Name</th>
                <th>Ticket Number</th>
                <th>City</th>
                <th>Event Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
            </tr>";
            
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['ticketno'] . "</td>";
        echo "<td>" . $row['cityname'] . "</td>";
        echo "<td>" . $row['eventname'] . "</td>";
        echo "<td>" . $row['eventdate'] . "</td>";
        echo "<td>" . $row['eventtime'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "</tr>";
        }
        echo "</table>";
    $conn->close();
    ?>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>