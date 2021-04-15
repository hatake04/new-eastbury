<!DOCTYPE html>
<html>
<body>
<ul>
	<li><a href="#">Edit Name</a></li>
    <li><a href="#">Edit Address</a></li>
    <li><a href="#">Edit Telephone</a></li>
    <li><a href="#">Edit Type</a></li>
    <li><a href="#">Edit Email</a></li>
</ul>
<?php
	include "connectToDB.php";
    extract($_POST);
    $query = "UPDATE {placeholder} SET {placeholder} WHERE {placeholder};";
    $result = mysqli_query($conn, $query);
    if(mysqli_affected_rows($conn) == 1)
    	echo("<p>Change updated</p>");
    mysqli_free_result($result);
    mysqli_close($conn);
?>

</body>
</html>
