<?php
include 'includes/connect.php';
include 'includes/wallet.php';
$continue=0;
$total = 0;
if($_SESSION['customer_sid']==session_id())
{
		if($_POST['payment_type'] == 'Wallet'){
		$_POST['cc_number'] = str_replace('-', '', $_POST['cc_number']);
		$_POST['cc_number'] = str_replace(' ', '', $_POST['cc_number']);
		$_POST['cvv_number'] = (int)str_replace('-', '', $_POST['cvv_number']);
		$sql1 = mysqli_query($con, "SELECT * FROM wallet_details where wallet_id = $wallet_id");
		while($row1 = mysqli_fetch_array($sql1)){
			$card = $row1['number'];
			$cvv = $row1['cvv'];
			if($card == $_POST['cc_number'] && $cvv==$_POST['cvv_number'])
			$continue=1;
			else
				header("location:index.php");
		}
		}
		else
			$continue=1;
}

$result = mysqli_query($con, "SELECT * FROM users where id = $user_id");
while($row = mysqli_fetch_array($result)){
	$name = $row['name'];
	$contact = $row['contact'];
}

if($continue){
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
	<link rel="stylesheet" href="adminpage.css">
  <title>Provide Order Details</title>

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

	<div class="main">
      <!-- START CONTENT -->
                <h1>Confirm Order</h1>
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="container">
          <p class="caption">Receipt</p>
          <div class="divider"></div>
          <!--editableTable-->
<div id="work-collections" class="seaction">
<div class="row">
<div>
<ul id="issues-collection" class="collection">
<?php
    echo '<li class="collection-item avatar">
        <i class="mdi-content-content-paste red circle"></i>
        <p><strong>Name:</strong>'.$name.'</p>
		<p><strong>Contact Number:</strong> '.$contact.'</p>
		<p><strong>Address:</strong> '.htmlspecialchars($_POST['address']).'</p>
		<p><strong>Payment Type:</strong> '.$_POST['payment_type'].'</p>
        <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>';

	foreach ($_POST as $key => $value)
	{
		if(is_numeric($key)){
		$result = mysqli_query($con, "SELECT * FROM items WHERE id = $key");
		while($row = mysqli_fetch_array($result))
		{
			$price = $row['price'];
			$item_name = $row['name'];
			$item_id = $row['id'];
		}
			$price = $value*$price;
			    echo '<li class="collection-item">
        <div class="row">
            <div class="col s7">
                <p class="collections-title"><strong>#'.$item_id.' </strong>'.$item_name.'</p>
            </div>
            <div class="col s2">
                <span>'.$value.' Pieces</span>
            </div>
            <div class="col s3">
                <span>Rs. '.$price.'</span>
            </div>
        </div>
    </li>';
		$total = $total + $price;
	}
	}
    echo '<li class="collection-item">
        <div class="row">
            <div class="col s7">
                <p class="collections-title"> Total</p>
            </div>
            <div class="col s2">
                <span>&nbsp;</span>
            </div>
            <div class="col s3">
                <span><strong>Rs. '.$total.'</strong></span>
            </div>
        </div>
    </li>';
	if(!empty($_POST['description']))
		echo '<li class="collection-item avatar"><p><strong>Note: </strong>'.htmlspecialchars($_POST['description']).'</p></li>';
	if($_POST['payment_type'] == 'Wallet')
	echo '<div id="basic-collections" class="section">

	</div>';
?>
<form action="routers/order-router.php" method="post">
<?php
foreach ($_POST as $key => $value)
{
	if(is_numeric($key)){
		echo '<input type="hidden" name="'.$key.'" value="'.$value.'">';
	}
}
?>
<input type="hidden" name="payment_type" value="<?php echo $_POST['payment_type'];?>">
<input type="hidden" name="address" value="<?php echo htmlspecialchars($_POST['address']);?>">
<?php if (isset($_POST['description'])) { echo'<input type="hidden" name="description" value="'.htmlspecialchars($_POST['description']).'">';}?>
<input type="hidden" name="total" value="<?php echo $total;?>">
<div class="btn">
<button style="font-size:25px" class="btn" type="submit" name="action" <?php if($_POST['payment_type'] == 'Wallet')?>>Confirm Order
<i class="mdi-content-send right"></i>
</button>
</div>
</form>
</ul>


                </div>
				</div>
                </div>
              </div>
            </div>


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
