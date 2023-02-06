<html>
<head>
    <title>Making</title>
    <link rel="stylesheet" href="Style_reg.css"/>
</head>
<body>
    <div class="content">
        <form action="authentication.php" method="POST">
            <h5>Username</h5><input type="text" name="name" placeholder=" Enter the UserName" required><br>
            <h5>Email</h5><input type="email" name="mail" placeholder="Enter the Email" required><br>
            <h5>Password</h5><input type="Password" name="pass" size="10" maxlength="30"
                placeholder="Enter the Password" required><br>
            <h5>Phone Number</h5><input type="text" name="phone" placeholder="Enter the Phone Number" required></br>
            <h5>City</h5><input type="text" name="city" placeholder="Enter Your City" required></br>
            <!-- <h5>Date of Birth</h5><input type="Date" name="date" placeholder="Enter the Date" required></br> -->
            <input type="submit" name="create" value="Sign Up" id="btn"><br>
            <p style="position:absolute;left:300px;bottom:60px;font-size:17px;font-family:Times New Roman;">Already Have
                a Account</p><a href="Login.php" style="position:absolute;bottom:38px;left:390px;">Login</a>
        </form>
    </div>
</body>

</html>