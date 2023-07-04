<?php
require_once("../includes/function.php");
getHeader();
getSidebar();
?>
<div class="main-content col-md-10 vh-100 justify-content-center d-flex p-3" style="background-color:#a8bee5;">
<!------------------ Please Start input Here ------------------------------------------->
<div class="col-md-6 border justify-content-center p-5" style="background-color:white;  color: #144272; border-radius:15px;"><h3 style="border:2px solid DodgerBlue;background-color:#205295; color: white; text-align: center; ">Doctor Information</h3>
      <?php
        $conn = new mysqli("localhost","root","","bbirdshospital");
        if(isset($_POST['insert'])){
            $username = $_POST['username']??null;
            $password = $_POST['password']??null;
            $email = $_POST['email']??null;
            $depertment = $_POST['depertment']??null;
            $doctorFees = $_POST['doctorFees']??null;

            $sql="INSERT INTO doctor(username,password,email,depert_id,doctorFees) VALUES('$username','$password','$email','$depertment','$doctorFees')";
            $q=$conn->query($sql);
            if($q){
              echo "Successful";
            }else{
              echo "Error";
            }
          }  
        ?>
    <!-- Start Form Here -->
        <form action="" method="post" class="mx-5 auto" >
          <div class="form-row">
            <div class="form-group">
                <label for="inputEmail4"><strong> Doctor Name :</strong></label>
                <input type="text" name="username" class="form-control" id="inputEmail4" placeholder="username">
            </div>
            <div class="form-group">
                <label for="inputPassword4"><strong> Password :</strong></label>
                <input type="text" name="password" class="form-control" id="inputPassword4" placeholder="password">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
                <label for="inputEmail4"><strong> E-mail :</strong></label>
                <input type="text" name="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
          <div class="form-row">
            <div class="form-group">
                <label for="inputEmail4"><strong> Depertment :</strong></label>
                  <select class="form-select form-select-sm in mb-1" name="depertment" aria-label=".form-select-sm example">
                    <option selected>Select Depertment :</option>
                        <?php
                          $sql = "SELECT * FROM depertment"; 
                          $result = $conn->query($sql);
                          while ($rows = $result->fetch_assoc()){ ?>
                              <option value= "<?php echo $rows['id'];?>"> 
                                <?php echo $rows['dept_name'];?>
                              </option>
                            <?php } ?>
                  </select>
            </div>
              <div class="form-group">
                  <label for="inputZip"><strong> Doctor Fees :</strong></label>
                  <input type="text" name="doctorFees" class="form-control" id="inputZip">
              </div>
          </div><br>
          <div style="display: flex; justify-content:center;padding:10px;">
          <button type="submit" name="insert" class="btn btn-primary "> <strong >Add Doctor</strong></button>
          </div>
        </form>
      <!-- Start Form Here -->
  </div>
<!------------------ Please End input Here ------------------------------------------->
          </div>
      </div>
  </div>
<?php getFooter(); ?>
