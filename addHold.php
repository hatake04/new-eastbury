<?php
       
    $query = "INSERT INTO HOLD(Hold_ID, Hold_Type) VALUES({placeholder},{placeholder});";
    $result = mysqli_query($conn, $query);
    if(mysqli_affected_rows($conn) == 0)
    {
        echo("Error in inserting record. Try again.");
    }
    mysqli_free_result($result);
    mysqli_close($conn);
   
?>
