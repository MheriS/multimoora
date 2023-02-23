<?php 
$kode = $_POST['kode1'];

            $name =$_POST['name'];
            include "config.php";
            $sql ="UPDATE `alternatif` SET `nmalternatif`='$name' WHERE  `idalternatif`='$kode';";
            $a=$koneksi->query($sql);
            if($a === true){
            ?>
                <script language="JavaScript">
                    alert('Good! Edit Data Alternatif berhasil ...');
                    document.location='./tables.php';
                </script>
            <?php
            }else{
                echo "<div><b>Oops!</b> 404 Error Server.</div> " . mysqli_error($koneksi);
            }
?>