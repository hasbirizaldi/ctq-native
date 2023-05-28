<?php  

$data = mysqli_query($conn, "SELECT * FROM leak_tester");
$no = 1;
?>
<div class="row justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-secondary">
                <h3 class="card-title font-weight-bold">
                    Data Leak Tester
                </h3>
            </div>
            <div class="card-body table-responsive mb-1">
                <a href="index.php?p=add_leak_tester" class="btn bg-gradient-primary btn-sm position-relative mb-1"><i
                        class="nav-icon far fa-plus-square"></i> Tambah Data</a>
                <table id="example1" class="table table-bordered table-striped mt-3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th colspan="2" class="text-center">Action</th>
                            <th>Tanggal</th>
                            <th>No. Batch</th>
                            <th>Nama Operator</th>
                            <th>Shift</th>
                            <th>Barang OK</th>
                            <th>Barang Reject</th>
                            <th>Gambar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  foreach($data as $d): ?>
                        <tr>
                            <td><?=$no++?></td>
                            <td class="text-center">
                                <a href="index.php?p=edit_leak_tester&id=<?= $d['id']?>"
                                    class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                            </td>
                            <td class="text-center">
                                <a onclick="return confirm('Apakah anda yakin akan menghapus?')"
                                    href="action/delete_leak_tester.php?id=<?= $d['id']?>&tgl=<?=$d['tgl']?>"
                                    class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                            <td><?=$d['tgl']?></td>
                            <td><?=$d['pp']?></td>
                            <td><?=$d['nama_operator']?></td>
                            <td><?=$d['shift']?></td>
                            <td><?=$d['oke']?></td>
                            <td><?=$d['reject']?></td>
                            <td>
                                <a href="index.php?p=lihat_gambar&id=<?=$d['id']?>" class="btn btn-sm btn-warning"><i
                                        class="fas fa-eye"></i> Lihat Gambar</a>
                            </td>
                        </tr>
                        <?php  endforeach ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>