<?php 
    $id = $_SESSION['admin']['id_member'];
    $hasil_profil = $lihat -> member_edit($id);
?>
<h3>Selamat Datang, <?php echo $hasil_profil['nm_member'];?></h3>
<?php 
	$sql=" select * from barang where stok <= 3";
	$row = $config -> prepare($sql);
	$row -> execute();
	$r = $row -> rowCount();
	if($r > 0){
?>
<?php
		echo "
		<div class='alert alert-warning'>
			<span class='glyphicon glyphicon-info-sign'></span> Ada <span style='color:red'>$r</span> barang yang Stok tersisa sudah kurang dari 3 items. silahkan pesan lagi !!
			<span class='pull-right'><a href='index.php?page=barang&stok=yes'>Tabel Barang <i class='fa fa-angle-double-right'></i></a></span>
		</div>
		";	
	}
    $hasil_barang = $lihat -> barang_row();
    $hasil_kategori = $lihat -> kategori_row();
    $stok = $lihat -> barang_stok_row();
    $jual = $lihat -> jual_row();
?>
<div class="row">
    <!--STATUS cardS -->
    <div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h6 class="pt-2"><i class="fas fa-cubes"></i> Data Barang</h6>
            </div>
            <div class="card-body">
                    <h1><?php echo number_format($hasil_barang);?></h1>
            </div>
            <div class="card-footer">
                <a href='index.php?page=barang'> Data Barang <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
    <!-- STATUS cardS -->
    <div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h6 class="pt-2"><i class="fas fa-chart-bar"></i> Stok Barang</h6>
            </div>
            <div class="card-body">
                    <h1><?php echo number_format($stok['jml']);?></h1>
            </div>
            <div class="card-footer">
                <a href='index.php?page=barang'>Stok Barang <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
    <!-- STATUS cardS -->
    <div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header bg-warning text-white">
                <h6 class="pt-2"><i class="fas fa-upload"></i> Telah Terjual</h6>
            </div>
            <div class="card-body">
                <h1><?php echo number_format($jual['stok']);?></h1>
            </div>
            <div class="card-footer">
                <a href='index.php?page=laporan'>Laporan <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
    <div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <h6 class="pt-2"><i class="fa fa-bookmark"></i> Kategori Barang</h6>
            </div>
            <div class="card-body">
                <h1><?php echo number_format($hasil_kategori);?></h1>
            </div>
            <div class="card-footer">
                <a href='index.php?page=kategori'>Kategori <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
</div>