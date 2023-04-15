<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center mb-4">Hasil Evaluasi BMI</h3>
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <strong>Nama</strong>
                            <span><?php echo $_GET['name'] ?> (<?php echo ($_GET['gender'] == 'L') ? 'Laki-laki' : 'Perempuan'; ?>)</span>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <strong>Berat/Tinggi Badan</strong>
                            <span><?php echo $_GET['weight'] . 'kg/' . $_GET['height'] ?>cm</span>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <strong>Umur</strong>
                            <span><?php echo $_GET['age'] ?>Tahun</span>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <strong>BMI</strong>
                            <span><?php echo $_GET['mass'] ?></span>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <strong>Hasil</strong>
                            <span><?php echo $_GET['mass_result_message'] ?> (<?php echo $_GET['mass_result_status'] ?>)</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="card-footer">
                <a href="index.php?page=bmi" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>