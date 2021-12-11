<?php
    session_start();
   $empID = $_SESSION['empID'];

   include('../include/db.php');

   if(isset($_POST['section'])){
      $section = $_POST['section'];

      include('../include/db.php');
      // SELECT ALL INFO OF STUDENT
      $selStud = mysqli_query($enConn, "SELECT DISTINCT * FROM hrdb.tblemployees a
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
      $selStud = mysqli_query($enConn, "SELECT DISTINCT * FROM hrdb.tblemployees a
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
                        <th> Firstname </th>
                        <th> Lastname </th>
                        <th> Middlename </th>
                    </tr>
                    
                    <?php
                        if($selStud -> num_rows > 0){
                            while ($row = $selStud -> fetch_assoc()){?>
                                <tr>
                                    <td> <?=$row['StudentID']?> </td>
                                    <td> <?=$row['FullName-Last']?> </td>
                                    <td> <?=$row['FullName-First']?> </td>
                                    <td> <?=$row['FullName-Middle']?> </td>
                                </tr>    
                    <?php   }
                        }
                    ?>
                 
              </table>