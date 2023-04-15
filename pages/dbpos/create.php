<div class="row">
    <div class="col-md-12">
        <div class="card shadow-sm">
            <div class="card-body">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                <form action="process/produk_process.php" method="POST">
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
                        <label for="beli" class="col-4 col-form-label">Harga Beli</label>
                        <div class="col-8">
                            <input id="beli" name="beli" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jual" class="col-4 col-form-label">Harga Jual</label>
                        <div class="col-8">
                            <input id="jual" name="jual" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-4 col-form-label">Stok</label>
                        <div class="col-8">
                            <input id="stok" name="stok" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok_minimal" class="col-4 col-form-label">Stok Minimal</label>
                        <div class="col-8">
                            <input id="stok_minimal" name="stok_minimal" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis" class="col-4 col-form-label">Jenis Produk</label>
                        <div class="col-8">
                            <select id="jenis" name="jenis" class="custom-select" required>
                                <option disabled selected>-- Jenis Produk --</option>
                                <?php foreach ($productsCategory as $category) : ?>
                                    <option value="<?php echo $category->id ?>"><?php echo $category->jenis ?></option>
                                <?php endforeach; ?>
                            </select>
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