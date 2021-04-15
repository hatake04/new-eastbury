<!DOCTYPE html>
<html>
<body>

<?php
	include "connectToDB.php";
    extract($_POST);
    $query = "INSERT INTO COURSES(...) VALUES (...);";
    $result = mysqli_query($conn, $query);
    if(mysqli_affected_rows($conn) == 1)
    	echo("<p>Course added.</p>");
    mysqli_free_result($result);
    mysqli_close($conn);
?>

</body>
</html>
