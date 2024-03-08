<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $hobi = $_POST['hobi'];
    $ipk = $_POST['ipk'];

    // buat fungsi status
    function cekStatus($ipk) {
        if ($ipk >= 3 && $ipk <= 4) {
            return "Lolos";
        } else {
            return "Tidak Lolos";
        }
    }

    $status = cekStatus($ipk);
}

require_once 'header.php';

?>


    <?php
    echo "Nama : " . $nama . "<br>";
    echo "Jenis Kelamin : " . $jk . "<br>";
    echo "Hobi : " ;
    foreach ($hobi as $h) {
        echo $h . ",";
    }
    echo "<br> IPK : " . $ipk . "<br>";
    echo "<br> Status : " . $status;
    ?>
</div>

<?php

require_once 'foother.php';

?>