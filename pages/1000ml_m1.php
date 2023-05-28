<?php  

$data = mysqli_query($conn, "SELECT * FROM 1000_mold1");
$no = 1;
?>
<div class="row justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-secondary">
                <h3 class="card-title font-weight-bold">
                    Data 1000ML Mold 1
                </h3>
            </div>
            <div class="card-body table-responsive mb-1">
                <a href="index.php?p=add_1000ml_m1" class="btn bg-gradient-primary btn-sm position-relative mb-1"><i
                        class="nav-icon far fa-plus-square"></i> Tambah Data</a>
                <table id="example1" class="table table-bordered table-striped mt-3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th colspan="2" class="text-center">Action</th>
                            <th>Tanggal</th>
                            <th>No. Batch</th>
                            <th>Cavity 11</th>
                            <th>Cavity 12</th>
                            <th>Cavity 13</th>
                            <th>Cavity 14</th>
                            <th>Cavity 15</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  foreach($data as $d): ?>
                        <tr>
                            <td><?=$no++?></td>
                            <td class="text-center">
                                <a href="index.php?p=edit_1000ml_m1&id=<?= $d['id']?>" class="btn btn-sm btn-success"><i
                                        class="fas fa-edit"></i></a>
                            </td>
                            <td class="text-center">
                                <a onclick="return confirm('Apakah anda yakin akan menghapus?')"
                                    href="action/delete_1000ml_m1.php?id=<?= $d['id']?>&tgl=<?=$d['tgl']?>"
                                    class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                            <td><?=$d['tgl']?></td>
                            <td><?=$d['pp']?></td>
                            <td><?=$d['cav11']?></td>
                            <td><?=$d['cav12']?></td>
                            <td><?=$d['cav13']?></td>
                            <td><?=$d['cav14']?></td>
                            <td><?=$d['cav15']?></td>
                        </tr>
                        <?php  endforeach ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>