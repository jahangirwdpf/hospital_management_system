<?php
require_once("./../includes/db_conect.php");
require_once("./../includes/function.php");
getHeader();
getSidebar();
?>
<div class="main-content col-md-10 vh-100 justify-content-center d-flex bg-light gx-0">
    <!------------------ Please Start input Here ------------------------------------------->
    <div class="col-md-12  justify-content-center p-3" style="background-color:#a8bee5; "><h3 style="border:2px solid DodgerBlue;background-color:#205295; color: white; text-align: center; ">Patient List</h3>
    <table class="table table-hover table-primary">
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
                
          </tr>
        </thead>
        <tbody>
            <?php
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
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <!----------------------- Please End input Here --------------------------------------->            
        </div>
    </div>
</div>
<?php getFooter(); ?>