<html>
<head>
<title>Login Form</title>
<link rel="stylesheet" href="Style_log.css"/>
</head>
<body>
<div class="contont">
    <h2 style="text-align:center;padding-top:15px;color:Grey;font-family:Cursive;">Login Form</h2>
<form name="f1" action="authentication2.php" method="POST">
<h5 style="padding-top:20px;">Username</h5><input type="text" name="name" id="name" placeholder=" Enter the UserName" required><br>
<h5>Password</h5><input type="password" name="pass" id="pass" placeholder="Enter the Password" required><br>
<input type="Submit" value="Login" id="button">
<p style="position:absolute;bottom:50px;left:250px;font-family:cursive;font-weight:bold;cursor:default;">No Account</p><a href="Registeration.php" class="fill">New Registration</a>
</form>
</div>
<!-- <script>
    call this function in the form tag onsubmit="return Validation()"
function Validation()
{
	var id=document.f1.name.value;
	var ps=document.f1.pass.value;
	if(id.length=="" && ps.length==""){
		alert("User Name and Password Fields are empty");
		return false;
	}
	else{
		if(id.length==""){
			alert("Please Fill the Username");
			return false;
		}
		if(ps.length==""){
			alert("Please Fill the Password");
			return false;
		}
	}
}		
</script>
<noscript>
<h1><center>Please Enable the Javascript</center></h1>
</noscript> -->
</body>
</html>