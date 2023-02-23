<?php
include "config.php";
$alternatif = $_POST['alternatif'];//harus diubah ke idkriteria dulu
$bobot=$_POST['bobot'];
$skala=$_POST['skala'];
$kode1=$_POST['kode1'];
$sql="INSERT INTO penilaian (idnilai,idbobot,idalternatif,idskala) values ('".$kode1."','".$bobot."',(select idalternatif from alternatif where nmalternatif='$alternatif'),(select idskala from skala where nmskala='$skala'))";
$a=$koneksi->query($sql);
if($a === true){
?>
                <script language="JavaScript">
                    alert('Good! Input data penilaian berhasil ...');
                    document.location='./formpenilaian.php';
                </script>
            <?php
}else{
echo "<div><b>Oops!</b> 404 Error Server.</div> " . mysqli_error($koneksi);
}
?>