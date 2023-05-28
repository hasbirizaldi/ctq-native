<?php  

session_start();

if(!isset($_SESSION['masuk'])){
    header("Location: ../login.php");
    exit;
}

require '../koneksi.php';

$id = $_GET['id'];
$tgl = $_GET['tgl'];

mysqli_query($conn, "DELETE FROM 1000_mold1 WHERE id='$id'");

echo "<script>

    alert('Data dengan tanggal $tgl telah dihapus!');
    document.location.href = '../index.php?p=1000ml_m1';

    </script>";
?>