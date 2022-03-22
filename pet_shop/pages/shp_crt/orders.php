



<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
?>
<HTML>
  <HEAD>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<TITLE>ORDERS</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>
<div id="shopping-cart">
<div class="txt-heading">Orders</div><br>
<center><h1>Thank you for buying</h1></center>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td><?php echo $item["code"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "₹ ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "₹ ". number_format($item_price,2); ?></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "₹ ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php
} else {
?>
<?php 
}
// $date = strtotime("+4 day", strtotime("2022-01-13"));
echo "<center><h3>Your Product will be delivered by  " . date("Y-m-d") ." <br></h3></center>";
?>
</div>

<h2>User Details</h2>

<table border="4" class="table table-bordered">
  <tr>
    <td>name</td>
    <td>email</td>
    <td>address</td>
    <td>city</td>
    <td>state</td>
    <td>zip</td>
  </tr>

  <?php

  include "connect.php"; // Using database connection file here

  $records = mysqli_query($db,"select * from payment_details order by id_nmuber desc limit 1"); // fetch data from database

  while($data = mysqli_fetch_array($records))
  {
  ?>
    <tr>
      <td><?php echo $data['first_name']; ?></td>
      <td><?php echo $data['email']; ?></td>
      <td><?php echo $data['address']; ?></td>
      <td><?php echo $data['city']; ?></td>
      <td><?php echo $data['state']; ?></td>
      <td><?php echo $data['zip']; ?></td>
    </tr>	
  <?php
  }
  ?>
  </table>

  <?php mysqli_close($db); // Close connection ?>

</body>

</html>