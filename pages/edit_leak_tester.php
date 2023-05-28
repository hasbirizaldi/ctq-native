<?php  

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM leak_tester WHERE id=$id");
$show = mysqli_fetch_assoc($data);

?>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-primary shadow-lg">
            <div class="card-header">
                <h3 class="card-title">Ubah Data Leak Tester</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="action/edit_leak_tester.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl">Tanggal</label>
                                <input type="hidden" name="id" value="<?=$show['id']?>">
                                <input type="hidden" name="gambarLama" value="<?=$show['gambar']?>">
                                <input type="date" class="form-control" value="<?=$show['tgl']?>" id="tgl" name="tgl"
                                    required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="pp">No. Batch</label>
                                <input type="text" class="form-control" value="<?=$show['pp']?>" id="pp" name="pp"
                                    placeholder="No .Batch" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_operator">Nama Operator</label>
                                <input type="text" class="form-control" value="<?=$show['nama_operator']?>"
                                    id="nama_operator" name="nama_operator" placeholder="Nama Operator" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="shift">Shift</label>
                                <input type="text" class="form-control" value="<?=$show['shift']?>" id="shift"
                                    name="shift" placeholder="Shift" required>
                            </div>
                            <div class="form-group">
                                <label for="oke">Barang OK</label>
                                <input type="text" class="form-control" value="<?=$show['oke']?>" id="oke" name="oke"
                                    placeholder="Barang OK" required>
                            </div>
                            <div class="form-group">
                                <label for="reject">Barang Reject</label>
                                <input type="text" class="form-control" value="<?=$show['reject']?>" id="reject"
                                    name="reject" placeholder="Barang Reject" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label><br>
                        <img src="leak_tester/<?=$show['gambar']?>" alt="" style="width:500px; height:250px">
                        <input type="file" class="form-control" id="gambar" name="gambar" placeholder="Barang gambar">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" name="ubah">Ubah</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>