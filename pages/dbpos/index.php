<div class="row">
    <div class="col-md-12">
        <div class="card-header px-0">
            <a href="index.php?page=dbpos&action=create" class="btn btn-primary">Tambah Data Produk</a>
        </div>
        <div class="card">

            <div class="card-body p-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Stok</th>
                            <th>Minimal Stok</th>
                            <th>Jenis Produk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $number = 1;
                        foreach ($products as $product) : ?>
                            <tr>
                                <td><?php echo $number ?></td>
                                <td>
                                    <?php echo $product->kode ?>
                                </td>
                                <td>
                                    <?php echo $product->nama ?>
                                </td>
                                <td>
                                    <?php echo $product->harga_beli ?>
                                </td>
                                <td>
                                    <?php echo $product->harga_jual ?>
                                </td>
                                <td>
                                    <?php echo $product->stok ?>
                                </td>
                                <td>
                                    <?php echo $product->min_stok ?>
                                </td>
                                <td>
                                    <?php echo $product->jenis ?>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="index.php?page=produk&action=update&id=<?php echo $product->id ?>" class="btn btn-primary mr-2">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="process/produk_process.php?action=delete" method="post">
                                            <input type="hidden" name="action" value="delete">
                                            <input type="hidden" name="id" value="<?php echo $product->id ?>">
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