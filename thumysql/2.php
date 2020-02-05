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
$sql .= " INSERT INTO user (name, mail ,phone) VALUES ('duc', 'nguyenquangduc@mail.com', '0565101365');";
$sql .= " INSERT INTO user (name, mail ,phone) VALUES ('nguyen', 'nguyenquangnguyen@mail.com', '05365466986');";
$sql .= " INSERT INTO user (name, mail, phone) VALUES ('dat', 'nguyenquangdat@mail.com', '02556356123');";
$sql .= " INSERT INTO user (name, mail, phone) VALUES ('tuyen', 'hoancongtuyen@mail.com', '01234567890');";
$sql .= " INSERT INTO user (name, mail, phone) VALUES ('hien', 'nguyenthihien@mail.com', '030099036');";

$sql = " INSERT INTO skills (name, skills, lever) VALUES ('duc' ,'medium', '30');";
$sql .= " INSERT INTO skills (name, skills, lever) VALUES ('nguyen', 'rather', '40');";
$sql .= " INSERT INTO skills (name, skills, lever) VALUES ('dat' ,'good', '50');";
$sql .= " INSERT INTO skills (name, skills, lever) VALUES ('tuyen', 'rather', '40');";
$sql .= " INSERT INTO skills (name, skills, lever) VALUES ('hien' ,'good', '50');";

if ($connect->multi_query($sql) == TRUE) {
  echo "thanh cong";
}
else {
    echo $connect ->error;
}
$sql ="SELECT*FROM user;";
$row= $connect
$sql = "SELECT * FROM user WHERE user.name ='duc';";

      $sql ="SELECT name FROM user"
$sql = "UPDATE user SET name ='duc' WHERE ID = 23;";
$sql = "DELETE FROM user WHERE ID = 25;";

$result = $connect->query($sql);
$rows = mysqli_fetch_all($result);
var_dump($rows);
?>