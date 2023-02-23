<?php 
$alternatif = $_POST['alternatif'];//harus diubah ke idkriteria dulu
$bobot=$_POST['bobot'];
$skala=$_POST['skala'];
$kode1=$_POST['kode1'];
            include "config.php";
            $sql ="UPDATE penilaian SET idbobot=$bobot,idalternatif=(select idalternatif from alternatif where nmalternatif='$alternatif'),idskala=(select idskala from skala where nmskala='$skala') WHERE idnilai = $kode1;";
            $a=$koneksi->query($sql);
            if($a === true){
            ?>
<script language="JavaScript">
    alert('Good! Edit Data Penilaian berhasil ...');
    document.location = './tables.php';

</script>
<?php
            }else{
                echo "<div><b>Oops!</b> 404 Error Server.</div> " . mysqli_error($koneksi);
            }
?>