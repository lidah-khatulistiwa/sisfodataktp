<?php 
include "setting/conf.php"; 
$kat_layanan = $_GET['kat_layanan'];

$query = mysql_query("select * from layanan where kat_layanan='$kat_layanan'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<!-- Title bar -->
<div class="pi-section-w pi-shadow-inside-top pi-section-dark">
	<div class="pi-texture" style="background: url(images/hexagon.png) repeat;"></div>
	<div class="pi-section" style="padding: 30px 40px 26px;">
	
		<div class="pi-row">
			<div class="pi-col-sm-4 pi-center-text-xs">
				<h1 class="h2 pi-weight-300 pi-margin-bottom-5">Layanan <?php echo $data['kat_layanan']; ?></h1>
			</div>
		</div>
		
	</div>
</div>
<!-- End title bar -->

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<!-- Breadcrumbs -->
<div class="pi-section-w pi-border-bottom pi-section-grey">
	<div class="pi-section pi-titlebar pi-breadcrumb-only">
		<div class="pi-breadcrumb pi-center-text-xs">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="layanan.php?hal=layanan-kategori">Semua Layanan</li>
				<li><?php echo $data['kat_layanan']; ?></li>
			</ul>
		</div>
	</div>
</div>
<!-- End breadcrumbs -->