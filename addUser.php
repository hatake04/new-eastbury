
<?php
$check = "SELECT U_ID FROM USER WHERE USER_ID = ?;";
$result = mysqli_query($conn, $check);
if(mysqli_num_rows($result) > 0)
  echo("User exits in the database.");
else
{
  //block of code
}
mysqli_free_result($result);
mysqli_close($conn);
?>
 
