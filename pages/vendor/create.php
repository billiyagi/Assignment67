<div class="row">
    <div class="col-md-12">
        <div class="card shadow-sm">
            <div class="card-body">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                <form action="process/vendor_process.php" method="POST">
                    <input type="hidden" name="action" value="insert">
                    <div class="form-group row">
                        <label for="kode" class="col-4 col-form-label">Kode</label>
                        <div class="col-8">
                            <input id="kode" name="kode" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <input id="nama" name="nama" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kota" class="col-4 col-form-label">Kota</label>
                        <div class="col-8">
                            <input id="kota" name="kota" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kontak" class="col-4 col-form-label">Kontak</label>
                        <div class="col-8">
                            <input id="kontak" name="kontak" type="text" class="form-control" required>
                        </div>
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