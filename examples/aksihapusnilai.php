<?php
include "config.php";
$idnilai = $_GET['idnilai'];
if(isset($idnilai)){
        $sql ="DELETE FROM penilaian WHERE  idnilai=$idnilai";
        $a = $koneksi->query($sql);
    if($a === true){
            ?>
                <script language="JavaScript">
                    alert('Good! Hapus data penilaian berhasil ...');
                    document.location='./tables.php';
                </script>
            <?php
   }else{
            echo "<div><b>Oops!</b> 404 Error Server.</div> " . mysqli_error($koneksi);
   }
}
?>