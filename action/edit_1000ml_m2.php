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
    $cav21 = $_POST['cav21'];
    $cav22 = $_POST['cav22'];
    $cav23 = $_POST['cav23'];
    $cav24 = $_POST['cav24'];
    $cav25 = $_POST['cav25'];


    mysqli_query($conn, "UPDATE 1000_mold2 SET
    
                        tgl = '$tgl',    
                        jam = '$jam',    
                        pp = '$pp',    
                        cav21 = '$cav21',    
                        cav22 = '$cav22',    
                        cav23 = '$cav23',    
                        cav24 = '$cav24',    
                        cav25 = '$cav25'
                        
                        WHERE id = '$id'
                            ");
    echo "<script>

    alert('Data tanggal $tgl berhasil diubah');
    document.location.href = '../index.php?p=1000ml_m2';

    </script>";
}else{
    echo "<script>

    alert(`Data gagal diubah!');
    document.location.href = '../index.php?p=1000ml_m2';

    </script>";
}

?>