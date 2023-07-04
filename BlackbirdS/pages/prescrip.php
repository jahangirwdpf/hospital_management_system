<?php
require_once("./../includes/function_doc.php");
getHeader();
getSidebar();
?>
<div class="main-content col-md-10 vh-100 justify-content-center d-flex p-3" style="background-color:#a8bee5;">
<!------------------ Please Start input Here ------------------------------------------->
    <div class="col-md-9 border justify-content-center p-5" style="background-color:white;  color: #144272; border-radius:15px;"><h3 style="border:2px solid DodgerBlue;background-color:#205295; color: white; text-align: center; ">Create Prescription</h3>
      <?php
        $conn = new mysqli("localhost","root","","bbirdshospital");
        if(isset($_POST['insert'])){
            $disease = $_POST['disease']??null;
            $prescription = $_POST['prescription']??null;

            $sql="INSERT INTO prescription(disease,prescription) VALUES('$disease','$prescription')";
            $q=$conn->query($sql);
            if($q){
              echo " Prescribed Successful";
              // header("location:appointment_view_doc.php");
            }else{
              echo "Error";
            }
          }  
        ?>
        <!-- Start Form Here -->
        <form action="" method="post" class="mx-5 auto" >
          <div class="form-row">
            <div class="form-group">
                <label for="name"><strong> Diseage: </strong></label>
                <textarea id="disease" name="disease" rows="4" cols="80"></textarea>
            </div>
            <div class="form-group">
                <label for="Age"><strong>  Prescription: </strong></label>
                <textarea id="prescription" name="prescription" rows="10" cols="80"></textarea>
            </div>
          </div>
          <div style="display: flex; justify-content:center;padding:10px;">
            <button type="submit" name="insert" class="btn btn-primary ">
                <strong >Prescribe</strong>
            </button>
          </div>
        </form>
        <!-- End Form Here -->
    </div>
<!------------------ Please End input Here ------------------------------------------->
          </div>
      </div>
  </div>
<?php getFooter(); ?>
