<div class="row">
    <div class="col-md-12">
        <div class="card shadow-sm">
            <div class="card-body">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                <form action="process/bmi_process.php" method="POST">
                    <input type="hidden" name="action" value="update">
                    <input type="hidden" name="id" value="<?php echo $bmi->id ?>">
                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <input id="name" name="name" type="text" class="form-control" value="<?php echo $bmi->name ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="age" class="col-4 col-form-label">Umur</label>
                        <div class="col-8">
                            <input id="age" name="age" type="number" class="form-control" value="<?php echo $bmi->age ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="weight" class="col-4 col-form-label">Berat</label>
                        <div class="col-8">
                            <input id="weight" name="weight" type="number" class="form-control" value="<?php echo $bmi->weight ?>" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="height" class="col-4 col-form-label">Tinggi</label>
                        <div class="col-8">
                            <input id="height" name="height" type="number" class="form-control" value="<?php echo $bmi->height ?>" required>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender1" value="L" <?php echo ($bmi->gender == 'L') ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="gender1">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender2" value="P" <?php echo ($bmi->gender == 'P') ? 'checked' : ''; ?>>
                        <label class="form-check-label" for="gender2">
                            Perempuan
                        </label>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>