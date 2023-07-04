<?php
require_once("./../includes/function_doc.php");
getHeader();
getSidebar();
?>
<div class="main-content col-md-10 vh-100 justify-content-center d-flex bg-light gx-0">
    <!------------------ Please Start input Here ------------------------------------------->
    <div class="col-md-12  justify-content-center pt-3 px-1 " style="background-color:#a8bee5; "><h3 style="border:2px solid DodgerBlue;background-color:#205295; color: white; text-align: center; ">Appointment List</h3>
    <table class="table table-hover table-primary">
        <thead>
          <tr>
                <th>Appointment ID</th>
                <th>Patient ID</th>
                <th>Patient Name</th>
                <th>Gender</th>
                <th>App. Date</th>
                <th>App. Time</th>
                <th style="text-align: center;" colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
            <?php
                $conn = new mysqli("localhost","root","","bbirdshospital");
                $sql="SELECT * FROM appointment_doc";
                $q=$conn->query($sql);
                while ($row=$q->fetch_assoc()){ ?>
                <tr>
                    <td><?=$row["app_id"]?></td>
                    <td><?=$row["pat_id"]?></td>
                    <td><?=$row["username"]?></td>
                    <td><?=$row["gender"]?></td>
                    <td><?=$row["appDate"]?></td>
                    <td><?=$row["appTime"]?></td>
                    <td><a href="" class="btn btn-danger btn-sm">Cancel</a></td>
                    <td><a href="prescrip.php" class="btn btn-success btn-sm">Prescribe</a></td> 
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <!----------------------- Please End input Here --------------------------------------->            
        </div>
    </div>
</div>
<?php getFooter(); ?>