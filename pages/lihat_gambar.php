<?php  

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM leak_tester WHERE id=$id");
$show = mysqli_fetch_assoc($data);

?>
<div class="row justify-content-center">
    <div class="col-md-8">
        <!-- Default box -->
        <div class="card">
            <div class="card-header bg-secondary">
                <h3 class="card-title">Detail Data</h3>
            </div>
            <div class="card-body">
                <img src="leak_tester/<?=$show['gambar']?>" style="width:800px; height:600px" alt="">
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <a href="index.php?p=leak_tester">Kembali</a>
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
        <!-- /.card -->
    </div>
</div>