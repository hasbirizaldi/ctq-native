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
    $cav1 = $_POST['cav1'];
    $cav2 = $_POST['cav2'];
    $cav3 = $_POST['cav3'];
    $cav4 = $_POST['cav4'];
    $cav5 = $_POST['cav5'];
    $cav6 = $_POST['cav6'];
    
    mysqli_query($conn, "INSERT INTO 500ml VALUES ('', '$tgl', '$jam', '$pp', '$cav1', '$cav2', '$cav3', '$cav4', '$cav5', '$cav6')");

    echo "<script>

    alert('Data berhasil ditambahkan');
    document.location.href = '../index.php?p=500ml';

    </script>";
}else{
    echo "<script>

    alert('Data gagal ditambahkan!');
    document.location.href = '../index.php?p=500ml';

    </script>";
}

?>