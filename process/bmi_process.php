<?php
require_once('../system/database.php');
require_once('../class/Bmi.php');


if (isset($_POST['action'])) {
    if ($_POST['action'] == 'insert') {

        // Data
        $name = $_POST['name'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];

        // Hitung BMI
        $bmi = new BMI($weight, $height);
        $bodyMass = $bmi->getBmiResult();
        $bodyMassResult = $bmi->getBmiStatus();

        // Query
        $bmiInsertStmt = $dbh->prepare("INSERT INTO bmi (name, age, gender, weight, height, body_mass, body_mass_result) VALUES (:nama, :umur, :gender, :berat, :tinggi, :massa, :hasilMassa)");

        // Bind Data
        $bmiInsertStmt->bindParam(':nama', $name);
        $bmiInsertStmt->bindParam(':umur', $age);
        $bmiInsertStmt->bindParam(':gender', $gender);
        $bmiInsertStmt->bindParam(':berat', $weight);
        $bmiInsertStmt->bindParam(':tinggi', $height);
        $bmiInsertStmt->bindParam(':massa', $bodyMass);
        $bmiInsertStmt->bindParam(':hasilMassa', $bodyMassResult[0]);

        // Feedback
        if ($bmiInsertStmt->execute()) {
            setFlashMessage('Data berhasil ditambahkan', 'success');
            header("Location:../index.php?page=bmi&action=status&name=$name&weight=$weight&height=$height&age=$age&mass=$bodyMass&mass_result_message=$bodyMassResult[0]&mass_result_status=$bodyMassResult[1]&gender=$gender");
        } else {
            setFlashMessage('Data berhasil ditambahkan', 'danger');
            header('Location:../index.php?page=bmi');
        }
    } elseif ($_POST['action'] == 'update') {

        // Data
        $name = $_POST['name'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $id = $_POST['id'];

        // Hitung BMI
        $bmi = new BMI($weight, $height);
        $bodyMass = $bmi->getBmiResult();
        $bodyMassResult = $bmi->getBmiStatus();

        // Query
        $bmiUpdateStmt = $dbh->prepare("UPDATE bmi SET name=:nama, age=:umur, gender=:gender, weight=:berat, height=:tinggi, body_mass=:massa, body_mass_result=:hasilMassa WHERE id=:id");

        // Bind Data
        $bmiUpdateStmt->bindParam(':nama', $name);
        $bmiUpdateStmt->bindParam(':umur', $age);
        $bmiUpdateStmt->bindParam(':gender', $gender);
        $bmiUpdateStmt->bindParam(':berat', $weight);
        $bmiUpdateStmt->bindParam(':tinggi', $height);
        $bmiUpdateStmt->bindParam(':massa', $bodyMass);
        $bmiUpdateStmt->bindParam(':hasilMassa', $bodyMassResult[0]);
        $bmiUpdateStmt->bindParam(':id', $id);

        // Feedback
        if ($bmiUpdateStmt->execute()) {
            setFlashMessage('Data berhasil diubah', 'success');
            header('Location:../index.php?page=bmi');
        } else {
            setFlashMessage('Data gagal diubah', 'danger');
            header('Location:../index.php?page=bmi');
        }
    } elseif ($_POST['action'] == 'delete') {

        // Query
        $bmiDeleteStmt = $dbh->prepare("DELETE FROM bmi WHERE id=:id");
        $bmiDeleteStmt->bindParam(':id', $_POST['id']);

        // Bind Data
        if ($bmiDeleteStmt->execute()) {
            setFlashMessage('Data berhasil dihapus', 'success');
            header('Location:../index.php?page=bmi');
        } else {
            setFlashMessage('Data gagal dihapus', 'success');
            header('Location:../index.php?page=bmi');
        }
    } else {
        header('Location:../index.php?page=bmi');
    }
}
