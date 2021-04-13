<?php
  $query = "SELECT * FROM COURSES;";
  $result = mysqli_query($conn, $result);
  if(mysql_num_rows == 0)
    echo("No courses to display");
  else
  {
    while($record = mysqli_fetch_assoc($result))
      echo($record[] . " " . $record[] . " " . $record[]);
  }
  mysqli_free_result($result);
  mysqli_close($conn);
?>
