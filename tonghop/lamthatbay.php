hojc  được gì 
học được và áp dụng 
đề mô 
lơp của 1 <i class=
thuộc tính cho đối tượng
<?Php  

        $_SESSION ['user'] = $username;
        $_SESSION['pass'] = $pass;
        echo "Bạn đã đăng nhập Thành Công";
        // header ("location: config.php");
        var_dump($_SESSION);
        die();
    }else {
        echo "Đăng nhập tài khoản thất bại";
        $_SESSION ['error'] =  "Đăng nhập tài khoản thất bại";
        var_dump($_SESSION);
        die();
        header ("location: dangnhap.php");
    } 

?>