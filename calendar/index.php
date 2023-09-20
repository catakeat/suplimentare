<?php
include('../db_connect.php');
include 'calendar_nou.php';
require_once 'functions.php';

$libere = zileLibere();
$month = $_GET['month'];
$year = $_GET['year'];
$calendar = new Calendar($libere,$month,$year);
// $calendar = new Calendar($month,$year);
echo $calendar->show();
?>