<?php 
$kode = $_POST['kode1'];

            $name =$_POST['kriteria'];
            include "config.php";
            $sql ="UPDATE `kriteria` SET `nmkriteria`='$name' WHERE  `idkriteria`='$kode';";
            $a=$koneksi->query($sql);
            if($a === true){
            ?>
<script language="JavaScript">
    alert('Good! Edit Data Kriteria berhasil ...');
    document.location = './tables.php';

</script>
<?php
            }else{
                echo "<div><b>Oops!</b> 404 Error Server.</div> " . mysqli_error($koneksi);
            }
?>
