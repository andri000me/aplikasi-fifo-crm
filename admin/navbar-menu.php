<ul class="nav nav-list"> 
<?php if ($_SESSION['level'] == 'pemilik'){?>
<?php 
// fungsi untuk pengecekan menu aktif
// jika menu beranda dipilih, menu beranda aktif
if ($_GET["module"] == "beranda") { ?>
    <li class="active open hover highlight">
        <a href="?module=beranda">
            <i class="menu-icon fa fa-home"></i>
            <span class="menu-text"> Beranda </span>
        </a>

        <b class="arrow"></b>
    </li>
<?php
} 
// jika tidak, menu beranda tidak aktif
else {  ?>
     <li class="hover">
        <a href="?module=beranda">
            <i class="menu-icon fa fa-home"></i>
            <span class="menu-text"> Beranda </span>
        </a>

        <b class="arrow"></b>
    </li>
<?php
}

// jika menu tentang dipilih, menu tentang aktif
if ($_GET["module"] == "tentang") { ?>
    <li class="active open hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-info-circle"></i>
            <span class="menu-text"> Informasi </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="active open hover">
                <a href="?module=tentang">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Tentang Kami
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hover">
                <a href="?module=cara_beli">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Cara Pembelian
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
<?php
}
// jika menu cara beli dipilih, menu cara beli aktif
elseif ($_GET["module"] == "cara_beli") { ?>
    <li class="active open hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-info-circle"></i>
            <span class="menu-text"> Informasi </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="hover">
                <a href="?module=tentang">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Tentang Kami
                </a>

                <b class="arrow"></b>
            </li>

            <li class="active open hover">
                <a href="?module=cara_beli">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Cara Pembelian
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
<?php
}
// jika tidak, menu informasi tidak aktif
else {  ?>
    <li class="hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-info-circle"></i>
            <span class="menu-text"> Informasi </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="hover">
                <a href="?module=tentang">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Tentang Kami
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hover">
                <a href="?module=cara_beli">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Cara Pembelian
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
<?php
}

// jika menu konsumen dipilih, menu konsumen aktif
if ($_GET["module"] == "konsumen" || $_GET["module"] == "form_konsumen") { ?>
    <li class="active open hover highlight">
        <a href="?module=konsumen">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text"> Konsumen </span>
        </a>

        <b class="arrow"></b>
    </li>
<?php
} 
// jika tidak, menu konsumen tidak aktif
else {  ?>
     <li class="hover">
        <a href="?module=konsumen">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text"> Konsumen </span>
        </a>

        <b class="arrow"></b>
    </li>
<?php
}

// jika menu barang dipilih, menu barang aktif
if ($_GET["module"] == "barang" || $_GET["module"] == "form_barang") { ?>
    <li class="active open hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-folder-o"></i>
            <span class="menu-text"> Barang </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="active open hover">
                <a href="?module=barang">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Data Barang
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hover">
                <a href="?module=kategori">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Kategori Barang
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>

<?php
}
// jika menu kategori dipilih, menu kategori aktif
elseif ($_GET["module"] == "kategori" || $_GET["module"] == "form_kategori") { ?>
    <li class="active open hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-folder-o"></i>
            <span class="menu-text"> Barang </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="hover">
                <a href="?module=barang">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Data Barang
                </a>

                <b class="arrow"></b>
            </li>

            <li class="active open hover">
                <a href="?module=kategori">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Kategori Barang
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
<?php
}
// jika tidak, menu barang tidak aktif
else {  ?>
    <li class="hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-folder-o"></i>
            <span class="menu-text"> Barang </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="hover">
                <a href="?module=barang">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Data Barang
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hover">
                <a href="?module=kategori">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Kategori Barang
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
<?php
}

// jika menu biaya kirim dipilih, menu biaya kirim aktif
if ($_GET["module"] == "biaya_kirim") { ?>
    <li class="active open hover highlight">
        <a href="?module=biaya_kirim">
            <i class="menu-icon fa fa-truck"></i>
            <span class="menu-text"> Biaya Pengiriman </span>
        </a>

        <b class="arrow"></b>
    </li>
<?php
} 
// jika tidak, menu biaya kirim tidak aktif
else {  ?>
     <li class="hover">
        <a href="?module=biaya_kirim">
            <i class="menu-icon fa fa-truck"></i>
            <span class="menu-text"> Biaya Pengiriman </span>
        </a>

        <b class="arrow"></b>
    </li>
<?php
}

// jika menu pesanan dipilih, menu pesanan aktif
if ($_GET["module"] == "pesanan" || $_GET["module"] == "form_pesanan") { ?>
    <li class="active open hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-shopping-cart"></i>
            <span class="menu-text"> Transaksi </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="active open hover">
                <a href="?module=pesanan">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Pesanan
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hover">
                <a href="?module=konfirmasi">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Konfirmasi Pembayaran
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
<?php
}
// jika menu konfirmasi dipilih, menu konfirmasi aktif
elseif ($_GET["module"] == "konfirmasi" || $_GET["module"] == "form_konfirmasi") { ?>
    <li class="active open hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-shopping-cart"></i>
            <span class="menu-text"> Transaksi </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="hover">
                <a href="?module=pesanan">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Pesanan
                </a>

                <b class="arrow"></b>
            </li>

            <li class="active open hover">
                <a href="?module=konfirmasi">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Konfirmasi Pembayaran
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
<?php
}
// jika tidak, menu barang tidak aktif
else {  ?>
    <li class="hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-shopping-cart"></i>
            <span class="menu-text"> Transaksi </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="hover">
                <a href="?module=pesanan">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Pesanan
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hover">
                <a href="?module=konfirmasi">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Konfirmasi Pembayaran
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
<?php
}

// jika menu komentar dipilih, menu komentar aktif
if ($_GET["module"] == "komentar") { ?>
    <li class="active open hover highlight">
        <a href="?module=komentar">
            <i class="menu-icon fa fa-comment"></i>
            <span class="menu-text"> Komentar </span>
        </a>

        <b class="arrow"></b>
    </li>
	

<?php
} 
// jika tidak, menu komentar tidak aktif
else {  ?>
     <li class="hover">
        <a href="?module=komentar">
            <i class="menu-icon fa fa-comment"></i>
            <span class="menu-text"> Komentar </span>
        </a>

        <b class="arrow"></b>
    </li>
	
	
	<?php
}

// jika menu komentar dipilih, menu komentar aktif
if ($_GET["module"] == "admin") { ?>
    <li class="active open hover highlight">
        <a href="?module=admin">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text"> Admin </span>
        </a>

        <b class="arrow"></b>
    </li>
	

<?php
} 
// jika tidak, menu komentar tidak aktif
else {  ?>
     <li class="hover">
        <a href="?module=admin">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text"> Admin </span>
        </a>

        <b class="arrow"></b>
    </li>
	
	
<?php
}

// jika menu Laporan perhari dipilih, menu Laporan perhari aktif
if ($_GET["module"] == "laporanperhari") { ?>
    <li class="active open hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-file-text-o"></i>
            <span class="menu-text"> Laporan </span>
            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="active open hover">
                <a href="?module=laporanperhari">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan Perhari
                </a>

                <b class="arrow"></b>
            </li>
			
			<li class="hover">
                <a href="?module=laporanperbulan">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan perbulan
                </a>

                <b class="arrow"></b>
            </li>
			
			<li class="hover">
                <a href="?module=laporanpertahun">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan pertahun
                </a>

                <b class="arrow"></b>
            </li>
			<li class="hover">
                <a href="laporanproduk.php" target="_blank">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan Produk
                </a>

                <b class="arrow"></b>
            </li>
<!--
<!--
            <li class="hover">
                <a href="?module=grafik">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Grafik
                </a>

                <b class="arrow"></b>
            </li>-->
        </ul>
    </li>
<?php
}
// jika menu Laporan perbulan dipilih, menu laporan perbulan aktif
elseif ($_GET["module"] == "laporanperbulan") { ?>
    <li class="active open hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-file-text-o"></i>
            <span class="menu-text"> Laporan </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="hover">
                <a href="?module=laporanperhari">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan Perhari
                </a>

                <b class="arrow"></b>
            </li>
			
			<li class="active open hover">
                <a href="?module=laporanperbulan">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan perbulan
                </a>

                <b class="arrow"></b>
            </li>
			
			<li class="hover">
                <a href="?module=laporanpertahun">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan pertahun
                </a>

                <b class="arrow"></b>
            </li>
			<li class="hover">
                <a href="laporanproduk.php" target="_blank">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan Produk
                </a>

                <b class="arrow"></b>
            </li>
<!--
<!--
            <li class="hover">
                <a href="?module=grafik">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Grafik
                </a>

                <b class="arrow"></b>
            </li>-->
        </ul>
    </li>
<?php
}
// jika menu Laporan pertahun dipilih, menu laporan pertahun aktif
elseif ($_GET["module"] == "laporanpertahun") { ?>
    <li class="active open hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-file-text-o"></i>
            <span class="menu-text"> Laporan </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="hover">
                <a href="?module=laporanperhari">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan Perhari
                </a>

                <b class="arrow"></b>
            </li>
			
			<li class="hover">
                <a href="?module=laporanperbulan">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan perbulan
                </a>

                <b class="arrow"></b>
            </li>
			
			<li class="active open hover">
                <a href="?module=laporanpertahun">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan pertahun
                </a>

                <b class="arrow"></b>
            </li>
			<li class="hover">
                <a href="laporanproduk.php" target="_blank">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan Produk
                </a>

                <b class="arrow"></b>
            </li>
<!--
<!--
            <li class="hover">
                <a href="?module=grafik">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Grafik
                </a>

                <b class="arrow"></b>
            </li>-->
        </ul>
    </li>
<?php
}
// jika menu grafik dipilih, menu grafik aktif
elseif ($_GET["module"] == "grafik") { ?>
    <li class="active open hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-file-text-o"></i>
            <span class="menu-text"> Laporan </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="hover">
                <a href="?module=laporanperhari">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan Perhari
                </a>

                <b class="arrow"></b>
            </li>
			
			<li class="hover">
                <a href="?module=laporanperbulan">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan Perbulan
                </a>

                <b class="arrow"></b>
            </li>
			
			<li class="hover">
                <a href="?module=laporanpertahun">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan Pertahun
                </a>

                <b class="arrow"></b>
            </li>
			<li class="hover">
                <a href="laporanproduk.php" target="_blank">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan Produk
                </a>

                <b class="arrow"></b>
            </li>
<!--
<!--
            <li class="active open hover">
                <a href="?module=grafik">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Grafik
                </a>

                <b class="arrow"></b>
            </li>-->
        </ul>
    </li>
<?php
}
// jika tidak, menu laporan tidak aktif
else {  ?>
    <li class="hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-file-text-o"></i>
            <span class="menu-text"> Laporan </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="hover">
                <a href="?module=laporanperhari">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan Perhari
                </a>

                <b class="arrow"></b>
            </li>
			
			<li class="hover">
                <a href="?module=laporanperbulan">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan Perbulan
                </a>

                <b class="arrow"></b>
            </li>
			
			<li class="hover">
                <a href="?module=laporanpertahun">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan Pertahun
                </a>

                <b class="arrow"></b>
            </li>
			<li class="hover">
                <a href="laporanproduk.php" target="_blank">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan Produk
                </a>

                <b class="arrow"></b>
            </li>
<!--
            <li class="hover">
                <a href="?module=grafik">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Grafik
                </a>

                <b class="arrow"></b>
            </li>-->
        </ul>
    </li>
<?php
}



// jika menu password dipilih, menu password aktif
if ($_GET["module"] == "password") { ?>
    <li class="active open hover highlight">
        <a href="?module=password">
            <i class="menu-icon fa fa-lock"></i>
            <span class="menu-text"> Ubah Password </span>
        </a>

        <b class="arrow"></b>
    </li>
<?php
} 
// jika tidak, menu password tidak aktif
else {  ?>
     <li class="hover">
        <a href="?module=password">
            <i class="menu-icon fa fa-lock"></i>
            <span class="menu-text"> Ubah Password </span>
        </a>

        <b class="arrow"></b>
    </li>
<?php
}
}else{
?>
<?php 
// fungsi untuk pengecekan menu aktif
// jika menu beranda dipilih, menu beranda aktif
if ($_GET["module"] == "beranda") { ?>
    <li class="active open hover highlight">
        <a href="?module=beranda">
            <i class="menu-icon fa fa-home"></i>
            <span class="menu-text"> Beranda </span>
        </a>

        <b class="arrow"></b>
    </li>
<?php
} 
// jika tidak, menu beranda tidak aktif
else {  ?>
     <li class="hover">
        <a href="?module=beranda">
            <i class="menu-icon fa fa-home"></i>
            <span class="menu-text"> Beranda </span>
        </a>

        <b class="arrow"></b>
    </li>
<?php
}

// jika menu tentang dipilih, menu tentang aktif
if ($_GET["module"] == "tentang") { ?>
    
<?php
}
// jika menu cara beli dipilih, menu cara beli aktif
elseif ($_GET["module"] == "cara_beli") { ?>
   
<?php
}
// jika tidak, menu informasi tidak aktif
else {  ?>
    
<?php
}

// jika menu konsumen dipilih, menu konsumen aktif


// jika menu barang dipilih, menu barang aktif
if ($_GET["module"] == "barang" || $_GET["module"] == "form_barang") { ?>
    <li class="active open hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-folder-o"></i>
            <span class="menu-text"> Barang </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="active open hover">
                <a href="?module=barang">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Data Barang
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hover">
                <a href="?module=kategori">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Kategori Barang
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
<?php
}
// jika menu kategori dipilih, menu kategori aktif
elseif ($_GET["module"] == "kategori" || $_GET["module"] == "form_kategori") { ?>
    <li class="active open hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-folder-o"></i>
            <span class="menu-text"> Barang </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="hover">
                <a href="?module=barang">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Data Barang
                </a>

                <b class="arrow"></b>
            </li>

            <li class="active open hover">
                <a href="?module=kategori">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Kategori Barang
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
<?php
}
// jika tidak, menu barang tidak aktif
else {  ?>
    <li class="hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-folder-o"></i>
            <span class="menu-text"> Barang </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="hover">
                <a href="?module=barang">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Data Barang
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hover">
                <a href="?module=kategori">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Kategori Barang
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
<?php
}

// jika menu biaya kirim dipilih, menu biaya kirim aktif
if ($_GET["module"] == "biaya_kirim") { ?>
    <li class="active open hover highlight">
        <a href="?module=biaya_kirim">
            <i class="menu-icon fa fa-truck"></i>
            <span class="menu-text"> Biaya Pengiriman </span>
        </a>

        <b class="arrow"></b>
    </li>
<?php
} 
// jika tidak, menu biaya kirim tidak aktif
else {  ?>
     <li class="hover">
        <a href="?module=biaya_kirim">
            <i class="menu-icon fa fa-truck"></i>
            <span class="menu-text"> Biaya Pengiriman </span>
        </a>

        <b class="arrow"></b>
    </li>
<?php
}

// jika menu pesanan dipilih, menu pesanan aktif
if ($_GET["module"] == "pesanan" || $_GET["module"] == "form_pesanan") { ?>
    <li class="active open hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-shopping-cart"></i>
            <span class="menu-text"> Transaksi </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="active open hover">
                <a href="?module=pesanan">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Pesanan
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hover">
                <a href="?module=konfirmasi">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Konfirmasi Pembayaran
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
<?php
}
// jika menu konfirmasi dipilih, menu konfirmasi aktif
elseif ($_GET["module"] == "konfirmasi" || $_GET["module"] == "form_konfirmasi") { ?>
    <li class="active open hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-shopping-cart"></i>
            <span class="menu-text"> Transaksi </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="hover">
                <a href="?module=pesanan">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Pesanan
                </a>

                <b class="arrow"></b>
            </li>

            <li class="active open hover">
                <a href="?module=konfirmasi">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Konfirmasi Pembayaran
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
<?php
}
// jika tidak, menu barang tidak aktif
else {  ?>
    <li class="hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-shopping-cart"></i>
            <span class="menu-text"> Transaksi </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="hover">
                <a href="?module=pesanan">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Pesanan
                </a>

                <b class="arrow"></b>
            </li>

            <li class="hover">
                <a href="?module=konfirmasi">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Konfirmasi Pembayaran
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>
<?php
}

// jika menu komentar dipilih, menu komentar aktif
if ($_GET["module"] == "komentar") { ?>
    <li class="active open hover highlight">
        <a href="?module=komentar">
            <i class="menu-icon fa fa-comment"></i>
            <span class="menu-text"> Komentar </span>
        </a>

        <b class="arrow"></b>
    </li>
<?php
} 
// jika tidak, menu komentar tidak aktif
else {  ?>
     <li class="hover">
        <a href="?module=komentar">
            <i class="menu-icon fa fa-comment"></i>
            <span class="menu-text"> Komentar </span>
        </a>

        <b class="arrow"></b>
    </li>
<?php
}

// jika menu Laporan perhari dipilih, menu Laporan perhari aktif
if ($_GET["module"] == "laporanperhari") { ?>
    
<?php
}
// jika menu Laporan perbulan dipilih, menu laporan perbulan aktif
elseif ($_GET["module"] == "laporanperbulan") { ?>
   
<?php
}
// jika menu Laporan pertahun dipilih, menu laporan pertahun aktif
elseif ($_GET["module"] == "laporanpertahun") { ?>
    
<?php
}
// jika menu grafik dipilih, menu grafik aktif
elseif ($_GET["module"] == "grafik") { ?>
    <li class="active open hover highlight">
        <a href="javascript:void(0);" class="dropdown-toggle">
            <i class="menu-icon fa fa-file-text-o"></i>
            <span class="menu-text"> Laporan </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="hover">
                <a href="?module=laporanperhari">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan Perhari
                </a>

                <b class="arrow"></b>
            </li>
			
			<li class="hover">
                <a href="?module=laporanperbulan">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan Perbulan
                </a>

                <b class="arrow"></b>
            </li>
			
			<li class="hover">
                <a href="?module=laporanpertahun">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan Pertahun
                </a>

                <b class="arrow"></b>
            </li>
			<li class="hover">
                <a href="laporanproduk.php" target="_blank">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Laporan Produk
                </a>

                <b class="arrow"></b>
            </li>
<!--
<!--
            <li class="active open hover">
                <a href="?module=grafik">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Grafik
                </a>

                <b class="arrow"></b>
            </li>-->
        </ul>
    </li>
<?php
}
// jika tidak, menu laporan tidak aktif
?>
<?php




// jika menu password dipilih, menu password aktif
if ($_GET["module"] == "password") { ?>
    <li class="active open hover highlight">
        <a href="?module=password">
            <i class="menu-icon fa fa-lock"></i>
            <span class="menu-text"> Ubah Password </span>
        </a>

        <b class="arrow"></b>
    </li>
<?php
} 
// jika tidak, menu password tidak aktif
else {  ?>
     <li class="hover">
        <a href="?module=password">
            <i class="menu-icon fa fa-lock"></i>
            <span class="menu-text"> Ubah Password </span>
        </a>

        <b class="arrow"></b>
    </li>
	<?php
	}
	}
	?>
	
	
	
	
    <li class="hover">
        <a data-toggle="modal" href="#logout">
            <i class="menu-icon fa fa-power-off"></i>
            <span class="menu-text"> Logout </span>
        </a>

        <b class="arrow"></b>
    </li>
</ul>

