<?php 
class DBConnection{  
   private $hostname ='localhost';
   private $usename ='root';
   private $password = '';
   private $databasename ='cv_cua_a';
   var $myConnection ;

   public function connection
   $connect = mysqli_connect($this->hostname,$this->usename,$this->password,$this->databasename) ;

    if (!$connect) {
        echo 'kết nối thành công !';
    }
    else{
        echo 'kết nối thành công !';
    }
$db1 = new DBConnection ();
?>