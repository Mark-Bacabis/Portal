<?php
   session_start();
   $empID = $_SESSION['empID'];

   include('../include/db.php');

   if(isset($_POST['section'])){
      $section = $_POST['section'];

      include('../include/db.php');
      // SELECT ALL INFO OF STUDENT
      $selStud = mysqli_query($enConn, "SELECT * FROM hrdb.tblemployees a
      JOIN professor_portal.professor_section b
      ON a.EMPLOYEEID = b.profID
      JOIN enrollment.student_sections c
      ON b.sectionName = c.sectionname
      JOIN enrollment.studentinfo d
      ON c.StudentID = d.StudentID
      WHERE b.profID = '$empID' AND b.sectionName = '$section' AND b.subject = 'AR101'");
   }

   if(isset($_POST['subject'])){
      $section = $_POST['section'];
      $subject = $_POST['subject'];

      include('../include/db.php');
      // SELECT ALL INFO OF STUDENT
      $selStud = mysqli_query($enConn, "SELECT * FROM hrdb.tblemployees a
      JOIN professor_portal.professor_section b
      ON a.EMPLOYEEID = b.profID
      JOIN enrollment.student_sections c
      ON b.sectionName = c.sectionname
      JOIN enrollment.studentinfo d
      ON c.StudentID = d.StudentID
      WHERE b.profID = '$empID' AND b.sectionName = '$section' AND b.subject = '$subject'");
   }


?>

<table border="0">
                    <tr>
                        <th> Student ID </th>
                        <th> Lastname </th>
                        <th> Firstname </th>
                        <th> Middlename </th>
                        <th> Grade  </th>
                        <th> Action  </th>
                    </tr>
                <form action="../process/insertGrade.php" method="POST">
                    <?php
                        if(mysqli_num_rows($selStud) > 0){
                            while($row = mysqli_fetch_assoc($selStud)){ ?>
                              <tr>
                                <td> <?=$row['StudentID']?> </td>
                                <td> <?=$row['FullName-Last']?> </td>
                                <td> <?=$row['FullName-First']?> </td>
                                <td> <?=$row['FullName-Middle']?> </td>
                                <td> <input type="text" name="grade[]"> </td>
                                <td> 
                                    <select name="action[]">
                                        <option value="COMPLETE"> COMPLETE </option>
                                        <option value="INC"> INC </option>
                                        <option value="DROP"> DROP </option>
                                    </select>
                                </td>
                            </tr>
                    <?php  }
                    }
                    ?>  
              </table>
