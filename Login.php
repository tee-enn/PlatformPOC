<?php
session_start();
require_once('config.php');
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
    <link rel="stylesheet" type="text/css" href="css/style_login.css">
	<!script type="text/javascript" src="app.js"><!/script>
	<title>valU</title>
  </head>
	
	<h1>
<DIV style="height:20px"> </DIV>
		<p>valU</p>
	</h1>
	
<body>

<form id="form1" name='form1' action="Search.php" method="post">
	<!form action="Search.html">
	<div class="container">
    	<label>Email Address</label><br>
    	<input type="text" placeholder="your@email.com" name="email" id="email" required><br>

	    <label>Password</label><br>
    	<input type="password" placeholder="Enter Password" name="password" id="password" required><br>

    	<label>
      	<input type="checkbox" checked="checked"> Remember me
    	</label><br>
    	<button type="submit" name="login" id="login">Login</button>
	<?php
	if ($_SESSION["s_password"] == "Incorrect")
		{
		echo '<br>Oops, login details are incorrect. Have another go!';
		}
	?>

 	</div>
	</form>
	
    <button id="ForgotPassword" href="" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Forgot password?</button><br><br>
	<div id="id01" class="modal">
	<div class="modal-content">
		<div class="container_mod">
		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span><br>
      		<label>Email</label>
      		<input type="text" placeholder="your@email.com" name="email" required><br>
		<button type="submit">Send password</button>
		</div>
	</div>
	</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

	<br>
	<form action="Consolidated_SignUp.php">
	<input type="submit" value="Sign Up"></form><br>
	<a href="">Terms and Conditions</a><p>
	<img src="img/passionfruit.jpg" style="height:150px;width:150px"></img><br>

</body>
</html>