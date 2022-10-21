<?php 
    session_start();
    $servername = "localhost";
    $username = "root"; //ชื่อผู้ใช้
    $password = "root"; //รหัสผ่าน
    $dbname = "berlikrit";// ชื่อฐานข้อมูล
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(isset($_POST['action']) && $_POST['action'] == "login"){
        $query = mysqli_query($conn,"SELECT * FROM tb_user WHERE email = '$_POST[email]'");
        if(mysqli_num_rows($query) == 1){
            $check_pwd = mysqli_query($conn,"SELECT * FROM tb_user WHERE password = '$_POST[password]'");
            if(mysqli_num_rows($check_pwd) == 1){
                $_SESSION['login'] = true;
                $_SESSION['email'] = $_POST['email'];
                echo 'login';
            }else{
                echo 'passworderror';
            }
        }else{
            echo 'emailerror';
        }
    }
?>