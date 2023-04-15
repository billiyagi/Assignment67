<div class="row">
    <div class="col-md-12">
        <div class="card-header px-0">
            <a href="index.php?page=bmi&action=create" class="btn btn-primary">Tambah Data BMI</a>
        </div>
        <div class="card">

            <div class="card-body p-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>Berat</th>
                            <th>Tinggi</th>
                            <th>Massa Tubuh</th>
                            <th>Hasil</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $number = 1;
                        foreach ($bmis as $bmi) : ?>
                            <tr>
                                <td><?php echo $number ?></td>
                                <td>
                                    <?php echo $bmi->name ?>
                                </td>
                                <td>
                                    <?php echo $bmi->gender ?>
                                </td>
                                <td>
                                    <?php echo $bmi->weight ?>
                                </td>
                                <td>
                                    <?php echo $bmi->height ?>
                                </td>
                                <td>
                                    <?php echo $bmi->body_mass ?>
                                </td>
                                <td>
                                    <?php echo $bmi->body_mass_result ?>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="index.php?page=bmi&action=update&id=<?php echo $bmi->id ?>" class="btn btn-primary mr-2">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="process/bmi_process.php?action=delete" method="post">
                                            <input type="hidden" name="action" value="delete">
                                            <input type="hidden" name="id" value="<?php echo $bmi->id ?>">
                                            <button class="btn btn-danger">
                                                <i class="fas fa-times-circle"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php
                            $number++;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>