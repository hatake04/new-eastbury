<?php
    $query = "SELECT * FROM CLASSES;";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($conn) == 0)
    {
        echo("No classes found.");
    }
    else{
        echo("<table><tr><td>CRN</td><td>Faculty ID</td><td>Course ID</td><td>Room ID</td><td>Semester ID</td><td>Class Section</td><td>Seats Available</td></tr>");
        while($record = mysqli_fetch_assoc($result))
        {
            echo("<tr><td>".$record['CRN'] ."</td><td>". $record['Faculty_ID'] . "</td><td>" . $result['Course_ID'] . "</td><td>" . $result['Room_ID'] . "</td><td>" . $result['Semester_ID'] . "</td><td>" . $result['Class_Section'] . "</td><td>" . $result['Seats_Available'] . "</td></tr>");
        }
        echo("</table>");
    }
    mysqli_free_result($result);
    mysqli_close($conn);
?>

