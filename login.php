<?php
if(isset($_POST['email']) && isset($_POST['password'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	echo "<script>alert('berhasil login');window.location.href='index.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<body>
    <div id="login">

		<h2><span class="fontawesome-lock"></span>Sign In</h2>

		<form action="" method="POST">

			<fieldset>

				<p><label for="email">E-mail address</label></p>
				<p><input type="email"name="email" id="email" value="mail@address.com" onBlur="if(this.value=='')this.value='mail@address.com'" onFocus="if(this.value=='mail@address.com')this.value=''"></p> <!-- JS because of IE support; better: placeholder="mail@address.com" -->

				<p><label for="password">Password</label></p>
				<p><input type="password" id="password" name="password" value="password" onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')this.value=''"></p> <!-- JS because of IE support; better: placeholder="password" -->

				<p><input type="submit" value="Sign In"></p>

			</fieldset>

		</form>

	</div> <!-- end login -->
</body>
</html>