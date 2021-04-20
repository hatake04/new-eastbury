<!DOCTYPE html>
<html>
<body>
<h2>View class</h2>
<form method="POST">
	<label>CRN</label>
    <input type="text">
</form>
<?php
	include "connectToDB.php";
    extract($_POST);
    
    $query = "SELECT * FROM ClASSES WHERE CRN = {placeholder};";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
    {
    	$row = mysqli_fetch_assoc($result);
    	echo("<p>{placeholder}</p>");
    }
    mysqli_free_result($result);
    mysqli_close($conn);
?>

</body>
</html>
