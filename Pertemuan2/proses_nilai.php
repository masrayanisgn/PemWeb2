<?php 
if(isset($_GET['submit'])) {
$nama = $_GET['nama']; 
$matkul = $_GET['matkul'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$praktikum = $_GET['praktikum'];
$avarage = ($uts + $uas + $praktikum)/3;


    echo "Nama : $nama <br>";
    echo "Matkul Kuliah : $matkul <br>";
    echo "Nilai UTS : $uts<br>";
    echo "Nilai UAS: $uas <br>";
    echo "Nilai Praktikum  : $praktikum";

    echo "<br> <br>";
    echo "Nilai rata rata : ". round($avarage,2)."<br>";
    echo "Grade Nilai:";
} else {
    echo "Tidak ada data!";
}
?>