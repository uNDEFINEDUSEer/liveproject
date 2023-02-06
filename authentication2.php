<?php
include("Connection.php");
$naam = $_POST['name'];
$code = $_POST['pass'];
$naam = stripcslashes($naam);
$code = stripcslashes($code);
$naam = mysqli_real_escape_string($clean, $naam);
$code = mysqli_real_escape_string($clean, $code);
$sql = "select * from piyush_pandey where Username='$naam'and Password='$code'";
$result = mysqli_query($clean, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if ($count == 1) {
    ?>
    <h3 style="align:center;color:red;font-size:60px;">Thanks for choosing your option.</h3>
    <script>
        if (window.confirm('CLICK OK FOR THE PROJECT')) {
            window.location.href = 'https://piyushpandey14.netlify.app/';
        }
        else {
            window.location.href = 'https://google.com/';
        };
    </script>
    <?php
} else {
    echo "<h1><center>Login Failed</center></h1>";
}
?>