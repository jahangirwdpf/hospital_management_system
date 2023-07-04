<?php
require_once("./../includes/function.php");
getHeader();
getSidebar();
?>
<div class="main-content col-md-10 vh-100 justify-content-center d-flex p-3" style="background-color:#a8bee5;">
<!------------------ Please Start input Here ------------------------------------------->
    <div class="col-md-6 border justify-content-center p-5" style="background-color:white;  color: #144272; border-radius:15px;"><h3 style="border-radius:6px; border:2px solid DodgerBlue;background-color:#205295;color: white; text-align: center;">Patient Registration</h3>
      <?php
        $conn = new mysqli("localhost","root","","bbirdshospital");
          if(isset($_POST['insert'])){
                $name = $_POST['username']??null;
                $age = $_POST['age']??null;
                $gender = $_POST['gender']??null; 
                $bld_group = $_POST['bld_group']??null;
                $email = $_POST['email']??null;
                $contact = $_POST['contact']??null;
                $password = $_POST['password']??null;
                $password_again = $_POST['repassword']??null;

                // if(!empty($name)&& !empty($age) && !empty($gender) && !empty($bld_group) &&!empty($email) &&!empty  ($contact) &&!empty($password) && !empty($password_again)){
                //     if($password === $password_again){
                      $sql = "INSERT INTO patient(username,age,gender,bld_group,email,contact,password) VALUES ('$name','$age','$gender','$bld_group','$email','$contact','$password')";
                              $q=$conn->query($sql);
                        if($q){
                          echo "Successful";
                        }else{
                          echo "Error";
                        }
                    } 
                // }
        // }
        ?>
    <!-- Start Form Here -->
        <form action="" method="post" class="mx-5 auto" >
          <div class="form-row">
            <div class="form-group">
                <label for="name"><strong> Name: </strong></label>
                <input type="text" name="username" class="form-control" id="username" placeholder="username" required>
            </div>
            <div class="form-group">
                <label for="Age"><strong>  Age: </strong></label>
                <input type="text" name="age" class="form-control" id="Age" placeholder="age">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group ">
                <label for="gender"><strong> Gender :</strong></label>
                <input type="radio" name="gender"  id="gender" value="male" required>
                Male
                <input type="radio" name="gender"  id="gender" value="female" required >
                Female<br>
            </div>

            <div class="form-group">
                <label for="bld_group"><strong> Blood Group :</strong></label>
                <input type="text" name="bld_group" class="form-control" id="bld_group" placeholder="blood group">
            </div>

            <div class="form-group">
                <label for="email"><strong> E-mail :</strong></label>
                <input type="email" name="email" class="form-control" id="email" placeholder="email">
            </div>
            <div class="form-group">
                <label for="bld_group"><strong> Contact :</strong></label>
                <input type="text" name="contact" class="form-control" id="contact" placeholder="contact" required>
            </div>
            <div class="form-group">
                <label for="password"><strong> password :</strong></label>
                <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
            </div>
          
            <div style="display: flex; justify-content:center;padding:10px;">
          <button type="submit" name="insert" class="btn btn-primary "><strong >Submit</strong></button>
          </div>
        </form>
        <h4 style="text-align: center;">Have an account? <a href="Patient_login.php" style="color: red;">login</a></h4>
      <!-- Start Form Here -->
  </div>
<!------------------ Please End input Here ------------------------------------------->
          </div>
      </div>
  </div>
<?php getFooter(); ?>
