<?php
include "config.php";
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql="select * from login where username='$username';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo '<script>alert("Username already exists.")</script>';
    } else {
        $sql = "INSERT INTO `login` VALUES ('$username', '$password','0')";
        $result = $conn->query($sql);
        if ($result == true) {
            echo '<script>alert("New record created successfully.")</script>';
        } else {
            echo "Error:".$sql."<br>".$conn->error;
        }
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/register.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Register Page</title>
</head>
<body>
    <div class="admin-form" style="margin-top:25px; margin-left:35%;">
            <form action="" method="POST">
                <h1 style="margin-bottom:25px;"><u>Register</u> Panel</h1>
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="username" id="username" placeholder="User name must start with usr">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phonenumber" class="col-sm-2 col-form-label">Contact Number</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="phonenumber" id="phonenumber" placeholder="Enter Contact Number">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-4">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="confirmpassword" class="col-sm-2 col-form-label">Re Password</label>
                    <div class="col-sm-4">
                    <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <input type="submit" name="submit" value="Register" class="btn btn-danger btn-block" style="margin-top: 22px" onclick="return validatee()">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <a href="../assests/index.html" class="btn btn-danger btn-block" style="margin-top: 22px; text-decoration:none;color:white;">Back to Login</a>
                    </div>
                </div>
            </form>
    </div>
</body>
</html>