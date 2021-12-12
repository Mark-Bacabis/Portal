<?php
   session_start();
   $empID = $_SESSION['empID'];

   include('../include/db.php');
   $section = $_POST['section'];
   $subject = $_POST['subject'];
     
  

   if(isset($_POST['section'])){
 
    // SELECT ALL INFO OF STUDENT
    $selStud = mysqli_query($enConn, "SELECT * FROM professor_portal.professor_section as b 
    JOIN enrollment.student_sections as c
    ON b.sectionName = c.sectionname
    JOIN enrollment.studentinfo as d
    ON c.StudentID = d.StudentID
    WHERE b.profID = '$empID' AND c.sectionName = '$section' AND b.subject = '$subject' ");
   }

   if(isset($_POST['subject'])){

    // SELECT ALL INFO OF STUDENT
    $selStud = mysqli_query($enConn, "SELECT * FROM professor_portal.professor_section as b 
    JOIN enrollment.student_sections as c
    ON b.sectionName = c.sectionname
    JOIN enrollment.studentinfo as d
    ON c.StudentID = d.StudentID
    WHERE b.profID = '$empID' AND c.sectionName = '$section' AND b.subject = '$subject' ");
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
                    <?php
                        if(mysqli_num_rows($selStud) > 0){
                            while($row = mysqli_fetch_assoc($selStud)) { ?>
                            <tr>
                                <td> <input type="text" name="studID[]" value="<?=$row['StudentID']?>" class="studIdText" readonly> </td>
                                <td> <?=$row['FullName-Last']?> </td>
                                <td> <?=$row['FullName-First']?> </td>
                                <td> <?=$row['FullName-Middle']?> </td>
                                <td> <input type="text" name="grade[]" class ="grade" numberonly required> </td>
                                <td> 
                                    <select name="action[]" class="action">
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
              <input type="submit" value="Submit Grades" class="submit">
            </form> 



<script>
    var grades = document.querySelectorAll('.grade');
    var action = document.querySelectorAll('.action');

    for(let i = 0; i < action.length; i++) {
        action[i].addEventListener('change', (e)=> {    
        
            console.log(action[i].value);
            if(action[i].value === 'COMPLETE'){
                grades[i].readOnly = false;
                grades[i].style.background = 'none';
            }
            else{
                grades[i].value = '';
                grades[i].readOnly = true;
                grades[i].style.background = '#30383b30';
            }
        });
    }
  
                
</script>