<?php
$conn = new mysqli("localhost","root","","bbirdshospital");
$id = $_GET['u'];

$s = "DELETE FROM patient WHERE pat_id = $id";
$q=$conn->query($s);
if($q){
    header("location: patient_manage.php");
}
?>