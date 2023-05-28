<?php  

session_start();

if(!isset($_SESSION['masuk'])){
    header("Location: ../login.php");
    exit;
}

require '../koneksi.php';

if(isset($_POST['ubah'])){
    $id =$_POST['id'];

    $tgl = $_POST['tgl'];
    $jam = $_POST['jam'];
    $pp = $_POST['pp'];
    $cav1 = $_POST['cav1'];
    $cav2 = $_POST['cav2'];
    $cav3 = $_POST['cav3'];
    $cav4 = $_POST['cav4'];
    $cav5 = $_POST['cav5'];
    $cav6 = $_POST['cav6'];
    $cav7 = $_POST['cav7'];
    $cav8 = $_POST['cav8'];
    $cav9 = $_POST['cav9'];

    mysqli_query($conn, "UPDATE 100ml SET
    
                        tgl = '$tgl',    
                        jam = '$jam',    
                        pp = '$pp',    
                        cav1 = '$cav1',    
                        cav2 = '$cav2',    
                        cav3 = '$cav3',    
                        cav4 = '$cav4',    
                        cav5 = '$cav5',    
                        cav6 = '$cav6',    
                        cav7 = '$cav7',    
                        cav8 = '$cav8',    
                        cav9 = '$cav9'

                        WHERE id = '$id'
                            ");
    echo "<script>

    alert('Data tanggal $tgl berhasil diubah');
    document.location.href = '../index.php?p=100ml';

    </script>";
}else{
    echo "<script>

    alert(`Data gagal diubah!');
    document.location.href = '../index.php?p=100ml';

    </script>";
}

?>