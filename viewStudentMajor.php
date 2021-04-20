<?php
       
    $query = "SELECT * FROM MAJOR WHERE Major_ID IN(SELECT Major_ID FROM MAJOR_STUDENT WHERE Student_ID = {placeholder});";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($conn) == 0)
    {
        echo("No major assigned to student.");
    }
    else{
        while($record = mysqli_fetch_assoc($result))
        {
            echo("<p>".$record['Hold_ID']. " " . $record['Hold_Type'] ."</p>");
        }
    }
    mysqli_free_result($result);
    mysqli_close($conn);
   
?>
