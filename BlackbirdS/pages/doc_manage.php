<?php
require_once("./../includes/db_conect.php");
require_once("./../includes/function.php");
getHeader();
getSidebar();
?>
<div class="main-content col-md-10 vh-100 justify-content-center d-flex gx-0 bg-light">
<!------------------ Please Start input Here ------------------------------------------->
    <div class="container-fluid gx-0 border justify-content-center pt-3" style="background-color:#a8bee5;  color: yellow;"><h3 style="border:2px solid DodgerBlue;background-color:#205295; color: white; text-align: center; ">Please Update Here</h3>    
    <table class="table table-hover table-primary">
        <thead>
          <tr>
            <th>ID</th>
            <th >Name</th>
            <th>Email</th>
            <th>password</th>
            <th style="text-align: center;" colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
            <?php
                $sql="SELECT * FROM doctor";
                $q=$conn->query($sql);
                while ($row=$q->fetch_assoc()){ ?>
                <tr>
                    <td><?=$row["id"]?></td>
                    <td><?=$row["username"]?></td>
                    <td><?=$row["email"]?></td>
                    <td><?=$row["password"]?></td>
                    <td style="text-align: center;"><a href="doc_update.php?d=<?=$row['id']?>" class="btn btn-primary btn-sm">Edit</a></td>
                    <td style="text-align: center;"><a href="doc_delete.php?u=<?=$row['id']?>" class="btn btn-danger btn-sm">Delete</a></td> 
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