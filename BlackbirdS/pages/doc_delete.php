<?php
require_once("./../includes/db_conect.php");
$id = $_GET['u'];

$s = "DELETE FROM doctor WHERE id = $id";
$q=$conn->query($s);
if($q){
    header("location: doc_manage.php");
}
?>