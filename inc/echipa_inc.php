<?php
require_once('db_connect.php');

$query = "select * from access_entitati left join entitati on access_entitati.entitate_id=entitati.id where user_id='" . $_SESSION['id'] . "'";
$result = $conn->query($query);
while ($row = $result->fetch_assoc()) {
    echo $row['entitate_id'] . " " . $row['nume'];
    $entitate = $row['entitate_id'];
    $q = "select * from users where entitate='$entitate'";

    $res = $conn->query($q);
    $column_names = ['id', 'username', 'entitate'];
    $extracolumns = ["operatie1" => "Operatie 1", "operatie2" => "Operatie 2"];
    makeTable($res, $column_names, $extracolumns);
}
?>