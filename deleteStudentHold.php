<?php
       
    $query = "DELETE FROM STUDENT_HOLD WHERE Student_ID = {placeholder} AND Hold_ID = {placeholder};";
    $result = mysqli_query($conn, $query);
    if(mysqli_affected_rows($conn) == 0)
    {
        echo("Error in deleting record. Try again.");
    }
    mysqli_free_result($result);
    mysqli_close($conn);
   
?>
