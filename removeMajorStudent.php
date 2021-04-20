<?php
    $query = "DELETE FROM MAJOR_STUDENT WHERE User_ID = {placeholder} AND Major_ID = {placeholder};";
    $result = mysqli_query($conn, $query);
    if(mysqli_affected_rows($conn) == 0)
    {
        echo("Record not in database.Try again");
    }
    mysqli_free_result($result);
    mysqli_close($conn);
?>
