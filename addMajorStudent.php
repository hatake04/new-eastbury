<?php
    $currentDate = date("Y-m-d");
    $query = "INSERT INTO MAJOR_STUDENT(Student_ID, Major_ID, Date_Declared) VALUES({placeholder}, {placeholder}, '$currentDate');";
    $result = mysqli_query($conn, $query);
    if(mysqli_affected_rows($conn) == 0)
    {
        echo("Targeted major was not assigned to student.Try again");
    }
    mysqli_free_result($result);
    mysqli_close($conn);
   
?>
