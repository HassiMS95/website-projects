<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PHP Form Input</title>
	</head>
	<body>
		<?php
			if (!isset($_POST['submit']))
			{
				echo '<form action="" method="post">';
				if (isset($_GET['firstname']))
					echo '<p>First Name: <input type="text" name="firstName" id="firstName" value="'.$_GET['firstname'].'"/></p>';
				else
				{
					if (isset($_REQUEST['fnameErr']))
					{
						echo '<p>First Name: <input type="text" name="firstName"/></p>';
						echo '<p><span style="color:#F00">First name cannot be blank!</span></p>';
					}
					else
					{
						echo '<p>First Name: <input type="text" name="firstName"/></p>';
					}
				}
				if (isset($_GET['lastname']))
					echo '<p>Last Name: <input type="text" name="lastName" value="'.$_GET['lastname'].'"/></p>';
				else
				{
					if (isset($_REQUEST['lnameErr']))
					{
						echo '<p>Last Name: <input type="text" name="lastName"/></p>';
						echo '<p><span style="color:#F00">Last name cannot be blank!</span></p>';
					}
					else
						echo '<p>Last Name: <input type="text" name="lastName"/></p>';
				}
				if (isset($_GET['email']))
					echo '<p>Email Address: <input type="text" name="email" value="'.$_GET['email'].'"/></p>';
				else
				{
					if (isset($_REQUEST['emailErr']))
					{
						echo '<p>Email Address: <input type="text" name="email"/></p>';
						echo '<p><span style="color:#F00">Email address cannot be blank!</span></p>';
					}
					else
						echo '<p>Email Address: <input type="text" name="email"/></p>';
				}
				echo '<p><button type="submit" name="submit" value="submit">Submit</button></p>';
				echo '</form>';
			}
			elseif (isset($_POST['submit']))
			{
				$errString="";
				if ( ($firstname=$_REQUEST['firstName']) == "")
					$errString.="fnameErr=true&";
				if ( ($lastname=$_REQUEST['lastName']) == "")
					$errString.="lnameErr=true&";
				if ( ($email=$_REQUEST['email']) == "")
					$errString.="emailErr=true";
				
				if ($errString=="")
				{
					$firstName = htmlspecialchars($_POST['firstName']);
					$lastName = htmlspecialchars($_POST['lastName']);
					$email = htmlspecialchars($_POST['email']);
					header("Location: https://ec2-35-182-170-173.ca-central-1.compute.amazonaws.com/hw11/index.php?firstname=$firstName&lastname=$lastName&email=$email");
					exit();
				}
				
				echo "<h3>Data Recieved from Index.php</h3>";
				echo '<p>First Name: '.strtolower($_POST['firstName']).'</p>';
				echo "<p>Last Name: ".$_POST['lastName']."</p>";
				echo '<p>Email: '.$_POST['email'].'</p>';
			}
		?>
	</body>
</html>