<?php
include_once "../config.php";
include "../core/Database.php";
include "../core/reginfo.php";

use Core\Data\Database;
use Core\Data\Student;

header('Content-type: application/json');

$db=new Database();
$student=new Student($db->connect());

$student->time=$_GET['time']??null;
$student->fname=$_GET['fname']??null;
$student->lname=$_GET['lname']??null;
$student->username=$_GET['username']??null;
$student->password=$_GET['password']??null;
$student->email=$_GET['email']??null;
$student->mobile=$_GET['mobile']??null;
$student->college=$_GET['college']??null;
$student->dept=$_GET['dept']??null;
$student->lang=$_GET['lang']??null;



$response=array(
	"status"=>"Failed",
	"message"=>"Error in updating the record"
);

if($student->insert()>0){
	$response['status']="Success";
	$response['message']="Record Updated";
	
}

echo json_encode($response);
?>