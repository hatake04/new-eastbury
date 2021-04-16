<hmtl>
  <head>
  <title>Edit Course</title>
  </head>
  <body>
    <main>
      <p>Holds</p>
        <?php
              include "connectToDB.php";
              $query = "SELECT * FROM HOLD;";
              $result = mysqli_query($conn, $query);
              if(mysqli_affected_rows($result) > 0)
              {
                  echo("<table><th><td>Hold ID</td><td>Hold Type</td></th>");
                  while($row = mysqli_fecth_assoc($result))
                  {
                      echo("<tr><td>". $row['Hold_ID']. "</td><td>".$row['Hold_Type']."</td></tr>");
                  }
                  echo("</table>");
              }
              mysqli_free_result($result);
          	  mysqli_close($conn);
        ?>
  </main>
  </body>
</hmtl>
