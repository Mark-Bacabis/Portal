<?php
    session_start();
    include('../include/db.php');

    $empID = $_SESSION['empID'];
    $section = $_POST['section'];

    $join = "SELECT DISTINCT ps.Subject FROM professor_portal.`professor_section` as ps
    JOIN enrollment.`student_sections` as ss 
    ON ps.sectionName = ss.sectionname
    WHERE profID = '$empID' AND ps.sectionName = '$section'";

    $qry = mysqli_query($profConn, $join);

?>

                        <?php if(mysqli_num_rows($qry) > 0) { 
                            while($row = mysqli_fetch_assoc($qry)) { ?>
                                <option value="<?=$row['Subject']?>"> <?=$row['Subject']?> </option>
                        <?php } } ?>
                  