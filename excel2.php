<?php 
	@ob_start();
	session_start();
	if(!empty($_SESSION['admin'])){ }else{
		echo '<script>window.location="login.php";</script>';
        exit;
	}
    header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
    header("Content-Disposition: attachment; filename=data-member.xls");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: private",false); 

    require 'config.php';
    include $view;
    $lihat = new view($config);

    $bulan_tes =array(
        '01'=>"Januari",
        '02'=>"Februari",
        '03'=>"Maret",
        '04'=>"April",
        '05'=>"Mei",
        '06'=>"Juni",
        '07'=>"Juli",
        '08'=>"Agustus",
        '09'=>"September",
        '10'=>"Oktober",
        '11'=>"November",
        '12'=>"Desember"
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<!-- view barang -->	
    <!-- view barang -->	
    <div class="modal-view">
        <table border="1" width="100%" cellpadding="3" cellspacing="4">
            <thead>
                <tr bgcolor="yellow">
                    <th> No</th>
                    <th> ID Member</th>
                    <th> Nama Lengkap</th>
                    <th style="width:50%;"> Alamat</th>
                    <th style="width:10%;"> Telepon</th>
                    <th style="width:10%;"> Email</th>
                    <th> Nomor Induk Kependudukan</th>
                </tr>
            </thead>
            <tbody>
            <?php 
				$hasil = $lihat -> memberadmin();
				$no=1;
				foreach($hasil as $isi){
			?>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $isi['id_member'];?></td>
                <td><?php echo $isi['nm_member'];?></td>
                <td><?php echo $isi['alamat_member'];?></td>
                <td><?php echo $isi['telepon'];?></td>
                <td><?php echo $isi['email'];?></td>
                <td><?php echo $isi['NIK'];?></td>
            </tr>
                <?php $no++; }?>
            </tbody>
        </table>
    </div>
</body>
</html>
