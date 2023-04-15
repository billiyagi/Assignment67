<?php
require_once('system/database.php');
require_once('class/PersegiPanjang.php');
// ALL Product
$productsStmt = $dbh->prepare("SELECT produk.id, produk.kode, produk.nama, produk.harga_beli, produk.harga_jual, produk.stok, produk.min_stok, jenis_produk.jenis
FROM produk
INNER JOIN jenis_produk ON produk.jenis_produk_id = jenis_produk.id ORDER BY produk.id DESC");
$productsStmt->execute();
$products = $productsStmt->fetchAll(PDO::FETCH_OBJ);

// ALL Jenis Product
$productsCategoryStmt = $dbh->prepare("SELECT * FROM jenis_produk");
$productsCategoryStmt->execute();
$productsCategory = $productsCategoryStmt->fetchAll(PDO::FETCH_OBJ);


// Single Product
$productStmt = $dbh->prepare("SELECT * FROM produk WHERE id = ?");
$productStmt->bindParam(1, $_GET['id']);
$productStmt->execute();
$product = $productStmt->fetch(PDO::FETCH_OBJ);


// ALL Vendor Product
$vendorsStmt = $dbh->prepare("SELECT * FROM vendor ORDER BY id DESC");
$vendorsStmt->execute();
$vendors = $vendorsStmt->fetchAll(PDO::FETCH_OBJ);

// Single Vendor Product
$vendorStmt = $dbh->prepare("SELECT * FROM vendor WHERE id = ?");
$vendorStmt->bindParam(1, $_GET['id']);
$vendorStmt->execute();
$vendor = $vendorStmt->fetch(PDO::FETCH_OBJ);

// ALL BMI
$bmisStmt = $dbh->prepare("SELECT * FROM bmi ORDER BY id DESC");
$bmisStmt->execute();
$bmis = $bmisStmt->fetchAll(PDO::FETCH_OBJ);

// Single BMI
$bmiStmt = $dbh->prepare("SELECT * FROM bmi WHERE id =?");
$bmiStmt->bindParam(1, $_GET['id']);
$bmiStmt->execute();
$bmi = $bmiStmt->fetch(PDO::FETCH_OBJ);
?>

<?php require_once('templates/header.php'); ?>

<!-- Navbar -->
<?php require_once('templates/topbar.php'); ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php require_once('templates/sidebar.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<?php echo getFlashMessage(); ?>
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<?php if (isset($_GET['page'])) : ?>
						<?php if ($_GET['page'] == 'produk') : ?>
							<h1>DB Koperasi / DBPOS <strong>(Produk)</strong></h1>
						<?php elseif ($_GET['page'] == 'vendor') : ?>
							<h1>DB Koperasi / DBPOS <strong>(Vendor)</strong></h1>
						<?php endif; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<?php if (isset($_GET['page'])) : ?>

				<!-- dbpos Page -->
				<?php if ($_GET['page'] == 'produk') : ?>

					<!-- produk Action -->
					<?php if (isset($_GET['action'])) : ?>

						<!-- produk CRUD Action -->
						<?php if ($_GET['action'] == 'create') : ?>
							<?php require_once('pages/dbpos/create.php'); ?>
						<?php elseif ($_GET['action'] == 'update') : ?>
							<?php require_once('pages/dbpos/update.php'); ?>
						<?php endif; ?>
						<!-- End produk CRUD Action -->

					<?php else : ?>
						<?php require_once('pages/dbpos/index.php'); ?>
					<?php endif; ?>

					<!-- Halaman vendor -->
				<?php elseif ($_GET['page'] == 'vendor') : ?>

					<!-- vendor Action -->
					<?php if (isset($_GET['action'])) : ?>

						<!-- vendor CRUD Action -->
						<?php if ($_GET['action'] == 'create') : ?>
							<?php require_once('pages/vendor/create.php'); ?>
						<?php elseif ($_GET['action'] == 'update') : ?>
							<?php require_once('pages/vendor/update.php'); ?>
						<?php endif; ?>
						<!-- End vendor CRUD Action -->

					<?php else : ?>
						<?php require_once('pages/vendor/index.php'); ?>
					<?php endif; ?>

					<!-- Halaman BMI -->
				<?php elseif ($_GET['page'] == 'bmi') : ?>

					<!-- bmi Action -->
					<?php if (isset($_GET['action'])) : ?>

						<!-- bmi CRUD Action -->
						<?php if ($_GET['action'] == 'create') : ?>
							<?php require_once('pages/bmi/create.php'); ?>
						<?php elseif ($_GET['action'] == 'update') : ?>
							<?php require_once('pages/bmi/update.php'); ?>
						<?php elseif ($_GET['action'] == 'status') : ?>
							<?php require_once('pages/bmi/status.php') ?>
						<?php endif; ?>
						<!-- End bmi CRUD Action -->

					<?php else : ?>
						<?php require_once('pages/bmi/index.php'); ?>
					<?php endif; ?>

				<?php elseif ($_GET['page'] == 'persegipanjang') : ?>
					<?php require_once('pages/persegipanjang/index.php'); ?>

				<?php else : ?>
					<div class="jumbotron bg-white">
						<h1 class="display-4">Selamat Datang!</h1>
						<p class="lead">Web simpel untuk menampilkan sebuah tugas dari mata kuliah pemrograman web 2.</p>
						<p class="lead mt-3">
							<a class="btn btn-primary btn-lg" href="#" role="button">Enjoy!</a>
						</p>
					</div>
				<?php endif; ?>
			<?php else : ?>
				<div class="jumbotron bg-white">
					<h1 class="display-4">Selamat Datang!</h1>
					<p class="lead">Web simpel untuk menampilkan sebuah tugas dari mata kuliah pemrograman web 2.</p>
					<p class="lead mt-3">
						<a class="btn btn-primary btn-lg" href="#" role="button">Enjoy!</a>
					</p>
				</div>
			<?php endif; ?>
		</div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php require_once('templates/footer.php') ?>