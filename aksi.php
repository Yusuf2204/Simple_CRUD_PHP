<?php
    include "koneksi.php";

    // Simpan Button
    if(isset($_POST['bsubmit'])) {
        $insert_query = 

        $simpan = mysqli_query($connection, "INSERT INTO tdatabarang (id_barang, kode_barang, nama_barang, harga_barang, jml_barang, tgl) 
        VALUES ('$_POST[tid]','$_POST[tkode]', '$_POST[tbarang]', '$_POST[tharga]', '$_POST[tstok]', '$_POST[tdate]')"
        );

        if($simpan) {
            echo "<script>
                    alert('data tersimpan');
                    document.location = 'index.php';
                 </script>";
        } else {
            echo "<script>
                    alert('data gagal tersimpan');
                    document.location = 'index.php';
                 </script>";
        }
    }

    // Ubah Button
    if(isset($_POST['bubah'])) {
        $insert_query = 

        $ubah = mysqli_query($connection, "UPDATE tdatabarang SET kode_barang='$_POST[tkode]', nama_barang='$_POST[tbarang]',harga_barang='$_POST[tharga]', jml_barang='$_POST[tstok]', tgl='$_POST[tdate]' WHERE id_barang = '$_POST[id_barang]'"
        );

        if($ubah) {
            echo "<script>
                    alert('data berhasil diubah');
                    document.location = 'index.php';
                 </script>";
        } else {
            echo "<script>
                    alert('data gagal diubah');
                    document.location = 'index.php';
                 </script>";
        }
    }

    // Hapus Button
    if(isset($_POST['bhapus'])) {
        $insert_query = 

        $hapus = mysqli_query($connection, "DELETE FROM tdatabarang WHERE id_barang = '$_POST[id_barang]'"
        );

        if($hapus) {
            echo "<script>
                    alert('data berhasil dihapus');
                    document.location = 'index.php';
                 </script>";
        } else {
            echo "<script>
                    alert('data gagal dihapus');
                    document.location = 'index.php';
                 </script>";
        }
    }
?>

