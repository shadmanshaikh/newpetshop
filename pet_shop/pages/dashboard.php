<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../style.css">
<script src="../main.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<body>

<h2>
<a class="navbar-brand mt-2 mt-lg-0" href="shp_crt/index.php">
        <img
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpdK_TIhgNkl5BziZ_jFr4qRN74exsNEiZPA&usqp=CAU"
          height="30"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
</h2>

  <?php

include "shp_crt/connect.php"; 

$records = mysqli_query($db,"select * from payment_details ");

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


<?php mysqli_close($db);?>


  <h2>Purchase Details</h2>

<table border="4" class="table table-bordered">
  <tr>
    <td>user name</td>
    <td>email</td>
    <td>product id</td>
    <td>product name</td>
    <td>code</td>
    <td>price</td>

  </tr>

  <?php

include "shp_crt/connect.php";
$records = mysqli_query($db,"select id,name,fname,Mail,code,price from tblproduct , user limit 5 ");


while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['fname']; ?></td>
    <td><?php echo $data['Mail']; ?></td>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['code']; ?></td>
    <td><?php echo $data['price']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db);?>


</body>
</html> 
