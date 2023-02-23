<?php
include "config.php";
$nama = $_POST['name'];
$value = $_POST['value'];
$kode1 = $_POST['kode1'];

$sql="INSERT INTO skala (idskala, nmskala, value) values ('".$kode1."','".$nama."','".$value."')";
$a=$koneksi->query($sql);
if($a === true){
?>
                <script language="JavaScript">
                    alert('Good! Input data Skala berhasil ...');
                    document.location='./formskala.php';
                </script>
            <?php
}else{
echo "<div><b>Oops!</b> 404 Error Server.</div> " . mysqli_error($koneksi);
}
?>