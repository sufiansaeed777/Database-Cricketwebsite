<?php 
include 'connections.php';
session_start();
error_reporting(0);
if ($_SESSION['username'] == 'admin'){

    if (isset($_POST['return'])) {
        header("Location: home.php");
    }
    if (isset($_POST['team'])) {
        header("Location: ut.php");
    }
    if (isset($_POST['playerrecord'])) {
        header("Location: updateplayerrecord.php");
    }
    if (isset($_POST['match'])) {
        header("Location: updatematch.php");
    }
}
else{
    echo "<script>alert('You are not ADMIN !')</script>";
    header("Location: home.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
     <title> Admin </title>
	<link rel="shortcut icon" href="images/favicon.png">
    <link rel="stylesheet" type="text/css" href="CSS/style3.css">
    </head>
    <body style="background-image: url('background.png');">
	<div class="container">
		<form action= "" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Admin</p>
			<div class="input-group">
				<button name="team" class="btn">Team</button>
			</div>
            <div class="input-group">
				<button name="playerrecord" class="btn">Player Record</button>
			</div>
            <div class="input-group">
				<button name="match" class="btn">Schedule a Match</button>
			</div>
            <div class="input-group">
				<button name="return" class="btn">Return to Home</button>
			</div>
		</form>
	</div>
</body>
</html>