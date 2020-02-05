
<?php 

$hostname ='localhost';
$usename ='root';
$password = '';
$databasename ='bist_training';
$connect = mysqli_connect($hostname,$usename,$password,$databasename) ;
if (!$connect) {
    exit ('kết nối không thành công !');
}
echo 'kết nối thành công!';
$sql .= " INSERT INTO dang_nhap (name, email ,password) VALUES ('duc', 'nguyenquangduc@mail.com', '0565101365');";
$sql .= " INSERT INTO dang_nhap (name, email ,password) VALUES ('nguyen', 'nguyenquangnguyen@mail.com', '05365466986');";
$sql .= " INSERT INTO dang_nhap (name, email, password) VALUES ('dat', 'nguyenquangdat@mail.com', '02556356123');";
$sql .= " INSERT INTO dang_nhap (name, email, password) VALUES ('tuyen', 'hoancongtuyen@mail.com', '01234567890');";
$sql .= " INSERT INTO dang_nhap (name, email, password) VALUES ('hien', 'nguyenthihien@mail.com', '030099036');";
var_dump();
// $sql = " INSERT INTO skills (name, skills, lever) VALUES ('duc' ,'medium', '30');";
// $sql .= " INSERT INTO skills (name, skills, lever) VALUES ('nguyen', 'rather', '40');";
// $sql .= " INSERT INTO skills (name, skills, lever) VALUES ('dat' ,'good', '50');";
// $sql .= " INSERT INTO skills (name, skills, lever) VALUES ('tuyen', 'rather', '40');";
// $sql .= " INSERT INTO skills (name, skills, lever) VALUES ('hien' ,'good', '50');";

if ($connect->multi_query($sql) == TRUE){
  echo "thanh cong";
}
else {
    echo $connect ->error;
}
$sql ="SELECT*FROM dang_nhap;";
$row = $connect;
$sql = "SELECT * FROM dang_nhap WHERE name ='duc';";

//       $sql ="SELECT name FROM user";
// $sql = "UPDATE user SET name ='duc' WHERE ID = 23;";
// $sql = "DELETE FROM user WHERE ID = 25;";
// class Database
// {

// var $host   = ""; //database server0
// var $pass     = ""; //database login password
// var $database = ""; //database name

// public $link;

// public function Database($host, $user, $pass, $database)
// {
//   $this->host=$host;
//   $this->user=$user;
//   $this->pass=$pass;
//   $this->database=$database;
  
// }

// public function connect()
  // {
  //   $this->link = new mysqli($this->host,$this->user,$this->pass,$this->database);
  //   if (mysqli_connect_error())
  //   {
  //     echo mysqli_connect_error();
  //     exit();
  //   }
  //   else
  //     return $this->link;
  // }
// }

$result = $connect->query($sql);
$rows = mysqli_fetch_all($result);
var_dump($rows);
?>