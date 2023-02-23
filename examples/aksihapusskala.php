<?php
include "config.php";
$idskala = $_GET['idskala'];
if(isset($idskala)){
        $sql ="DELETE FROM skala WHERE  idskala=$idskala";
        $a = $koneksi->query($sql);
    if($a === true){
            ?>
                <script language="JavaScript">
                    alert('Good! Hapus data skala berhasil ...');
                    document.location='./tables.php';
                </script>
            <?php
   }else{
            echo "<div><b>Oops!</b> 404 Error Server.</div> " . mysqli_error($koneksi);
   }
}
?>