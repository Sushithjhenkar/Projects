<?php
include 'includes/connect.php';
$user_id = $_SESSION['user_id'];

$result = mysqli_query($con, "SELECT * FROM users where id = $user_id");
while($row = mysqli_fetch_array($result)){
$name = $row['name'];
$address = $row['address'];
$contact = $row['contact'];
$email = $row['email'];
$username = $row['username'];
}
	if($_SESSION['customer_sid']==session_id())
	{
		?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
	<link rel="stylesheet" href="detail.css">
	<link rel="stylesheet" href="adminpage.css">
  <title>Edit Details</title>

	<header>
			<ul>
				<li style="text-decoration: none;"><img src="2(1).png" alt="logo"></li>
			</ul>
		</header>


</head>

<body>


	<div class="side">

		<div class="dropdown">
			<button class="dropbtn"><?php echo "Welcome  $name";?><br>
			<p class="user-roal"><?php echo $role;?></p></button>
			<div class="dropdown-content">
			<a href="routers/logout.php">Logout</a>
			</div>
		</div>

	<div class="nav">
					<ul>
							<li><a href="index.php"><i class="mdi-editor-border-color"></i> Food Menu</a></li>
							<li><a href="orders.php"> Orders</a></li>
							<li><a href="details.php"><i class="mdi-social-person"></i> Edit details</a></li>
					</ul>
					</div>

				<!-- END LEFT SIDEBAR NAV-->

	</div>
      <!-- //////////////////////////////////////////////////////////////////////////// -->
<div class="main">
        <h1>User Details</h1>

        <!--start container-->
        <div class="container">
          <p class="caption">Edit your details here which are required for delivery and contact.</p>
          <div class="divider"></div>
            <div class="row">
              <div class="col s12 m4 l3">
                <h4 class="header">Details</h4>
              </div>
<div>
                <div class="card-panel">
                  <div class="row">
                    <form class="formValidate" id="formValidate" method="post" action="routers/details-router.php" novalidate="novalidate"class="col s12">
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-account-circle prefix"></i>
													  <label for="username" class="">Username:</label>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input name="username" id="username" type="text" value="<?php echo $username;?>" data-error=".errorTxt1">
						  <div class="errorTxt1"></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-account-circle prefix"></i>
													  <label for="name" class="">Name:</label>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input name="name" id="name" type="text" value="<?php echo $name;?>" data-error=".errorTxt2">
						   <div class="errorTxt2"></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-communication-email prefix"></i>
													    <label for="email" class="">Email:</label>
															  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input name="email" id="email" type="text" value="<?php echo $email;?>" data-error=".errorTxt3">
						  <div class="errorTxt3"></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-lock-outline prefix"></i>
													  <label for="password" class="">Password:</label>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input name="password" id="password" type="password" data-error=".errorTxt4">
                        					  <div class="errorTxt4"></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-account-circle prefix"></i>
													  <label for="phone" class="">Contact:</label>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input name="phone" id="phone" type="number" value="<?php echo $contact;?>" data-error=".errorTxt5">
						  <div class="errorTxt5"></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-home prefix"></i>
													    <label for="address" class="">Address:</label>
                          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="address" data-error=".errorTxt6" value="<?php echo $address;?>"</input>
						  <div class="errorTxt6"></div>
                        </div>
                        <div class="row">
													<div class="submit">
                          <div class="btn">
                            <button class="btn" style="float:left;margin-top:5%;" type="submit" name="action">Submit
                              <i class="mdi-content-send right"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            <div class="divider"></div>
</div>
          </div>
        <!--end container-->

      </section>
      <!-- END CONTENT -->
    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->


  <!-- //////////////////////////////////////////////////////////////////////////// -->




</body>

</html>
<?php
	}
	else
	{
		if($_SESSION['admin_sid']==session_id())
		{
			header("location:admin-page.php");
		}
		else{
			header("location:login.php");
		}
	}
?>
