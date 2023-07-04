<?php
require_once("./../includes/function.php");
getHeader();
?>
<div class="main-content col-md-12 vh-100 justify-content-center d-flex p-5" style="background-color:#2C74B3">
<!------------------ Please Start input Here ------------------------------------------->

    <!---------- Start Form Here ----------------->
  <form action="" method="post" class="body">
    <div class="container-fluid" style="margin-top: 200px;">
       
        <div class="container text-center">
            <div class="row">
                <div class="col ">
                    <div class="card mb-3 text-bg-dark" style="max-width: 500px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../img/admin.jpg" class="img-fluid rounded-start" alt="..." style="height:145px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body" style="margin-top: 30px;">
                                    <h5 class="card-title">LOGIN AS ADMIN</h5>
                                    <button type="submit" name="admin" class="btn btn-primary btn-lg"><a href="admin_login.php">Login Here</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3 text-bg-dark" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../img/user.jpg" class="img-fluid rounded-start" alt="..." style="height:145px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body" style="margin-top: 30px;">
                                    <h5 class="card-title">LOGIN AS DOCTOR</h5>
                                    <button type="button" name="user" class="btn btn-primary btn-lg"><a href="doc_login.php">Login Here</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3 text-bg-dark" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../img/user.jpg" class="img-fluid rounded-start" alt="..." style="height:145px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body" style="margin-top: 30px;">
                                    <h5 class="card-title">LOGIN AS PATIENT</h5>
                                    <button type="button" name="user" class="btn btn-primary btn-lg"><a href="patient_login.php">Login Here</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>

      </div>
  </form>
  <!---------- End Form Here ----------------->    

<!----------------------- Please End input Here --------------------------------------->            
</div>
    </div>
</div>
<?php getFooter(); ?>