<?php
        //Enter your code here, enjoy!
    $query = "INSERT INTO STUDENT_HOLD(Student_ID, Hold_ID) VALUES('{S_ID holder}','{H_ID holder}' ) ;";
    $result = mysqli_query($conn, $query);
    if(mysqli_affected_rows($conn) == 0)
    {
        echo("Error inserting. Try again.");
    }
   
?>
