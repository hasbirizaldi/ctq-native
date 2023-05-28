<?php  

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM 1000_mold1 WHERE id=$id");
$show = mysqli_fetch_assoc($data);

?>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-success shadow-lg">
            <div class="card-header">
                <h3 class="card-title">Edit Data 1000ML Mold 1</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="action/edit_1000ml_m1.php" method="post">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl">Tanggal</label>
                                <input type="hidden" name="id" value="<?=$show['id']?>">
                                <input type="date" value="<?=$show['tgl']?>" class="form-control" id="tgl" name="tgl"
                                    required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="jam">Jam</label>
                                <input type="time" value="<?=$show['jam']?>" class="form-control" id="jam" name="jam"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="pp">No. Batch</label>
                                <input type="text" value="<?=$show['pp']?>" class="form-control" id="pp" name="pp"
                                    placeholder="No .Batch" required>
                            </div>
                            <div class="form-group">
                                <label for="cav11">Cavity 11</label>
                                <input type="text" value="<?=$show['cav11']?>" class="form-control" id="cav11"
                                    name="cav11" placeholder="Cavity 11" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cav12">Cavity 12</label>
                                <input type="text" value="<?=$show['cav12']?>" class="form-control" id="cav12"
                                    name="cav12" placeholder="Cavity 12" required>
                            </div>
                            <div class="form-group">
                                <label for="cav13">Cavity 13</label>
                                <input type="text" value="<?=$show['cav13']?>" class="form-control" id="cav13"
                                    name="cav13" placeholder="Cavity 13" required>
                            </div>
                            <div class="form-group">
                                <label for="cav4">Cavity 14</label>
                                <input type="text" value="<?=$show['cav14']?>" class="form-control" id="cav14"
                                    name="cav14" placeholder="Cavity 14" required>
                            </div>
                            <div class="form-group">
                                <label for="cav5">Cavity 15</label>
                                <input type="text" value="<?=$show['cav15']?>" class="form-control" id="cav15"
                                    name="cav15" placeholder="Cavity 15" required>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-success" name="ubah">Ubah</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>