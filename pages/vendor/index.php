<div class="row">
    <div class="col-md-12">
        <div class="card-header px-0">
            <a href="index.php?page=vendor&action=create" class="btn btn-primary">Tambah Data Vendor</a>
        </div>
        <div class="card">

            <div class="card-body p-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Kota</th>
                            <th>Kontak</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $number = 1;
                        foreach ($vendors as $vendor) : ?>
                            <tr>
                                <td><?php echo $number ?></td>
                                <td>
                                    <?php echo $vendor->nomor ?>
                                </td>
                                <td>
                                    <?php echo $vendor->nama ?>
                                </td>
                                <td>
                                    <?php echo $vendor->kota ?>
                                </td>
                                <td>
                                    <?php echo $vendor->kontak ?>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="index.php?page=vendor&action=update&id=<?php echo $vendor->id ?>" class="btn btn-primary mr-2">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="process/vendor_process.php?action=delete" method="post">
                                            <input type="hidden" name="action" value="delete">
                                            <input type="hidden" name="id" value="<?php echo $vendor->id ?>">
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