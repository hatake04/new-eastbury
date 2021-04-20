<?php
       
    $query = "SELECT Mi_Name FROM MINOR WHERE Minor_ID IN(SELECT Minor_ID FROM MINOR_STUDENT WHERE Student_ID = {placeholder});";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($conn) == 0)
    {
        echo("No minor assigned to student.");
    }
    else{
        while($record = mysqli_fetch_assoc($result))
        {
            echo("<p>".$record['Mi_name']."</p>");
        }
    }
    mysqli_free_result($result);
    mysqli_close($conn);
   
?>
