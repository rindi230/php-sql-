<?php
include ("connection.php");

if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $email = $_POST['email'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        header("Location: shendeti 2.html");
        exit(); // important to stop the script after header
    } else {
        echo '<script>
        alert("Login failed. Invalid username or password.");
        window.location.href = "index.php";
        </script>';
    }
}
?>
