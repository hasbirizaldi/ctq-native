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
    $cav21 = $_POST['cav21'];
    $cav22 = $_POST['cav22'];
    $cav23 = $_POST['cav23'];
    $cav24 = $_POST['cav24'];
    $cav25 = $_POST['cav25'];
    
    mysqli_query($conn, "INSERT INTO 1000_mold2 VALUES ('', '$tgl', '$jam', '$pp', '$cav21', '$cav22', '$cav23', '$cav24', '$cav25')");

    echo "<script>

    alert('Data berhasil ditambahkan');
    document.location.href = '../index.php?p=1000ml_m2';

    </script>";
}else{
    echo "<script>

    alert('Data gagal ditambahkan!');
    document.location.href = '../index.php?p=1000ml_m2';

    </script>";
}

?>