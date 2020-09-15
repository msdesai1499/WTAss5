<?php
namespace Core\Data;

class Student{
	public $time=null;
	public $fname=null;
	public $lname=null;
	public $username=null;
	public $password=null;
	public $email=null;
	public $mobile=null;
	public $college=null;
	public $dept=null;
	public $lang=null;

	private $table_name="registeration";

	private $conn=null;

	public function __construct($conn)
	{

		$this->conn=$conn;
	}

	public function insert ()
	{
		$sql="INSERT INTO {$this->table_name}
		VALUES(:timelimit,:fname,:lname,:username,:pass,:email,:mobile,:college,:dept,:lang)";
		
$stmt=$this->conn->prepare($sql);
$stmt->bindParam(':timelimit',$this->time);
$stmt->bindParam(':fname',$this->fname);
$stmt->bindParam(':lname',$this->lname);
$stmt->bindParam(':username',$this->username);
$stmt->bindParam(':pass',$this->password);
$stmt->bindParam(':email',$this->email);
$stmt->bindParam(':mobile',$this->mobile);
$stmt->bindParam(':college',$this->college);
$stmt->bindParam(':dept',$this->dept);
$stmt->bindParam(':lang',$this->lang);

$stmt->execute();
echo $stmt->rowCount();
return $stmt->rowCount();
}

public function getRecords()
	{
		$sql="SELECT * FROM {$this->table_name}";

		$stmt=$this->conn->prepare($sql);
		$stmt->execute();
		if ($stmt->rowCount() > 0) {
            $student_arr = array();

            while($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $student_arr[] = $row;
            }

            return json_encode($student_arr);

         
        }
		
	}
}

?>