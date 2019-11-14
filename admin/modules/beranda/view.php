<div class="page-content">
	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<div style="margin-top:10px" class="alert alert-block alert-info">
				<button type="button" class="close" data-dismiss="alert">
					<i class="ace-icon fa fa-times"></i>
				</button>
				<i class="ace-icon fa fa-user blue"></i>
				Selamat datang
				<strong class="blue"><?php echo $_SESSION['nama_admin']; ?></strong>.
			</div>
			<!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div><!-- /.row -->

	<hr>
	<div class="row">
		<div class="col-xs-12">
			
		</div><!-- /.col -->
	</div><!-- /.row -->
	<div class="row state-overview">
        

       	<div class="col-lg-3 col-sm-6">
            <section style="background:#f1f2f7" class="panel">
                <div class="symbol blue">
                    <a href="?module=barang">
					    <i class="fa fa-folder-o"></i>
					</a>
                </div>
                <div class="value">
                    <a href="?module=form_barang&form=add">
	                    <h1 style="font-size:30px">+</h1>
	                    <p>Barang</p>
                    </a>
                </div>
            </section>
       	</div>

       	<div class="col-lg-3 col-sm-6">
            <section style="background:#f1f2f7" class="panel">
                <div class="symbol blue">
                    <a href="?module=biaya_kirim">
					    <i class="fa fa-truck"></i>
					</a>
                </div>
                <div class="value">
                    <a href="?module=form_biaya_kirim&form=add">
	                    <h1 style="font-size:30px">+</h1>
	                    <p>Biaya Kirim</p>
                    </a>
                </div>
            </section>
       	</div>
		
			<div class="col-lg-3 col-sm-6">
            <section style="background:#f1f2f7" class="panel">
                <div class="symbol blue">
                    <a href="?module=kategori">
					    <i class="fa fa-book"></i>
					</a>
                </div>
                <div class="value">
                    <a href="?module=kategori&form=add">
	                    <h1 style="font-size:30px">+</h1>
	                    <p>Kategori</p>
                    </a>
                </div>
            </section>
       	</div>

       

       	
 <?php if ($_SESSION['level'] == 'pemilik'){ ?>
 	<div class="col-lg-3 col-sm-6">
            <section style="background:#f1f2f7" class="panel">
                <div class="symbol blue">
                    <a href="?module=komentar">
					    <i class="fa fa-comments-o"></i>
					</a>
                </div>
                <div class="value">
                    <a href="?module=komentar">
	                    <h1 style="font-size:30px">+</h1>
	                    <p>Komentar</p>
                    </a>
                </div>
            </section>
       	</div>

       	<div class="col-lg-3 col-sm-6">
            <section style="background:#f1f2f7" class="panel">
                <div class="symbol blue">
                    <a href="?module=pesanan">
					    <i class="fa fa-shopping-cart"></i>
					</a>
                </div>
                <div class="value">
                    <a href="?module=pesanan">
	                    <h1 style="font-size:30px">+</h1>
	                    <p>Pesanan</p>
                    </a>
                </div>
            </section>
       	</div>
 
 
 <div class="col-lg-3 col-sm-6">
            <section style="background:#f1f2f7" class="panel">
                <div class="symbol blue">
                    <a href="?module=konfirmasi">
					    <i class="fa fa-retweet"></i>
					</a>
                </div>
                <div class="value">
                    <a href="?module=konfirmasi">
	                    <h1 style="font-size:30px">+</h1>
	                    <p>Pembayaran</p>
                    </a>
                </div>
            </section>
       	</div>
 <div class="col-lg-3 col-sm-6">
            <section style="background:#f1f2f7" class="panel">
                <div class="symbol blue">
                    <a href="?module=konsumen">
					    <i class="fa fa-user"></i>
					</a>
                </div>
                <div class="value">
                    <a href="?module=konsumen">
	                    <h1 style="font-size:30px">+</h1>
	                    <p>Konsumen</p>
                    </a>
                </div>
            </section>
       	</div>
 
       	<div class="col-lg-3 col-sm-6">
            <section style="background:#f1f2f7" class="panel">
                <div class="symbol blue">
                    <a href="?module=laporan">
					    <i class="fa fa-file-text-o"></i>
					</a>
                </div>
                <div class="value">
                    <a href="?module=laporan">
	                    <h1 style="font-size:30px">+</h1>
	                    <p>Laporan</p>
                    </a>
                </div>
            </section>
       	</div>
		<?php
		
		}
		?>

       	
            </section>
       	</div>
	</div>

	
</div><!-- /.page-content -->