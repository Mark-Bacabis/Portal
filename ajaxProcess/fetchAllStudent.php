<?php
 session_start();
 include('../include/db.php'); 

    $empID = $_SESSION['empID'];


    if(isset($_POST['section'])){
        $section = $_POST['section'];
        $subject = $_POST['subject'];
    
        $selSub = mysqli_query($profConn, "SELECT DISTINCT b.Subject FROM professor_portal.professor_section as b 
        JOIN enrollment.student_sections as c
        ON b.sectionName = c.sectionname
        JOIN enrollment.studentinfo as d
        ON c.StudentID = d.StudentID
        WHERE b.profID = '$empID' AND c.sectionName = '$section' LIMIT 1");
    
        $fSubject = mysqli_fetch_assoc($selSub);
    
        $sub = $fSubject['Subject'];
       
    
        // SELECT ALL INFO OF STUDENT
        $selStud = mysqli_query($enConn, "SELECT DISTINCT d.`StudentID`, d.`FullName-Last`, d.`FullName-First`, d.`Fullname-Middle` as middle FROM professor_portal.professor_section as b 
        JOIN enrollment.student_sections as c
        ON b.sectionName = c.sectionname
        JOIN enrollment.studentinfo as d
        ON c.StudentID = d.StudentID
        WHERE b.profID = '$empID' AND c.sectionName = '$section' AND b.subject = '$sub'");  ?>

        
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
                                <td> <?=$row['middle']?> </td>
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
    
    <?php }




    if(isset($_POST['sectionss'])){
        $section = $_POST['sectionss'];
       
    
        $selSub = mysqli_query($profConn, "SELECT DISTINCT b.Subject FROM professor_portal.professor_section as b 
        JOIN enrollment.student_sections as c
        ON b.sectionName = c.sectionname
        JOIN enrollment.studentinfo as d
        ON c.StudentID = d.StudentID
        WHERE b.profID = '$empID' AND c.sectionName = '$section' LIMIT 1");
    
        $fSubject = mysqli_fetch_assoc($selSub);
    
        $sub = $fSubject['Subject'];
       
    
        // SELECT ALL INFO OF STUDENT
        $selStud = mysqli_query($enConn, "SELECT DISTINCT d.`StudentID`, d.`FullName-Last`, d.`FullName-First`, d.`Fullname-Middle` as middle FROM professor_portal.professor_section as b 
        JOIN enrollment.student_sections as c
        ON b.sectionName = c.sectionname
        JOIN enrollment.studentinfo as d
        ON c.StudentID = d.StudentID
        WHERE b.profID = '$empID' AND c.sectionName = '$section' AND b.subject = '$sub'"); ?> 

         <table border="0">
                    <tr>
                        <th> Student ID </th>
                        <th> Firstname </th>
                        <th> Lastname </th>
                        <th> Middlename </th>
                    </tr>
                    
                    <?php
                        if(mysqli_num_rows($selStud) > 0){
                            while ($row = mysqli_fetch_assoc($selStud)){?>
                                <tr>
                                    <td> <?=$row['StudentID']?> </td>
                                    <td> <?=$row['FullName-Last']?> </td>
                                    <td> <?=$row['FullName-First']?> </td>
                                    <td> <?=$row['middle']?> </td>
                                </tr>    
                    <?php   }
                        }
                    ?>
                 
              </table>

    <?php }
  
?>
