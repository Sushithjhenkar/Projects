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
	<link rel="stylesheet" href="adminpage.css">
		<link rel="stylesheet" href="allorders.css">
  <title>All orders</title>

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
							<li><a href="all-orders.php"> Orders</a></li>
	            <li><a href="users.php"><i class="mdi-social-person"></i> Users</a></li>
	        </ul>
					</div>



	</div>
			<div class="main">
                <h1>All Orders</h1>



        <div class="container">
          <p class="caption">List of orders by customers with details</p>
          <div class="divider"></div>
<div id="work-collections" class="seaction">
	<div class="chst">
<div class="btn">
					<?php
					if(isset($_GET['status'])){
						$status = $_GET['status'];
					}
					else{
						$status = '%';
					}
					$sql = mysqli_query($con, "SELECT * FROM orders WHERE status LIKE '$status';");
					echo '<div class="row">
                <div>
                    <h4 class="header">List</h4>
                    <ul id="issues-collection" class="collection">';
					while($row = mysqli_fetch_array($sql))
					{
						$status = $row['status'];
						$deleted = $row['deleted'];
						echo '<li class="collection-item avatar">
                              <i class="mdi-content-content-paste red circle"></i>
                              <span class="collection-header">Order No. '.$row['id'].'</span>
                              <p><strong>Date:</strong> '.$row['date'].'</p>
                              <p><strong>Payment Type:</strong> '.$row['payment_type'].'</p>
							  <p><strong>Status:</strong> '.($deleted ? $status : '
							  <form method="post" action="routers/edit-orders.php">
							    <input type="hidden" value="'.$row['id'].'" name="id">
								<select name="status">
								<option value="Yet to be delivered" '.($status=='Yet to be delivered' ? 'selected' : '').'>Yet to be delivered</option>
								<option value="Delivered" '.($status=='Delivered' ? 'selected' : '').'>Delivered</option>
								<option value="Cancelled by Admin" '.($status=='Cancelled by Admin' ? 'selected' : '').'>Cancelled by Admin</option>
								<option value="Paused" '.($status=='Paused' ? 'selected' : '').'>Paused</option>
								</select>
							  ').'</p>
                              <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>
                              </li>';
						$order_id = $row['id'];
						$customer_id = $row['customer_id'];
						$sql1 = mysqli_query($con, "SELECT * FROM order_details WHERE order_id = $order_id;");
						$sql3 = mysqli_query($con, "SELECT * FROM users WHERE id = $customer_id;");
							while($row3 = mysqli_fetch_array($sql3))
							{
							echo '<li class="collection-item">
                            <div class="row">
							<p><strong>Name: </strong>'.$row3['name'].'</p>
							<p><strong>Address: </strong>'.$row['address'].'</p>
							'.($row3['contact'] == '' ? '' : '<p><strong>Contact: </strong>'.$row3['contact'].'</p>').'
							'.($row3['email'] == '' ? '' : '<p><strong>Email: </strong>'.$row3['email'].'</p>').'
							'.(!empty($row['description']) ? '<p><strong>Note: </strong>'.$row['description'].'</p>' : '').'
                            </li>';
							}
						while($row1 = mysqli_fetch_array($sql1))
						{
							$item_id = $row1['item_id'];
							$sql2 = mysqli_query($con, "SELECT * FROM items WHERE id = $item_id;");
							while($row2 = mysqli_fetch_array($sql2))
								$name = $row2['name'];
							echo '<li class="collection-item">
                            <div class="row">
                            <div class="col s7">
                            <p class="collections-title"><strong>#'.$row1['item_id'].'</strong> '.$name.'</p>
                            </div>
                            <div class="col s2">
                            <span>'.$row1['quantity'].' Pieces</span>
                            </div>
                            <div class="col s3">
                            <span>Rs. '.$row1['price'].'</span>
                            </div>
                            </div>
                            </li>';
						}
								echo'<li class="collection-item">
                                        <div class="row">
                                            <div class="col s7">
                                                <p class="collections-title"> Total</p>
                                            </div>
                                            <div class="col s2">
											<span> </span>
                                            </div>
                                            <div class="col s3">
                                                <span><strong>Rs. '.$row['total'].'</strong></span>
                                            </div>';
								if(!$deleted){
								echo '<button class="button" style="font-size:20px" type="submit" name="action">Change Status
                                              <i class="mdi-content-clear right"></i>
										</form>';
								}
								echo'</div></li>';
					}
					?>
					</ul>
                </div>
              </div>
            </div>
        </div>
			</div>
		</div>

      </section>

    </div>


  </div>

    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
    <!--angularjs-->
    <script type="text/javascript" src="js/plugins/angular.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
</body>

</html>
<?php
	}
	else
	{
		if($_SESSION['customer_id']==session_id())
		{
			header("location:orders.php");
		}
		else{
			header("location:login.php");
		}
	}
?>
