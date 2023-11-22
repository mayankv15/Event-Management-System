<?php
session_start();
include "config.php";
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $loginas = $_POST["loginas"];
    $password = $_POST["password"];
    $_SESSION['username']=$username;
    $sql = "SELECT * FROM `login` WHERE `username` = '$username' AND `password` = '$password' AND `useroradmin` = '$loginas'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row["useroradmin"] == "1") {
            header("Location: ../php/tabadmin.php");
        } else if ($row["useroradmin"] == "0") {
            ?>
            <script>
                location.replace("../php/user.php");
            </script>
            <?php
        } else {
            
            header("Location: ../assests/index.html");
        }
    } else {
        header("Location: ../assests/index.html");
    }
    $conn->close();
}
?>