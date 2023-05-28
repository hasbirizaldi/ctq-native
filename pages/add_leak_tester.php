<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-primary shadow-lg">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Leak Tester</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="action/add_leak_tester.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl">Tanggal</label>
                                <input type="date" class="form-control" id="tgl" name="tgl" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="pp">No. Batch</label>
                                <input type="text" class="form-control" id="pp" name="pp" placeholder="No .Batch"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="nama_operator">Nama Operator</label>
                                <input type="text" class="form-control" id="nama_operator" name="nama_operator"
                                    placeholder="Nama Operator" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="shift">Shift</label>
                                <input type="text" class="form-control" id="shift" name="shift" placeholder="Shift"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="oke">Barang OK</label>
                                <input type="text" class="form-control" id="oke" name="oke" placeholder="Barang OK"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="reject">Barang Reject</label>
                                <input type="text" class="form-control" id="reject" name="reject"
                                    placeholder="Barang Reject" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" placeholder="Barang gambar"
                            required>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>