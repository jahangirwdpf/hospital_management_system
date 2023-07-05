<?php
require_once("./../includes/db_conect.php");

$id = $_GET['d'];
$s = "SELECT * FROM patient WHERE pat_id = $id";
$q=$conn->query($s);
$data=$q->fetch_assoc();

if (isset($_POST['update'])){
    
    $name = $_POST['name']??null;
    $age = $_POST['age']??null;
    $gender = $_POST['gender']??null;
    $bld_group = $_POST['bld_group']??null;
    $email = $_POST['email']??null;
    $contact = $_POST['contact']??null;
    $password = $_POST['password']??null;

    $q=$conn->query("UPDATE patient SET username='$name',age='$age',gender='$gender',bld_group='$bld_group',email='$email',contact='$contact',password='$password' WHERE pat_id =$id");

    if($q){
        header("location: patient_manage.php");
    }
}
require_once("./../includes/function.php");
getHeader();
getSidebar();
?>

<div class="main-content col-md-10 vh-100 justify-content-center d-flex p-5 bg-light">
<!------------------ Please Start input Here All------------------------------------------->

<!-- Start Form Here -->
<div class="col-md-6 form-primary border justify-content-center p-5" style="background-color: #a8bee5;">
    <form action="" method="post" class=" form-hover" style="color: white;"><h4 style="border: 1px solid gray; background-color: white; color: #052d61; text-align: center;">Update Patient Information Here</h4>
        

        <div class="form-row  text-dark">
            <div class="form-group">
                <label for="name"><strong> Name: </strong></label>
                <input type="text" name="name"
                 value="<?=$data['username']?>" class="form-control" id="name" placeholder="name">
            </div>
            <div class="form-group">
                <label for="Age"><strong>  Age: :</strong></label>
                <input type="text" name="age" value="<?=$data['age']?>" class="form-control" id="Age" placeholder="Age">
            </div>
          </div>
            <div class="form-group">
                <label for="bld_group"><strong> bld_group :</strong></label>
                <input type="text" name="bld_group"
                value="<?=$data['bld_group']?>"
                class="form-control" id="bld_group" placeholder="Bld_group">
            </div>

            <div class="form-group">
                <label for="email"><strong> Email :</strong></label>
                <input type="email" name="email"
                value="<?=$data['email']?>"
                class="form-control" id="email" placeholder="email">
            </div>
            <div class="form-group">
                <label for="bld_group"><strong> Contact :</strong></label>
                <input type="text" name="contact"
                value="<?=$data['contact']?>"
                class="form-control" id="contact" placeholder="contact">
            </div>
            <div class="form-group">
                <label for="password"><strong> password :</strong></label>
                <input type="password" name="password"
                value="<?=$data['password']?>"
                class="form-control" id="password" placeholder="password">
            </div>
           <br>
        <button type="submit" name="update" class="btn btn-primary">Update Patient</button>
    </form>
</div>
<!-- End Form Here -->
    
<!------------------ Please End input Here All------------------------------------------->               
        </div>
    </div>
</div>
<?php getFooter(); ?>