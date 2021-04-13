$check = "SELECT U_ID FROM USER WHERE USER_ID = ?;";
$result = mysqli_query($conn, $check);
if(mysqli_num_rows($result) > 0)
  echo("User already in the database.");
 
