<?php
session_start();
include 'config/koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="user" placeholder="Masukkan Username" /><br><br>
    <input type="password" name="pass" placeholder="Masukkan Password" /><br><br>
    <input type="submit" name="login" value="login" /><br>
    </form>

    <?php
    if(isset($_POST['login'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $data_user = mysqli_query($conn, "select * from user where username = '$user' and password = '$pass'");
        $r = mysqli_fetch_array($data_user);
        $level = $r['level'];
        $id_usr = $r['id_user'];
        $row = mysqli_num_rows($data_user);
        if($row > 0){
            if($level == 'prakom'){
                header("location:prakom/home_prakom.php?id_user=$id_usr");
            }
            elseif($level == 'sekretariat penilai'){
                header("location:sekretariat_penilai/home_sekretariat.php?id_user=$id_usr");
            }elseif($level == 'penilai'){
                header('location:penilai/home_penilai.php');
            }
        }
       
    }
    ?>

</body>
</html>