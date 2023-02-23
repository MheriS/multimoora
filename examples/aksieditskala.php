<?php 
$kode = $_POST['kode1'];

            $name =$_POST['name'];
$value=$_POST['value'];
            include "config.php";
            $sql ="UPDATE skala SET nmskala='$name',value=$value WHERE idskala = $kode;";
            $a=$koneksi->query($sql);
            if($a === true){
            ?>
<script language="JavaScript">
    alert('Good! Edit Data Skala berhasil ...');
    document.location = './tables.php';

</script>
<?php
            }else{
                echo "<div><b>Oops!</b> 404 Error Server.</div> " . mysqli_error($koneksi);
            }
?>
