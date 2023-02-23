<?php 
$kode = $_POST['kode1'];

            $name =$_POST['kriteria'];
$value=$_POST['value'];
            include "config.php";
            $sql ="UPDATE `bobot` SET `idkriteria`=(select idkriteria from kriteria where nmkriteria='$name'),`value`=$value WHERE `idbobot` = $kode;";
            $a=$koneksi->query($sql);
            if($a === true){
            ?>
<script language="JavaScript">
    alert('Good! Edit Data Bobot berhasil ...');
    document.location = './tables.php';

</script>
<?php
            }else{
                echo "<div><b>Oops!</b> 404 Error Server.</div> " . mysqli_error($koneksi);
            }
?>
