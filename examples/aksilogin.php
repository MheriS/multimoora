<?php
session_start();
include "config.php";
$msg = '';
if (isset($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $email = mysqli_real_escape_string($koneksi,$_POST['email']);
    $psw = mysqli_real_escape_string($koneksi,$_POST['password']);
    $sql="SELECT password, email from login where email = '$email' and password = '$psw'";

    $a=$koneksi->query($sql);
    if (mysqli_num_rows($a) > 0) {
        $data = $a-> fetch_array();
//        if ($data['password'] == $psw)
        $_SESSION['username'] = $data['nama'];
        $_SESSION['status'] = "login";
//                  $_SESSION['valid'] = true;
//                  $_SESSION['timeout'] = time();
//                  $user = 'username';
                  
            ?>
                <script language="JavaScript">
                    alert('Good! Login berhasil ...');
                    document.location='./user.php?nama= <?php echo $data['email']; ?>';
                </script>
            <?php
    }
}
if(isset($eror)); ?>
<p style="color: red; font-style: italic;">ID / Password Salah</p>
<? 
endif;?>