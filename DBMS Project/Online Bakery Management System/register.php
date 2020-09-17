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
		<link rel="stylesheet" href="Register.css">
  <title>Register</title>
</head>

<body class="cyan">



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="formValidate" id="formValidate" method="post" action="routers/register-router.php" novalidate="novalidate" class="col s12">
          <div class="input-field col s12 center">
						<div class="h1">
            <h1> <b> Register</b></h1>
            <p>Join us now!</p>
					</div>
          </div>
<label for="username" class="center-align">Username</label>
						<input name="username" id="username" type="text"  data-error=".errorTxt1" placeholder="Username">
			<div class="errorTxt1"></div>
<label for="name" class="center-align">Name</label><br>
						<input name="name" id="name" type="text" data-error=".errorTxt2" placeholder="Name"><br>
			<div class="errorTxt2"></div>
<label for="password">Password</label><br>
						<input name="password" id="password" type="password" data-error=".errorTxt3" placeholder="Password"><br>
			<div class="errorTxt3"></div>
<label for="phone">Phone</label><br>
						<input name="phone" id="phone" type="number" data-error=".errorTxt4" placeholder="Phone"><br>
			<div class="errorTxt4"></div>
			<div class="btn">
			<a href="javascript:void(0);" onclick="document.getElementById('formValidate').submit();" class="btn waves-effect waves-light col s12"><br><b>Register</b></a>
</div>
            <p class="margin center medium-small sign-up">Already have an account? <a href="login.php"><br>Login</a></p>
          </div>
			</div>
      </form>




  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
     <script type="text/javascript" src="js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery-validation/additional-methods.min.js"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
    <script type="text/javascript">
    $("#formValidate").validate({
        rules: {
            username: {
                required: true,
                minlength: 5
            },
            name: {
                required: true,
                minlength: 5
            },
			password: {
				required: true,
				minlength: 5
			},
            phone: {
				required: true,
				minlength: 4
			},
        },
        messages: {
            username: {
                required: "Enter username",
                minlength: "Minimum 5 characters are required."
            },
            name: {
                required: "Enter name",
                minlength: "Minimum 5 characters are required."
            },
			password: {
				required: "Enter password",
				minlength: "Minimum 5 characters are required."
			},
            phone:{
				required: "Specify contact number.",
				minlength: "Minimum 4 characters are required."
			},
        },
        errorElement : 'div',
        errorPlacement: function(error, element) {
          var placement = $(element).data('error');
          if (placement) {
            $(placement).append(error)
          } else {
            error.insertAfter(element);
          }
        }
     });
    </script>
</body>
</html>
<?php
}
?>
