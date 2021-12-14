<?php
    session_start();
    include('../include/db.php'); 

    $empID = $_SESSION['empID'];
    $subject = $_POST['subject'];

    $join = "SELECT DISTINCT ps.sectionName FROM professor_portal.`professor_section` as ps
    JOIN enrollment.`student_sections` as ss 
    ON ps.sectionName = ss.sectionname
    WHERE profID = '$empID' AND ps.Subject = '$subject'";

    $qry = mysqli_query($profConn, $join);

   
?>

                        <?php if(mysqli_num_rows($qry) > 0) { 
                            while($row = mysqli_fetch_assoc($qry)) { ?>
                                <option value="<?=$row['sectionName']?>"> <?=$row['sectionName']?> </option>
                        <?php } } ?>
                   