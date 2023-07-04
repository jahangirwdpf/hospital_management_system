<?php
require_once("./../includes/function.php");
getHeader();
getSidebar();
?>
<div class="main-content col-md-10 vh-100 justify-content-center d-flex bg-light gx-0">
    <!------------------ Please Start input Here ------------------------------------------->
    <div class="col-md-12 border justify-content-center gx-0 pt-3" style="background-color:#a8bee5;  color: yellow;"><h3 style="border:2px solid DodgerBlue;background-color:#205295; color: white; text-align: center; ">Doctor List</h3>
    <table class="table table-hover table-primary">
        <thead>
          <tr>
            <th>ID</th>
            <th >Name</th>
            <th>Email</th>
            <th>password</th>
          </tr>
        </thead>
        <tbody>
            <?php
                $conn = new mysqli("localhost","root","","bbirdshospital");
                $sql="SELECT * FROM doctor";
                $q=$conn->query($sql);
                while ($row=$q->fetch_assoc()){ ?>
                <tr>
                    <td><?=$row["id"]?></td>
                    <td><?=$row["username"]?></td>
                    <td><?=$row["email"]?></td>
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