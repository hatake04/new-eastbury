<hmtl>
  <head>
  <title>Edit Course</title>
  </head>
  <body>
  <main>
  <p>Edit Course</p>
  <section>
    <div id="menu">
      <ul>
        <li><p id="show1" onclick="showForm(this)">Course Name</p></li>
        <li><p id="show2" onclick="showForm(this)">Course Description</p></li>
        <li><p id="show3" onclick="showForm(this)">Course Credit</p></li>
        <li><p id="show4" onclick="showForm(this)">Department</p></li>
      </ul>
    </div>
    <div id="form1">
      <form action="editCourse.php" method="POST">
        <label>Course Name</label>
        <input type="text">
        <input type="submit" value="Post" name="name" class="post">
      </form>
    </div>
    <div id="form2">
      <form action="editUser.php" method="POST">
        <label>Course Description</label>
        <textarea name="message" col="30" row="10"></textarea>
        <input type="submit" value="Post" name="desc" class="post">
      </form>
    </div>
    <div id="form3">
      <form action="editUser.php" method="POST">
        <label>Course Credit</label>
        <input type="number">
        <input type="submit" value="Post" name="credit" class="post">
      </form>
    </div>
    <div id="form4">
      <form action="editUser.php" method="POST">
       
        <label>Department</label>
        <input list="departments" name="deparments">
        <datalist id="departments">
        <?php
          include "connectToDB.php";
          $query = "SELECT Dept_Name FROM DEPARTMENT;";
          $result = mysqli_query($conn, $query);
          if(mysqli_affected_rows > 0 )
          {
            while($row = mysqli_fetch_assoc($result))
              echo("<option value=$row['Dept_Name']>");
          }
        ?>
          <option value="Good Morning">
          <option value="Good Afternoon">
          <option value="Good Evening">
        </datalist>
        <input type="submit" value="Post" name="dept" class="post">
      </form>
    </div>
    </section>
  </main>
  </body>
</hmtl>
