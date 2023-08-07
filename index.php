<?php
include "koneksi.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="mt-3">
            <h1 class="text-center">Storage Management</h1>
        </div>

        <div class="card text-center mt-5">
            <div class="card-header text-white bg-primary">
                Data Barang Koperasi
            </div>

            <div class="card-body">
                <table class="table table-hover table-striped table-bordered">
                    <tr>
                        <th>No.</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Stock</th>
                        <th>Tanggal Masuk</th>
                        <th>Aksi</th>
                    </tr>

                    <?php
                    $no = 1;
                    $tampil = mysqli_query($connection, "SELECT * FROM tdatabarang ORDER BY id_barang");
                    while ($data = mysqli_fetch_array($tampil)) :
                    ?>

                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['kode_barang'] ?></td>
                        <td><?= $data['nama_barang'] ?></td>
                        <td><?= $data['harga_barang'] ?></td>
                        <td><?= $data['jml_barang'] ?></td>
                        <td><?= $data['tgl'] ?></td>
                        <td>
                            <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $no ?>">Ubah</a>
                            <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $no ?>">Hapus</a>
                        </td>
                    </tr>

                    <!-- modal Ubah start -->
                    <div class="modal fade" id="modalUbah<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data Barang</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="aksi.php">
                                        <input type="hidden" name="id_barang" value="<?= $data['id_barang']?>">

                                        <div class="mb-3">
                                            <label class="form-label">Kode Barang</label>
                                            <input type="text" class="form-control" name="tkode" value="<?= $data['kode_barang']?>" placeholder="masukkan kode barang!">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Nama Barang</label>
                                            <input type="text" class="form-control" name="tbarang" value="<?= $data['nama_barang']?>" placeholder="masukkan nama barang!">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Harga Barang</label>
                                            <input type="text" class="form-control" name="tharga" value="<?= $data['harga_barang']?>"placeholder="masukkan harga barang!">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Jumlah Barang</label>
                                            <input type="text" class="form-control" name="tstok" value="<?= $data['jml_barang']?>" placeholder="masukkan jumlah barang!">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Tanggal Masuk</label>
                                            <input type="date" class="form-control" name="tdate" value="<?= $data['tgl']?>">
                                        </div>

                                        </div>
                                            <div class="modal-footer">
                                                <button type="submit" name="bubah" class="btn btn-primary">Ubah</button>
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batalkan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>                    
                        </div>
                    </div>
                    <!-- modal Ubah end -->

                    <!-- modal Hapus start -->
                    <div class="modal fade" id="modalHapus<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Hapus Data</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="aksi.php">
                                        <input type="hidden" name="id_barang" value="<?= $data['id_barang']?>">

                                        <h5 class="text-center">Apakah Kamu ingin menghapus data???</h5>
                                        <span class="text-center text-danger"> <?= $data['kode_barang']?> - <?= $data['nama_barang']?></span>

                                        </div>
                                            <div class="modal-footer">
                                                <button type="submit" name="bhapus" class="btn btn-danger">Hapus</button>
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Batalkan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>                    
                        </div>
                    </div>
                    <!-- modal Hapus end -->

                    <?php
                    endwhile;
                    ?>

                </table>
            </div>
            <div class="card-footer text-body-secondary">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Tambah Data
                </button>
                <!-- Button trigger modal end -->
            </div>
        </div>
    </div>

    <!-- modal start -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data Barang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="aksi.php">

                        <div class="mb-3">
                            <label class="form-label">Kode Barang</label>
                            <input type="text" class="form-control" name="tkode" placeholder="masukkan kode barang!">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" name="tbarang" placeholder="masukkan nama barang!">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Harga Barang</label>
                            <input type="text" class="form-control" name="tharga" placeholder="masukkan harga barang!">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jumlah Barang</label>
                            <input type="text" class="form-control" name="tstok" placeholder="masukkan jumlah barang!">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tanggal Masuk</label>
                            <input type="date" class="form-control" name="tdate">
                        </div>

                        </div>
                            <div class="modal-footer">
                                <button type="submit" name="bsubmit" class="btn btn-primary">Simpan</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batalkan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>                    
        </div>
    </div>
    <!-- modal end -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>