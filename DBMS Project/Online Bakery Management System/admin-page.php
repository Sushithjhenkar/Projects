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
  <title>Food Menu</title>
	<header>
		<ul>
			<li style="text-decoration: none;"><img src="2(1).png"></li>
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

                <h1>Food Menu</h1>




        <div class="container">
          <p class="caption">Add, Edit or Remove Menu Items.</p>
          <div class="divider"></div>
		  <form class="formValidate" id="formValidate" method="post" action="routers/menu-router.php" novalidate="novalidate">
            <div class="row">
              <div class="col s12 m4 l3">
                <h2 class="header">Order Food</h2>
              </div>
              <div>
				<table cellspacing="30px" width="80px;">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Item Price/Piece</th>
                      </tr>
                    </thead>

                    <tbody>
											<?php
				$result = mysqli_query($con, "SELECT * FROM items");
				while($row = mysqli_fetch_array($result))
				{
					echo '<tr><td><div class="input-field col s12"><label for="'.$row["id"].'_name">Name</label>';
					echo '<input value="'.$row["name"].'" id="'.$row["id"].'_name" name="'.$row['id'].'_name" type="text" data-error=".errorTxt'.$row["id"].'"><div class="errorTxt'.$row["id"].'"></div></td>';
					echo '<td><div class="input-field col s12 "><label for="'.$row["id"].'_price">Price</label>';
					echo '<input value="'.$row["price"].'" id="'.$row["id"].'_price" name="'.$row['id'].'_price" type="text" data-error=".errorTxt'.$row["id"].'"><div class="errorTxt'.$row["id"].'"></div></td>';
					echo '<td>';
					if($row['deleted'] == 0){
						$text1 = 'selected';
						$text2 = '';
					}
					else{
						$text1 = '';
						$text2 = 'selected';
					}
					echo '<select name="'.$row['id'].'_hide">
                      <option value="1"'.$text1.'>Available</option>
                      <option value="2"'.$text2.'>Not Available</option>
                    </select></td></tr>';
				}
				?>
                    </tbody>
</table>
              </div>
			  <div class="btn">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Modify
                                <i class="mdi-content-send right"></i>
                              </button>
                            </div>
            </div>
			</form>
			<div class="add">
		  <form class="formValidate" id="formValidate1" method="post" action="routers/add-item.php" novalidate="novalidate">
                <h2 class="header">Add Item</h2>
              <div>
<table cellspacing="30px">
                    <thead>
                      <tr>
                        <th data-field="id">Name</th>
                        <th data-field="name">Price</th>
                      </tr>
                    </thead>

                    <tbody>
											<?php
												echo '<tr><td><div class="input-field col s12"><label for="name">Name</label>';
												echo '<input id="name" name="name" type="text" data-error=".errorTxt01"><div class="errorTxt01"></div></td>';
												echo '<td><div class="input-field col s12 "><label for="price" class="">Price</label>';
												echo '<input id="price" name="price" type="text" data-error=".errorTxt02"><div class="errorTxt02"></div></td>';
												echo '<td></tr>';
											?>

                    </tbody>
</table>
              </div>
			  <div class="add">
                              <button type="submit" name="action">Add
                                <i class="mdi-content-send right"></i>
                              </button>
                            </div>
            </div>
			</form>
            <div class="divider"></div>

          </div>
        </div>
        </div>
			</div>


      </section>


			</div>
</div>



<div class="n" style="margin-left: 300px;">
<?php include('nitems.php'); ?>
</div>

  <!-- //////////////////////////////////////////////////////////////////////////// -->


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
