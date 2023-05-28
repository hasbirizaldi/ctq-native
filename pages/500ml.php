<?php  

$data = mysqli_query($conn, "SELECT * FROM 500ml");
$no = 1;
?>
<div class="row justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-secondary">
                <h3 class="card-title font-weight-bold">
                    Data 500ML
                </h3>
            </div>
            <div class="card-body table-responsive mb-1">
                <a href="index.php?p=add_500ml" class="btn bg-gradient-primary btn-sm position-relative mb-1"><i
                        class="nav-icon far fa-plus-square"></i> Tambah Data</a>
                <table id="example1" class="table table-bordered table-striped mt-3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th colspan="2" class="text-center">Action</th>
                            <th>Tanggal</th>
                            <th>No. Batch</th>
                            <th>Cavity 1</th>
                            <th>Cavity 2</th>
                            <th>Cavity 3</th>
                            <th>Cavity 4</th>
                            <th>Cavity 5</th>
                            <th>Cavity 6</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  foreach($data as $d): ?>
                        <tr>
                            <td><?=$no++?></td>
                            <td class="text-center">
                                <a href="index.php?p=edit_500ml&id=<?= $d['id']?>" class="btn btn-sm btn-success"><i
                                        class="fas fa-edit"></i></a>
                            </td>
                            <td class="text-center">
                                <a onclick="return confirm('Apakah anda yakin akan menghapus?')"
                                    href="action/delete_500ml.php?id=<?= $d['id']?>&tgl=<?=$d['tgl']?>"
                                    class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                            <td><?=$d['tgl']?></td>
                            <td><?=$d['pp']?></td>
                            <td><?=$d['cav1']?></td>
                            <td><?=$d['cav2']?></td>
                            <td><?=$d['cav3']?></td>
                            <td><?=$d['cav4']?></td>
                            <td><?=$d['cav5']?></td>
                            <td><?=$d['cav6']?></td>
                        </tr>
                        <?php  endforeach ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>