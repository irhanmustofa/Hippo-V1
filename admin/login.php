<?php
session_start();

require_once '../utility.php';
$error = "";
if (isset($_POST['login'])) {
	$email_admin = $_POST['email_admin'];
	$password = $_POST['password'];
	$link = "getAdmin&email_admin=" . urlencode($email_admin) . "&password=" . urlencode(md5($password));
	$data = getRegistran($link);
	if ($data && $data->status == '0') {
		$error = "Username tidak terdaftar";
	} else {
		$email = $data->data[0]->email_admin;
		$pass = $data->data[0]->password;
		if ($email_admin = $email && $password = $pass) {
			$_SESSION["email_admin"] = $email;
			echo "<script>alert('Login Berhasil')</script>";
			echo ("<script>location.href = 'index.php';</script>");
		} else {
			echo "<script>alert('Username atau Password salah')</script>";
			echo "<script>location = 'login.php'</script>";
		}
	}
}

?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login-Admin</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-md-4 mt-5">
				<form method="post" class="bg-white rounded p-4 shadow mt-5">
					<h1>Admin Login</h1><br>
					<div class="mb-3">
						<label class="form-label">Email Admin</label>
						<input type="text" class="form-control" id="" name="email_admin">
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" name="password">
					</div>
					<button type="submit" class="btn btn-primary" name="login">Login</button>
				</form>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>