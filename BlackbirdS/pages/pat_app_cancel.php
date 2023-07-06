<?php
require_once("./../includes/db_conect.php");
$id = $_GET['c'];

$s = "DELETE FROM appointment WHERE app_id = $id";
$q=$conn->query($s);
if($q){
    header("location: pat_appoint_view.php");
}
?>