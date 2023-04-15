<?php
require_once('../system/database.php');

if (isset($_POST['action'])) {
    if ($_POST['action'] == 'insert') {

        // Data
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $beli = $_POST['beli'];
        $jual = $_POST['jual'];
        $stok = $_POST['stok'];
        $stokMinimal = $_POST['stok_minimal'];
        $jenisProduk = $_POST['jenis'];

        // Query
        $productInsertStmt = $dbh->prepare("INSERT INTO produk (kode, nama, harga_beli, harga_jual, stok, min_stok, jenis_produk_id) VALUES (:kode, :nama, :harga_beli, :harga_jual, :stok, :min_stok, :jenis_produk_id)");

        // Bind Data
        $productInsertStmt->bindParam(':kode', $kode);
        $productInsertStmt->bindParam(':nama', $nama);
        $productInsertStmt->bindParam(':harga_beli', $beli);
        $productInsertStmt->bindParam(':harga_jual', $jual);
        $productInsertStmt->bindParam(':stok', $stok);
        $productInsertStmt->bindParam(':min_stok', $stokMinimal);
        $productInsertStmt->bindParam(':jenis_produk_id', $jenisProduk);

        // Feedback
        if ($productInsertStmt->execute()) {
            setFlashMessage('Data berhasil ditambahkan', 'success');
            header('Location:../index.php?page=produk');
        } else {
            setFlashMessage('Data berhasil ditambahkan', 'danger');
            header('Location:../index.php?page=produk');
        }
    } elseif ($_POST['action'] == 'update') {

        // Data
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $beli = $_POST['beli'];
        $jual = $_POST['jual'];
        $stok = $_POST['stok'];
        $stokMinimal = $_POST['stok_minimal'];
        $jenisProduk = $_POST['jenis'];

        // Query 
        $productUpdateStmt = $dbh->prepare("UPDATE produk SET kode=:kode,nama=:nama,harga_beli=:harga_beli,harga_jual=:harga_jual,stok=:stok,min_stok=:min_stok,jenis_produk_id=:jenis WHERE id=:id");

        // Bind Data
        $productUpdateStmt->bindParam(':kode', $kode);
        $productUpdateStmt->bindParam(':nama', $nama);
        $productUpdateStmt->bindParam(':harga_beli', $beli);
        $productUpdateStmt->bindParam(':harga_jual', $jual);
        $productUpdateStmt->bindParam(':stok', $stok);
        $productUpdateStmt->bindParam(':min_stok', $stokMinimal);
        $productUpdateStmt->bindParam(':jenis', $jenisProduk);
        $productUpdateStmt->bindParam(':id', $_POST['id']);

        // Feedback
        if ($productUpdateStmt->execute()) {
            setFlashMessage('Data berhasil diubah', 'success');
            header('Location:../index.php?page=produk');
        } else {
            setFlashMessage('Data gagal diubah', 'success');
            header('Location:../index.php?page=produk');
        }
    } elseif ($_POST['action'] == 'delete') {

        // Query
        $productDeleteStmt = $dbh->prepare("DELETE FROM produk WHERE id=:id");
        $productDeleteStmt->bindParam(':id', $_POST['id']);

        // Bind Data
        if ($productDeleteStmt->execute()) {
            setFlashMessage('Data berhasil dihapus', 'success');
            header('Location:../index.php?page=produk');
        } else {
            setFlashMessage('Data gagal dihapus', 'success');
            header('Location:../index.php?page=produk');
        }
    } else {
        header('Location:../index.php?page=produk');
    }
}
