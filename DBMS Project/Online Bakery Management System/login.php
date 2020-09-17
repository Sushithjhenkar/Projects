<?php
session_start();
if(isset($_SESSION['admin_sid']) || isset($_SESSION['customer_sid']))
{
	header("location:index.php");
}
else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="login.css">
  <title>Login</title>



</head>

<body>
  <div id="login-page" class="row">
      <form method="post" action="routers/router.php" class="login-form" id="form">
				<div class="h1">
            <h1><b>Login</b></h1>
						<br><br>
					</div>
					<div class="position">
						<i class="fa fa-user icon"></i>

            <input name="username" id="username" type="text" placeholder="Username"><br><br>
						  <i class="fa fa-key icon"></i>

            <input name="password" id="password" type="password" placeholder="Password"><br><br>
					</div>
						<center>
						<div class="login">
							<a href="javascript:void(0);" onclick="document.getElementById('form').submit();">Login</a>
						</div>
					</center>
<div class="p">
	<p><br><br>Don't have an account?<br><a href="register.php"> <br>Register Now!</a></p>
</div>

      </form>
    </div>

</body>
</html>
<?php
}
?>
