<?php  

session_start();

if(!isset($_SESSION['masuk'])){
    header("Location: ../login.php");
    exit;
}

require '../koneksi.php';

if(isset($_POST['simpan'])){
    $tgl = $_POST['tgl'];
    $jam = $_POST['jam'];
    $pp = $_POST['pp'];
    $cav11 = $_POST['cav11'];
    $cav12 = $_POST['cav12'];
    $cav13 = $_POST['cav13'];
    $cav14 = $_POST['cav14'];
    $cav15 = $_POST['cav15'];
    
    mysqli_query($conn, "INSERT INTO 1000_mold1 VALUES ('', '$tgl', '$jam', '$pp', '$cav11', '$cav12', '$cav13', '$cav14', '$cav15')");

    echo "<script>

    alert('Data berhasil ditambahkan');
    document.location.href = '../index.php?p=1000ml_m1';

    </script>";
}else{
    echo "<script>

    alert('Data gagal ditambahkan!');
    document.location.href = '../index.php?p=1000ml_m1';

    </script>";
}

?>