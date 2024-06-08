<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="assets/css/bootstrap.css" rel="stylesheet"/>
<link href="assets/css/bootstrap-theme.css" rel="stylesheet"/>
<title>Contact</title>
</head>
<body>
	<img src="https://code.org/images/csc/csc_elementary.png" alt="Computer Science" width="960" height="472"></img>
	<div style = "background-color:#F2F2F2;padding:10px"><h1>Welcome to my website!</h1></div>
	<ul class="nav nav-tabs">
		<li class="nav-item">
			<a class="nav-link" href="new.html">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="school.html">School</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="work.html">Work</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="hobbies.html">Hobbies</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="moments.html">Moments</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
		</li>
	</ul>
<div>
<?php
if (!isset ($_POST['submit']))
{
	echo '<form action="" method="post">';
	echo '<p>First Name: ';
	echo '<input type="text" name="firstname"/>';
	echo '</p>';
	echo '<p>Last Name: ';
	echo '<input type="text" name="lastname"/>';
	echo '</p>';
	echo '<p>Email: ';
	echo '<input type="text" name="email"/>';
	echo '</p>';
	echo '<p>Phone Number: ';
	echo '<input type="text" name="phone"/>';
	echo '</p>';
	echo '<p>Comments: ';
	echo '<input type="text" name="comments"/>';
	echo '</p>';
	echo '<p><button type="submit" name="submit" value="submit">Submit</button></p>';
	echo '</form>';
}
if (isset($_POST['submit']) && $_POST['submit'] == "submit")
{
	$firstname=addslashes($_POST['firstname']);
	$lastname=addslashes($_POST['lastname']);
	$email=addslashes($_POST['email']);
	$phone=addslashes($_POST['phone']);
	$comments=addslashes($_POST['comments']);
	echo '<h3>Data Received</h3>';
	echo "<p>Firstname: $firstname</p>";
	echo "<p>Lastname: $lastname</p>";
	echo "<p>Email: $email</p>";
	echo "<p>Phone: $phone</p>";
	echo "<p>Comments: $comments</p>";
	$username="webuser";
	$password="/-Oh)/ug9nVJe26v";
	$db="contact_data";
	$hostname="localhost";
	$dblink=new mysqli($hostname,$username,$password,$db); //php-connection string
	$sql="insert into `entries` (`first_name`, `last_name`, `email`, `phone`,`comments`) values ('$firstname', '$lastname','$email', '$phone', '$comments')";
	$dblink->query($sql) or
		die("Something went wrong with: $sql<br>".$dblink->error);
	echo '<h3>Data Entered into Database successfully</h3>';
	
}
?>
</body>
</html>
