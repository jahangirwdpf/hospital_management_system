<?php
require_once("./../includes/db_conect.php");
$id = $_GET['d'];

$s = "DELETE FROM appointment WHERE id = $id";
$q=$conn->query($s);
if($q){
    header("location: doc_appoint_view.php");
}
?>