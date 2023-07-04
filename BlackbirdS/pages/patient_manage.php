<?php
require_once("./../includes/function.php");
getHeader();
getSidebar();
?>
<div class="main-content col-md-10 vh-100 justify-content-center d-flex bg-light gx-0">
<!------------------ Please Start input Here ------------------------------------------->
    <div  class="col-md-12 border justify-content-center p-3" style="background-color:#a8bee5;  color: yellow;"><h3 style="  border:2px solid DodgerBlue;background-color:#205295; color: white; text-align: center; "> Manage patient</h3>    
    <table class="table table-hover table-primary" style="border-radius:10px;">
        <thead>
          <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Blood Group</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Password</th>
                <th style="text-align: center;" colspan="2">Action</th>
               
            
          </tr>
        </thead>
        <tbody>
            <?php
                $conn = new mysqli("localhost","root","","bbirdshospital");
                $sql="SELECT * FROM patient";
                $q=$conn->query($sql);
                while ($row=$q->fetch_assoc()){ ?>
                <tr>
                    <td><?=$row["pat_id"]?></td>
                    <td><?=$row["username"]?></td>
                    <td><?=$row["age"]?></td>
                    <td><?=$row["gender"]?></td>
                    <td><?=$row["bld_group"]?></td>
                    <td><?=$row["email"]?></td>
                    <td><?=$row["contact"]?></td>
                    <td><?=$row["password"]?></td>

                    
                    <td>
                     <a href="patient_update.php?d=<?=$row['pat_id']?>" class="btn btn-primary btn-sm">Edit</a></td>
                     <td><a href="patient_delete.php?u=<?=$row['pat_id']?>" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
    <!----------------------- Please End input Here --------------------------------------->       
        </div>
    </div>
</div>
<?php getFooter(); ?>