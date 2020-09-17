<?php
include 'includes/connect.php';


	if($_SESSION['admin_sid']==session_id())
	{
		?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
	<link rel="stylesheet" href="users.css">
	<link rel="stylesheet" href="adminpage.css">
  <title>User List</title>

	<header>
			<ul>
				<li style="text-decoration: none;"><img src="2(1).png" alt="logo"></li>
			</ul>
		</header>

		<style media="screen">
			th
			{
				padding: 20px;
				padding-left: 20px;
				text-align: center;
			}
			td
			{
				padding: 10px;
				padding-left: 20px;
				text-align: center;

			}
		</style>

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
							<li><a href="all-orders.php"> Orders</a></li>
	            <li><a href="users.php"><i class="mdi-social-person"></i> Users</a></li>
	        </ul>
					</div>



	</div>

<div class="main">

                <h1>User List</h1>



        <!--start container-->
        <div class="container">
          <p class="caption">Enable, Disable or Verify Users.</p>
          <div class="divider"></div>
          <!--editableTable-->
          <div id="editableTable" class="section">
		  <form class="formValidate" id="formValidate1" method="post" action="routers/user-router.php" novalidate="novalidate">
            <div class="row">
              <div class="col s12 m4 l3">
                <h3 class="header">List of users</h3>
              </div>
              <div>
<table cellspacing="5px" width="auto">
                    <thead>
                      <tr>
                        <th data-field="name">Name</th>
                        <th data-field="price">Email</th>
                        <th data-field="price">Contact</th>
                        <th data-field="price">Address</th>
                        <th data-field="price">Role</th>
                        <th data-field="price">Verified</th>
                        <th data-field="price">Enable</th>

                      </tr>
                    </thead>

                    <tbody>
				<?php
				$result = mysqli_query($con, "SELECT * FROM users");
				while($row = mysqli_fetch_array($result))
				{
					echo '<tr><td>'.$row["name"].'</td>';
					echo '<td>'.$row["email"].'</td>';
					echo '<td>'.$row["contact"].'</td>';
					echo '<td>'.$row["address"].'</td>';
					echo '<td><select name="'.$row['id'].'_role">
                      <option '.($row['role']=='Administrator' ? 'selected' : '').'>Administrator</option>
                      <option value="Customer"'.($row['role']=='Customer' ? 'selected' : '').'>Customer</option>
                    </select></td>';
					echo '<td><select name="'.$row['id'].'_verified">
                      <option value="1"'.($row['verified'] ? 'selected' : '').'>Verified</option>
                      <option value="0"'.(!$row['verified'] ? 'selected' : '').'>Not Verified</option>
                    </select></td>';
					echo '<td><select name="'.$row['id'].'_deleted">
                      <option value="1"'.($row['deleted'] ? 'selected' : '').'>Disable</option>
                      <option value="0"'.(!$row['deleted'] ? 'selected' : '').'>Enable</option>
                    </select></td>';
					$key = $row['id'];
					$sql = mysqli_query($con,"SELECT * from wallet WHERE customer_id = $key;");
					if($row1 = mysqli_fetch_array($sql)){
						$wallet_id = $row1['id'];
						$sql1 = mysqli_query($con,"SELECT * from wallet_details WHERE wallet_id = $wallet_id;");
						if($row2 = mysqli_fetch_array($sql1)){
						}
					}
				}
				?>
                    </tbody>
</table>
              </div>
			  <div class="btn">
                              <button class="btn cyan waves-effect waves-light right" style="float:center;" type="submit" name="action">Modify
                                <i class="mdi-content-send right"></i>
                              </button>
                            </div>
            </div>
			</form>
		  <form class="formValidate" id="formValidate" method="post" action="routers/add-users.php" novalidate="novalidate">
            <div class="row">
              <div class="col s12 m4 l3">
                <h3 class="header"><br><br>Add User</h3>
              </div>
              <div>
<table cellspacing="20px" width="80px;">
                    <thead>
                      <tr>
                        <th data-field="name">Username</th>
                        <th data-field="name">Password</th>
                        <th data-field="name">Name</th>
                        <th data-field="price">Email</th>
                        <th data-field="price">Phone number</th>
                        <th data-field="price">Address</th>
                        <th data-field="price">Role</th>
                        <th data-field="price">Verified</th>
                        <th data-field="price">Enable</th>
                      </tr>
                    </thead>

                    <tbody>
				<?php
					echo '<tr><td><input style="width:100px" id="username" name="username" type="text" placeholder="Username" data-error=".errorTxt02"><div class="errorTxt02"></div></td>';
					echo '<td><input style="width:100px" id="password" name="password" type="password" placeholder="Password" data-error=".errorTxt03"><div class="errorTxt03"></div></td>';
					echo '<td><input style="width:100px" id="name" name="name" type="text" placeholder="Name" data-error=".errorTxt04"><div class="errorTxt04"></div></td>';
					echo '<td><input style="width:100px" id="email" name="email" type="email" placeholder="Email"></td>';
					echo '<td><input style="width:100px" id="contact" name="contact" type="text" placeholder="Phone number" data-error=".errorTxt05" minlength="10" maxlength="10"><div class="errorTxt05"></div></td>';
					echo '<td><input style="width:100px" id="address" name="address" type="text" placeholder="Address" data-error=".errorTxt06"><div class="errorTxt06"></div></td>';
					echo '<td><select style="width:130px" name=	"role">
                      <option value="Administrator">Administrator</option>
                      <option value="Customer" selected>Customer</option>
                    </select></td>';
					echo '<td><select style="width:150px" name="verified">
                      <option value="1">Verified</option>
                      <option value="0" selected>Not Verified</option>
                    </select></td>';
					echo '<td><select style="width:120px" name="deleted">
                      <option value="1">Disable</option>
                      <option value="0" selected>Enable</option>
                    </select></td></tr>';
				?>
                    </tbody>
</table>
              </div>
			  <div class="btn">
                              <button class="btn cyan waves-effect waves-light right" style="float:center;" type="submit" name="action">Add
                                <i class="mdi-content-send right"></i>
                              </button>
                            </div>
            </div>
			</form>
            <div class="divider"></div>

          </div>
        </div>


<?php include('nusers.php'); ?>

</div>



    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
    <!--angularjs-->
    <script type="text/javascript" src="js/plugins/angular.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script type="text/javascript" src="js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery-validation/additional-methods.min.js"></script>


    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js">
    $("#formValidate").validate({
        rules: {
            username: {
                required: true,
                minlength: 5,
            },
            password: {
                required: true,
                minlength: 5,
            },
            name: {
                required: true,
                minlength: 5,
			},
            contact: {
                required: true,
                minlength: 4,
			},
            address: {
                minlength: 10,
			},
            balance: {
                required: true,
			},
		},
        messages: {
           username:{
                required: "Enter a username",
                minlength: "Enter at least 5 characters"
            },
           password:{
                required: "Provide a prove",
                minlength: "Password must be atleast 5 characters long",
            },
           name:{
                required: "Please provide CVV number",
                minlength: "Enter at least 5 characters",
            },
           contact:{
                required: "Please provide card number",
                minlength: "Enter at least 4 digits",
            },
           address:{
                minlength: "Address must be atleast 10 characters long",
            },
           balance:{
                required: "Please provide a balance.",
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
	else
	{
		if($_SESSION['customer_sid']==session_id())
		{
			header("location:index.php");
		}
		else{
			header("location:login.php");
		}
	}
?>
