<?php 

include 'db.php';

error_reporting(E_ALL);

session_start();
$username = isset ($_POST['username']) ?
	$_POST['username'] : "" ;

	$pwrd = isset ($_POST['pwrd']) ?
	$_POST['pwrd'] : "" ;

	$cpwrd = isset ($_POST['cpwrd']) ?
	$_POST['cpwrd'] : "" ;

	$email = isset ($_POST['email']) ?
	$_POST['email'] : "" ;

if (isset($_SESSION['username'])) {
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$pwrd = md5($_POST['pwrd']);
	$cpwrd = md5($_POST['cpwrd']);

	if ($pwrd == $cpwrd) {
		$sql = "SELECT * FROM user WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO user (username, email, pwrd)
					VALUES ('$username', '$email', '$pwrd')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['pwrd'] = "";
				$_POST['cpwrd'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>I Want Flowers</title>
	<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/fontawesome.min.css">

	

	

	
</head>
<div class="container">
        <header class="d-flex justify-content-center py-3">
          <ul class="nav nav-pills">
            <li class="nav-item"><a href="index.php" class="nav-link active" >Home</a></li>
            <li class="nav-item"><a href="Products.php" class="nav-link">Products</a></li>
            <li class="nav-item"><a href="locations.php" class="nav-link">Store Location</a></li>
            <li class="nav-item"><a href="Contact.php" class="nav-link">Contact Us</a></li>
            <li class="nav-item"><a href="login.php" class="nav-link">Log in</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link">Log out</a></li>
			<li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>
  
		</ul>
        </header>
      </div>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <h4>Register</h4>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="pwrd" value="<?php echo $pwrd; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpwrd" value="<?php echo $cpwrd; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>