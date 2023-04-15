<?php
require_once('../system/database.php');

if (isset($_POST['action'])) {
    if ($_POST['action'] == 'insert') {

        // Data
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $kota = $_POST['kota'];
        $kontak = $_POST['kontak'];

        // Query
        $vendorInsertStmt = $dbh->prepare("INSERT INTO vendor (nomor, nama, kota, kontak) VALUES (:kode, :nama, :kota, :kontak)");

        // Bind Data
        $vendorInsertStmt->bindParam(':kode', $kode);
        $vendorInsertStmt->bindParam(':nama', $nama);
        $vendorInsertStmt->bindParam(':kota', $kota);
        $vendorInsertStmt->bindParam(':kontak', $kontak);

        // Feedback
        if ($vendorInsertStmt->execute()) {
            setFlashMessage('Data berhasil ditambahkan', 'success');
            header('Location:../index.php?page=vendor');
        } else {
            setFlashMessage('Data berhasil ditambahkan', 'danger');
            header('Location:../index.php?page=vendor');
        }
    } elseif ($_POST['action'] == 'update') {

        // Data
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $kota = $_POST['kota'];
        $kontak = $_POST['kontak'];

        // Query 
        $vendorUpdateStmt = $dbh->prepare("UPDATE vendor SET nomor=:kode,nama=:nama,kota=:kota,kontak=:kontak WHERE id=:id");

        // Bind Data
        $vendorUpdateStmt->bindParam(':kode', $kode);
        $vendorUpdateStmt->bindParam(':nama', $nama);
        $vendorUpdateStmt->bindParam(':kota', $kota);
        $vendorUpdateStmt->bindParam(':kontak', $kontak);
        $vendorUpdateStmt->bindParam(':id', $_POST['id']);

        // Feedback
        if ($vendorUpdateStmt->execute()) {
            setFlashMessage('Data berhasil diubah', 'success');
            header('Location:../index.php?page=vendor');
        } else {
            setFlashMessage('Data gagal diubah', 'success');
            header('Location:../index.php?page=vendor');
        }
    } elseif ($_POST['action'] == 'delete') {

        // Query
        $vendorDeleteStmt = $dbh->prepare("DELETE FROM vendor WHERE id=:id");
        $vendorDeleteStmt->bindParam(':id', $_POST['id']);

        // Bind Data
        if ($vendorDeleteStmt->execute()) {
            setFlashMessage('Data berhasil dihapus', 'success');
            header('Location:../index.php?page=vendor');
        } else {
            setFlashMessage('Data gagal dihapus', 'success');
            header('Location:../index.php?page=vendor');
        }
    } else {
        header('Location:../index.php?page=vendor');
    }
}
