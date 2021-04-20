<?php
        //Enter your code here, enjoy!
    $query = "SELECT Hold_ID FROM STUDENT_HOLD WHERE Student_ID = {placeholder};";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 0)
    {
        echo("No holds.");
    }
    else
    {
        while($record = mysqli_fetch_assoc($result))
        {
            $subQuery = "SELECT Hold_Type FROM HOLD WHERE Hold_ID = " .$record["Hold_ID"]. ";";
            $subResult = mysqli_query($conn, $subQuery);
            $subRecord = mysqli_fetch_assoc($subResult);
            echo("<p>" .$subRecord["Hold_Type"]. "</p>");
        }
    }
    mysqli_free_result($result);
    mysqli_close($conn);
?>
