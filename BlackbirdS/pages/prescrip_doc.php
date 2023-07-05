<?php
require_once("./../includes/db_conect.php");
require_once("./../includes/function_doc.php");
getHeader();
getSidebar();
?>
<div class="main-content col-md-10 vh-100 justify-content-center d-flex bg-light gx-0">
    <!------------------ Please Start input Here ------------------------------------------->
    <div class="col-md-12  justify-content-center pt-3 px-1 " style="background-color:#a8bee5; "><h3 style="border:2px solid DodgerBlue;background-color:#205295; color: white; text-align: center; ">Prescription List</h3>
    <table class="table table-hover table-primary">
        <thead>
          <tr>
                <th>Patient ID</th>
                <th>Patient Nmae</th>
                <th>Appoinment ID</th>
                <th>Appointment Date</th>
                <th>Appointment Time</th>
                <th>Disease</th>
                <th>Prescription</th>
          </tr>
        </thead>
        <tbody>
            <?php
                $sql="SELECT * FROM prescription_doc";
                $q=$conn->query($sql);
                while ($row=$q->fetch_assoc()){ ?>
                <tr>
                    <td><?=$row["pat_id"]?></td>
                    <td><?=$row["username"]?></td>
                    <td><?=$row["app_id"]?></td>
                    <td><?=$row["appDate"]?></td>
                    <td><?=$row["appTime"]?></td>
                    <td><?=$row["disease"]?></td>
                    <td><?=$row["prescription"]?></td> 
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <!----------------------- Please End input Here --------------------------------------->            
        </div>
    </div>
</div>
<?php getFooter(); ?>