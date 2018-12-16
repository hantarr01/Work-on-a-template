<?php 

  if(isset($_POST['Name'])) $Name = $_POST['Name'];
  if (isset($_POST['Email'])) $Email = $_POST['Email'];
  if(isset($_POST['Phone'])) $Phone = $_POST['Phone'];
  if (isset($_POST['Message'])) $Message = $_POST['Message'];

  $host = '127.0.0.1';
  $db   = 'MaketBase';
  $user = 'root';
  $pass = '';
  $charset = 'utf8';

  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
  $opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);


$pattern_Name = "/[a-zA-Z]{3,50}/";
$pattern_Email = "/[a-zA-Z]{1,50}/";
$pattern_Phone = "/[0-9]{11,11}/";
if(!preg_match($pattern_Name, $Name)){
echo 'It`s not working';
}
else{
if(!preg_match($pattern_Email, $Email)){
echo 'It`s not working';
}
else{
if(!preg_match($pattern_Phone, $Phone)){
echo 'It`s not working';
}
else{

$mysql = "INSERT INTO  ContactUs (Name,Email,Phone,Message) VALUES(:Name,:Email,:Phone,:Message)";
$q = $pdo->prepare($mysql);
$q->execute(array(':Name'=>$Name,
                  ':Email'=>$Email,
                  ':Phone'=>$Phone,
                  ':Message'=>$Message));
}
}
}


 ?>

