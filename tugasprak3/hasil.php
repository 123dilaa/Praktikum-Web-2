<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$skill = $_POST['skill'];
$skor = 0;
$domisili =$_POST['domisili'];
$email = $_POST['email'];


echo "NIM : " . $nim . "<br>";
echo "Nama : " . $nama . "<br>";
echo "Jenis Kelamin : " . $jk . "<br>";
echo "Program Studi : " . $prodi . "<br>";
echo "Skill : ";
foreach ($skill as $s) {
    echo $s . ",";
}
echo "<br> Skor : " . $skor . "<br>";
echo "Domisili : " . $domisili . "<br>";
echo "Email : " . $email;



?>