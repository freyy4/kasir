        <h4>Data Member</h4>
        <a href="excel2.php" class="btn btn-info"><i class="fa fa-download"></i>
			Print Laporan Excel</a>
        <div class="card card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm" id="example1">
                    <thead>
                        <tr style="background:#DFF0D8;color:#333;">
                            <th>No.</th>
                            <th>Id Member</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Nomor Induk Kependudukan</th>
                        </tr>
                    </thead>
                    <?php 
				        $hasil = $lihat -> memberadmin();
				        $no=1;
				        foreach($hasil as $isi){
			        ?>
                    <tbody>
                        <tr>
                            <td><?php echo $no;?></td>
                            <td><?php echo $isi['id_member'];?></td>
                            <td><?php echo $isi['nm_member'];?></td>
                            <td><?php echo $isi['alamat_member'];?></td>
                            <td><?php echo $isi['telepon'];?></td>
                            <td><?php echo $isi['email'];?></td>
                            <td><?php echo $isi['NIK'];?></td>
                        </tr>
                    </tbody>
                    <?php $no++; }?>
                </table>
            </div>
        </div>  