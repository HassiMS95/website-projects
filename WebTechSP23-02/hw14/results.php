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
	$username="webuser";
	$password="/-Oh)/ug9nVJe26v";
	$db="contact_data";
	$hostname="localhost";
	$dblink=new mysqli($hostname,$username,$password,$db);
	$sql="Select * from `entries`";
	$results=$dblink->query($sql) or
		die("Something went wrong with: $sql<br>".$dblink->error);
	echo '<h3>Database Enties</h3>';
	echo '<table border="1" border-color="#000000"  cellpadding="5px">';
	echo '<thead><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone Number</th><th>Comments</th></tr></thead>';
	echo '<tbody>';
	while ($data=$results->fetch_array(MYSQLI_NUM))
	{
		echo '<tr>';
		for ($i = 0; $i < count($data); $i++)
		{
			echo '<td border="1" border-color="#000000"  cellpadding="5px">' . $data[$i] . '</td>';
		}
		echo '</tr>';
	}
	echo '</tbody>';
	echo '</table>';
?>
</body>
</html>
