<?php

include("Connection.php");
if (isset($_POST['create'])) {
	$naam = $_POST['name'];
	$mailer = $_POST['mail'];
	$code = $_POST['pass'];
	$call = $_POST['phone'];
	$sehar = $_POST['city'];
	// $janm=$_POST['date'];
	$query = "INSERT INTO `piyush_pandey`(`Username`, `Email`, `Password`, `Caller`, `City`) VALUES ('$naam','$mailer','$code','$call','$sehar')";
	$res = mysqli_query($clean, $query);

	if ($res) {
		?>
		<h3 style="align:center;color:red;font-size:60px;">Thanks for choosing your option.</h3>
		<script>
			if (window.confirm('CLICK OK FOR THE PROJECT')) {
				window.location.href = 'https://piyushpandey14.netlify.app/';
			}
			else{
				window.location.href = 'https://google.com/';
			};
		</script>
		<?php
	} else {
		echo "Sorry There is an Error in your code";
	}
}
?>