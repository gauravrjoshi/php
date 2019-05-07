<?php 
//json_encode()
//json_decode()

echo "<h1>1) PHP json_encode</h1>";
$arr=array('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);
echo json_encode($arr);
echo "</br></br>";

$student=array('name'=>'John Doe','email'=>'jdk5440@gmail.com','mobile'=>'0123456789');
echo json_encode($student);
echo "</br></br>";

echo "<h1>2) PHP json_decode</h1>";
$json='{"a":1,"b":2,"c":3,"d":4,"e":5}';
echo "<pre>";
print_r(json_decode($json,true));////true means returned object will be converted into associative array  
echo "</pre>";
echo "</br></br>";

$studentJson='{"name":"John Doe","email":"jdk5440@gmail.com","mobile":"0123456789"}';
echo "<pre>";
print_r(json_decode($studentJson,true));
echo "</pre>";
echo "</br></br>";
?>