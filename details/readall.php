<?php
include_once "../config.php";
include "../core/Database.php";
include "../core/reginfo.php";

use Core\Data\Database;
use Core\Data\Student;

header('Content-type: application/json');

$db=new Database();
$student=new Student($db->connect());

echo $student->getRecords();


?>