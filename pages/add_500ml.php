<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-primary shadow-lg">
            <div class="card-header">
                <h3 class="card-title">Tambah Data 500ML</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="action/add_500ml.php" method="post">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl">Tanggal</label>
                                <input type="date" class="form-control" id="tgl" name="tgl" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="jam">Jam</label>
                                <input type="time" class="form-control" id="jam" name="jam" required>
                            </div>
                            <div class="form-group">
                                <label for="pp">No. Batch</label>
                                <input type="text" class="form-control" id="pp" name="pp" placeholder="No .Batch"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="cav1">Cavity 1</label>
                                <input type="text" class="form-control" id="cav1" name="cav1" placeholder="Cavity 1"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="cav2">Cavity 2</label>
                                <input type="text" class="form-control" id="cav2" name="cav2" placeholder="Cavity 2"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cav3">Cavity 3</label>
                                <input type="text" class="form-control" id="cav3" name="cav3" placeholder="Cavity 3"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="cav4">Cavity 4</label>
                                <input type="text" class="form-control" id="cav4" name="cav4" placeholder="Cavity 4"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="cav5">Cavity 5</label>
                                <input type="text" class="form-control" id="cav5" name="cav5" placeholder="Cavity 5"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="cav6">Cavity 6</label>
                                <input type="text" class="form-control" id="cav6" name="cav6" placeholder="Cavity 6"
                                    required>
                            </div>
                        </div>
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