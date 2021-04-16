<!DOCTYPE html>
<html>
<body>
<?php
	include "connectToDB.php";
    switch($_POST['submit'])
    {
    	extract($_POST);
    	case "crs_Name":
        {
          $query = "UPDATE COURSES SET Crs_Name = '$name' WHERE '$_SESSION["Course_ID"]';";
          $result = mysqli_query($conn, $query);
          if(mysqli_affected_rows($result) > 0)
              echo("<p>Course name changed to " .$name. " </p>");

          mysqli_free_result($result);
          mysqli_close($conn);
          break;
        }
    
    	case "crs_Desc":
        {
        	$query = "UPDATE COURSES SET Crs_Desc = '$message' WHERE '$_SESSION["Course_ID"]';";
          	$result = mysqli_query($conn, $query);
          	if(mysqli_affected_rows($result) > 0)
              echo("<p>Course description changed to " .$name. " </p>");

          	mysqli_free_result($result);
         	mysqli_close($conn);
            break;
        }
    	case "crs_Credit":
        {
        	$query = "UPDATE COURSES SET Crs_Credit = '$credit' WHERE $_SESSION["Course_ID"];";
          	$result = mysqli_query($conn, $query);
          	if(mysqli_affected_rows($result) > 0)
              echo("<p>Course name credits changed to " .$credit. " </p>");

          	mysqli_free_result($result);
          	mysqli_close($conn);
        	break;
        }
    	case "crs_Dept":
        {
        	$subQuery = "SELECT Dept_ID FROM DEPARMENT WHERE Dept_Name = '$departments';";
            $subResult = mysqli_query($conn, $subQuery);
            $subRow = mysqli_fetch_assoc(subResult);
        	$query = "UPDATE COURSES SET Dept_ID = 'subRow["Dept_ID"]' WHERE $_SESSION["Course_ID"];";
          	$result = mysqli_query($conn, $query);
          	if(mysqli_affected_rows($result) > 0)
              echo("<p>{placeholder}</p>");

          	mysqli_free_result($result);
          	mysqli_close($conn);
        	break;
        }  
    }
?>

</body>
</html>
