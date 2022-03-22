<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Employee Details</h2>

<table border="2">
  <tr>
    <td>Sr.No.</td>
    <td>Full Name</td>
    <td>Age</td>
  </tr>

<?php

include "conn.php"; // Using database connection file here
$lname = $_session['last_name'];
$records = mysqli_query($db,"select * from college where Lname ='$lname'"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['first_name']; ?></td>
    <td><?php echo $data['last_name']; ?></td>
    <td><?php echo $data['gender']; ?></td>
  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>