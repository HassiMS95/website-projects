<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="assets/css/bootstrap.css" rel="stylesheet"/>
<link href="assets/css/bootstrap-theme.css" rel="stylesheet"/>
<script src="assets/js/jquery-3.5.1.js"></script>
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
<div class="panel panel-default">
<div class="panel-body">
<h3 align="center">Contact Form Data Results</h3>
<table border="1" width="100%">
<tr>
<th>Record #</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone</th><th>Comments</th>';
</tr>
<tbody id="results">
</tbody>
</table>
</div>
</div>
</body>
</html>
<script>
	function refresh_table() {
		$.ajax({
			type: 'post',
			url: 'https://ec2-35-182-170-173.ca-central-1.compute.amazonaws.com/hw15/query.php',
			success: function(data){
				$('#results').html(data);
			}
		});
	};
	setInterval(function() { refresh_table(); }, 1000);
</script>
