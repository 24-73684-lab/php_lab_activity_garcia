
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Management System</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body >
<h2 class="mb-4 text-center">User Management System</h2>
<div class="card mb-4 shadow-sm">
	<div class= card-header >
		<h2>Add New User</h2>
	</div>
	<div class="card-body">
		<form method ="post">
			<div class="mb-3">
				<label for= "name" class="form-label">Full Name</label>
				<br>
				<input type="text" placeholder ="Enter Full Name" name ="name" required>
			</div>
			<div class="mb-3">
				<label for= "email" class="form-label">Email Address</label>
				<br>
				<input type="text" placeholder ="Enter Email Address" name ="email" required>
			</div>
			<button type = "submit" class ="btn btn-primary" name ="btnsubmit">Submit</button>

	</div>
</div>
<div>
	<h2>Registered Users</h2>
	<table class="table-bordered">
		<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Email</th>
			<th>Joined</th>
			<th>Action</th>
		</tr>
	</thead>
	</table>
</div>

</body>
</html>