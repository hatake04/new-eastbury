<?php
        //implement on delete cascade
    $query = "DELETE FROM HOLD WHERE Hold_ID = {holdPlaceholder};";
    $result = mysqli_query($conn, $query);
    if(mysqli_affected_rows($conn) == 0)
    {
        echo("Error in deleting record. Try again.");
    }
    mysqli_free_result($result);
    mysqli_close($conn);
?>
