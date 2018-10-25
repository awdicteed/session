<?php
session_start();
echo 'Halo '.$_SESSION['nama'].' selamat datang :D';
session_destroy();
//Hasil nya tidak ada(kosong)
echo $_SESSION['nama'];
?>
