<!DOCTYPE html>
<html>
<body>
<h2>Add class</h2>
<form method="POST">
	<label>CRN</label>
    <input type="text" name="crn">
    <label>Section</label>
    <input type="text" name="section">
    <label>Course</label>
    <input type="text" name="course">
    <label>Location</label>
    <input type="text" name="location">
    <label>Teacher</label>
    <input type="text" name="teacher">
    <label>Timeslot</label>
    <input type="number" name="timeslot">
</form>
<?php
	include "connectToDB.php";
    extract($_POST);
    
    $query = "INSERT INTO CLASSES {placeholder} VALUES {placeholder};";
    $result = mysqli_query($conn, $query);
    if(mysqli_affected_rows($result) > 0)
    	echo("<p>{placeholder}</p>");
    
    mysqli_free_result($result);
    mysqli_close($conn);
?>

</body>
</html>
