<?php
require_once("./../includes/db_conect.php");
if(isset($_POST['dep_id'])){
    $dep_id = $_POST['dep_id'];
    $sql = "SELECT * FROM doctor WHERE depert_id = $dep_id";
    $query = $conn->query($sql);
    $data = [];
    while($result = $query->fetch_assoc()){
        $data[] = $result;
    }
    $data = json_encode($data);
    echo $data;
}
?>