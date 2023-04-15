<?php
$persegiPanjang = new PersegiPanjang(8, 5);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Luas</h3>
            </div>
            <div class="card-body">
                <p>Hitung Luas Persegi panjang</p>
                <code>Luas = Lebar * Panjang</code>
                <br>
                hasil: <?php echo $persegiPanjang->getLuasPersegiPanjang(); ?>
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-header">
                <h3>Keliling</h3>
            </div>
            <div class="card-body">
                <p>Hitung Keliling Persegi Panjang</p>
                <code>Keliling = 2 (Lebar * Panjang)</code>
                <br>
                hasil: <?php echo $persegiPanjang->getKelilingPersegiPanjang(); ?>
            </div>
        </div>
    </div>
</div>