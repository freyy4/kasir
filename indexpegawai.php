<?php 
	@ob_start();
	session_start();
	if(!empty($_SESSION['admin'])){
		require 'config.php';
		include $view;
		$lihat = new view($config);
		$toko = $lihat -> toko();
			include 'pegawai/template/header.php';
			include 'pegawai/template/sidebar.php';
				if(!empty($_GET['page'])){
					include 'pegawai/module/'.$_GET['page'].'/indexpegawai.php';
				}else{
					include 'pegawai/template/home.php';
				}
			include 'pegawai/template/footer.php';
	}else{
		echo '<script>window.location="login.php";</script>';
		exit;
	}
?>

