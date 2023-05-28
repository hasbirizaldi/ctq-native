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
    $cav11 = $_POST['cav11'];
    $cav12 = $_POST['cav12'];
    $cav13 = $_POST['cav13'];
    $cav14 = $_POST['cav14'];
    $cav15 = $_POST['cav15'];


    mysqli_query($conn, "UPDATE 1000_mold1 SET
    
                        tgl = '$tgl',    
                        jam = '$jam',    
                        pp = '$pp',    
                        cav11 = '$cav11',    
                        cav12 = '$cav12',    
                        cav13 = '$cav13',    
                        cav14 = '$cav14',    
                        cav15 = '$cav15'
                        
                        WHERE id = '$id'
                            ");
    echo "<script>

    alert('Data tanggal $tgl berhasil diubah');
    document.location.href = '../index.php?p=1000ml_m1';

    </script>";
}else{
    echo "<script>

    alert(`Data gagal diubah!');
    document.location.href = '../index.php?p=1000ml_m1';

    </script>";
}

?>