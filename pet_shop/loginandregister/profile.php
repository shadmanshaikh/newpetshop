<?php
$con=mysqli_connect("localhost:3309","root","","pet_shop");
include "connect.php";
// include "useradminlogin.php";
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$email=$_GET['email'];
$result = mysqli_query($con,"SELECT fname,lname from user where Mail='$email'");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['lname'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>