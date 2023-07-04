<?php
require_once("./../includes/function_pat.php");
getHeader();
getSidebar();
?>
<div class="main-content col-md-10 vh-100 justify-content-center d-flex p-3" style="background-color:#a8bee5;">
<!------------------ Please Start input Here ------------------------------------------->
    <div class="col-md-6 border justify-content-center p-5" style="background-color:white;  color: #144272; border-radius:15px;"><h3 style="border:2px solid DodgerBlue;background-color:#205295; color: white; text-align: center; ">Appointment Create</h3>
      <?php
        $conn = new mysqli("localhost","root","","bbirdshospital");
        if(isset($_POST['insert'])){
            $depertment = $_POST['depertment']??null;
            $doctor = $_POST['doctor']??null;
            $doctorFees = $_POST['doctorFees']??null;
            $appDate = $_POST['appDate']??null;
            $appTime = $_POST['appTime']??null;

            $sql="INSERT INTO appointment(depertment,doctor,doctorFees,appDate,appTime) VALUES('$depertment','$doctor','$doctorFees','$appDate','$appTime')";
            $q=$conn->query($sql);
            if($q){
              echo " Submit Successful";
            }else{
              echo "Error";
            }
          }  
        ?>
    <!-- Start Form Here -->
        <form action="" method="post" class="mx-5 auto" >
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
            <div class="form-group">
                <label for="inputEmail4"><strong> Doctor Name :</strong></label>
                  <select class="form-select form-select-sm in mb-1" name="doctor" aria-label=".form-select-sm example">
                    <option selected> Select Doctor :</option>
                        <?php
                          $sql = "SELECT * FROM doctor"; 
                          $result = $conn->query($sql);
                          while ($rows = $result->fetch_assoc()){ ?>
                              <option value= "<?php echo $rows['id'];?>"> 
                                <?php echo $rows['username'];?>
                              </option>
                        <?php } ?>
                  </select>
            </div>
            <div class="form-group">
                <label for="inputZip"><strong> Doctor Fees :</strong></label>
                  <select class="form-select form-select-sm in mb-1" name="depertment" aria-label=".form-select-sm example">
                    <option selected>Select DoctorFees :</option>
                        <?php
                          $sql = "SELECT * FROM doctor"; 
                          $result = $conn->query($sql);
                          while ($rows = $result->fetch_assoc()){ ?>
                              <option value= "<?php echo $rows['id'];?>"> 
                                <?php echo $rows['doctorFees'];?>
                              </option>
                        <?php } ?>
                  </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="inputZip"><strong> Appointment Time :</strong></label>
              <select name="apptime" class="form-control" id="apptime" required="required">
              <option value="" disabled selected>Select Time</option>
                      <option value="08:00:00">8:00 AM</option>
                      <option value="10:00:00">10:00 AM</option>
                      <option value="12:00:00">12:00 PM</option>
                      <option value="14:00:00">2:00 PM</option>
                      <option value="16:00:00">4:00 PM</option>
              </select>
                
            </div>

            </div>
              <div class="form-group">
                  <label for=""><strong> Appointment Date :</strong></label>
                  <input type="date" name="appDate" class="form-control" id="inputEmail4" placeholder="">
              </div>
          </div><br>
          <div style="display: flex; justify-content:center;padding:10px;">
          <button type="submit" name="insert" class="btn btn-primary ">
            <strong>Submit Appointment</strong>
          </button>
          </div>
        </form>
      <!-- Start Form Here -->
  </div>
<!------------------ Please End input Here ------------------------------------------->
          </div>
      </div>
  </div>