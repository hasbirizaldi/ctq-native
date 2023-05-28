<?php  

session_start();

if(!isset($_SESSION['masuk'])){
    header("Location: ../login.php");
    exit;
}

require '../koneksi.php';

function upload(){
    $namaFile= $_FILES['gambar']['name'];
    $ukuran=$_FILES['gambar']['size'];
    $error=$_FILES['gambar']['error'];
    $tmpName=$_FILES['gambar']['tmp_name'];

    // cek apakah ada gambar yang diupoad
    if($error===4){
        echo "<script>
                    alert('Pilih gambar terlebih dahulu!');
            </script>";
            return false;
    }

    // cek apakah yang diuplaod adalah gambar jpg/png/dan lain-lain
    $ekstensiGambarValid=['jpg','jpeg','png'];
    $ekstensiGambar=explode('.',$namaFile);
    $ekstensiGambar=strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
        alert('Yang anda upload bukan gambar!');
            </script>";
        return false;
    }

    // cek jika ukuran gambar terlalu besar
    if($ukuran>500000){
        echo "<script>
        alert('Ukuran gambar terlalu besar!');
        </script>";
        return false;
    }
    // gambar lolos pengecekan, gambar siap diuplaod
    // generate nama gambar
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, '../leak_tester/' . $namaFileBaru);

    return $namaFileBaru;
}
if(isset($_POST['ubah'])){
    $id = $_POST['id'];
    $tgl = $_POST['tgl'];
    $pp = $_POST['pp'];
    $nama_operator = $_POST['nama_operator'];
    $shift = $_POST['shift'];
    $oke = $_POST['oke'];
    $reject = $_POST['reject'];
    $gambarLama = $_POST['gambarLama'];

    if($_FILES['gambar']['error']===4){
        $gambar = $gambarLama;
    }else{
        $gambar = upload();
    }
    
    mysqli_query($conn, "UPDATE leak_tester SET
                    
                    tgl= '$tgl',
                    pp = '$pp',
                    nama_operator = '$nama_operator',
                    shift = '$shift',
                    oke = '$oke',
                    reject = '$reject',
                    gambar = '$gambar' WHERE id = $id;
                    
                    ");

    echo "<script>

    alert('Data berhasil diubah');
    document.location.href = '../index.php?p=leak_tester';

    </script>";
}else{
    echo "<script>

    alert('Data gagal diubah!');
    document.location.href = '../index.php?p=leak_tester';

    </script>";
}

?>