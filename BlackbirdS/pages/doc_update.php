<?php
    require_once("./../includes/db_conect.php");
    $id = $_GET['d'];
    $s = "SELECT * FROM doctor WHERE id = $id";
    $q=$conn->query($s);
    $data=$q->fetch_assoc();

        if (isset($_POST['update'])){

            $username = $_POST['username']??null;
            $password = $_POST['password']??null;
            $email = $_POST['email']??null;

            $q=$conn->query("UPDATE doctor SET username='$username', password='$password',email='$email' WHERE id =$id");

            if($q){
                header("location: doc_manage.php");
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
    <form action="" method="post" class=" form-hover" style="color: white;"><h4 style="border: 1px solid gray; background-color: white; color: #052d61; text-align: center;">Update Information Here</h4>
        <div class="form-row text-dark">
            <div class="form-group">
                <label for="inputEmail4"> Doctor Name :</label>
                <input type="text" name="username" value="<?=$data['username']?>" class="form-control" id="inputEmail4" placeholder="username">
            </div>
            <div class="form-group">
                <label for="inputPassword4">Password :</label>
                <input type="text" name="password" value="<?=$data['password']?>" class="form-control" id="inputPassword4" placeholder="password">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="inputEmail4">Email :</label>
                <input type="text" value="<?=$data['email']?>" name="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div> <br>
        <button type="submit" name="update" class="btn btn-primary">Update Doctor</button>
    </form>
    </div>
<!-- End Form Here -->

<!------------------ Please End input Here All------------------------------------------->               
        </div>
    </div>
</div>
<?php getFooter(); ?>