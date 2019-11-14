<?php  
// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['user_email']) && empty($_SESSION['user_password'])){
    echo "<script type='text/javascript'>alert('Anda harus login terlebih dahulu!');</script>
          <meta http-equiv='refresh' content='0; url=?page=home'>";
}
// jika user sudah login, maka jalankan perintah untuk ubah password
else { 
    if ($_GET['form']=='view') { ?>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            <i style="margin-right:6px" class="fa fa-shopping-cart"></i>
                            Data Pembelian
                        </h3>
                        <ol class="breadcrumb">
                            <li><a href="?page=home">Beranda</a>
                            </li>
                            <li class="active">Data Pembelian</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr > 
                                                <th>No.</th>
                                                <th>Tanggal Transaksi</th>
                                                <th>Jumlah</th>
                                                <th>Total Pembayaran</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>   

                                        <tbody>
                                        <?php
                                        $no = 1;
                                        $query = mysqli_query($mysqli, "SELECT * FROM tbl_transaksi
                                                                        WHERE id_konsumen='$_SESSION[id_konsumen]'
                                                                        ORDER BY id_transaksi DESC")
                                                                        or die('Ada kesalahan pada query transaksi: '.mysqli_error($mysqli));
                                  
                                        while ($data = mysqli_fetch_assoc($query)) { 
                                            $tgl               = substr($data['tanggal_transaksi'],0,10);
                                            $exp               = explode('-',$tgl);
                                            $tanggal_transaksi = tgl_eng_to_ind($exp[2]."-".$exp[1]."-".$exp[0]);

                                            $query1 = mysqli_query($mysqli, "SELECT COUNT(id_detail) as jumlah FROM tbl_transaksi_detail
                                                                        WHERE id_transaksi='$data[id_transaksi]'")
                                                                        or die('Ada kesalahan pada query detail: '.mysqli_error($mysqli));
                                  
                                            $data1 = mysqli_fetch_assoc($query1);
                                        ?>
                                            <tr>
                                                <td width='30' class='center'><?php echo $no; ?></td>
                                                <td width='100'><?php echo $tanggal_transaksi; ?></td>
                                                <td width='80'><?php echo $data1['jumlah']; ?> Barang</td>
                                                <td width='100' >Rp. <?php echo format_rupiah_nol($data['total_bayar']); ?></td>
                                                <td width='120'><?php echo $data['status']; ?></td>
                                                <td width='50' class="center">
                                                    <div>
                                                        <a data-toggle="tooltip" data-placement="top" title="Detail" class="btn btn-primary btn-sm" href="?page=pembelian&form=detail&transaksi=<?php echo $data['id_transaksi']; ?>">
                                                            Detail
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                        </tbody>           
                                    </table>
                                </div>
                            </div>
                        </div> <!-- /.panel -->
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div>
        </div>
        <!-- /.row -->
    <?php
    }

    if ($_GET['form']=='detail') { 
        $query = mysqli_query($mysqli, "SELECT * FROM tbl_konsumen as a INNER JOIN tbl_kabkota as b INNER JOIN tbl_provinsi as c 
                                        ON a.kota=b.id_kabkota AND a.provinsi=c.id_provinsi
                                        WHERE id_konsumen='$_SESSION[id_konsumen]'")
                                        or die('Ada kesalahan pada query tampil data konsumen: '.mysqli_error($mysqli));

        $data = mysqli_fetch_assoc($query);

        $id_konsumen   = $data['id_konsumen'];
        $nama_konsumen = $data['nama_konsumen'];
        $alamat        = $data['alamat'];
        $id_kabkota    = $data['id_kabkota'];
        $nama_kabkota  = $data['nama_kabkota'];
        $id_provinsi   = $data['id_provinsi'];
        $nama_provinsi = $data['nama_provinsi'];
        $kode_pos      = $data['kode_pos'];
        $telepon       = $data['telepon'];
        $email         = $data['email'];
    ?>
       <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            <i style="margin-right:6px" class="fa fa-shopping-cart"></i>
                            Detail Pembelian
                        </h3>
                        <ol class="breadcrumb">
                            <li><a href="?page=home">Beranda</a>
                            </li>
                            <li class="active">Detail Pembelian</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-body">    
                                <h4>Alamat Tujuan</h3>
                                <p>
                                    <i style="margin-right:7px" class="fa fa-user"></i>
                                    <?php echo $nama_konsumen; ?>
                                </p>
                                <p>
                                    <i style="margin-right:7px" class="fa fa-map-marker"></i>
                                    <?php echo $alamat; ?>, <?php echo $nama_kabkota; ?>, <?php echo $nama_provinsi; ?>, <?php echo $kode_pos; ?>
                                </p>
                                <p>
                                    <i style="margin-right:7px" class="fa fa-phone"></i>
                                    <?php echo $telepon; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr > 
                                                <th>No.</th>
                                                <th>Gambar</th>
                                                <th>Nama Barang</th>
                                                <th>Harga</th>
                                                <th>Jumlah Beli</th>
                                                <th>Jumlah Bayar</th>
                                            </tr>
                                        </thead>   

                                        <tbody>
                                        <?php
                                        $no = 1;
                                        $query = mysqli_query($mysqli, "SELECT * FROM tbl_transaksi_detail as a INNER JOIN tbl_barang as b INNER JOIN tbl_transaksi as c
                                                                        ON a.id_barang=b.id_barang AND a.id_transaksi=c.id_transaksi
                                                                        WHERE c.id_transaksi='$_GET[transaksi]'")
                                                                        or die('Ada kesalahan pada query detail transaksi: '.mysqli_error($mysqli));
                                  
                                        while ($data = mysqli_fetch_assoc($query)) { 
                                            $id_barang    = $data['id_barang'];
                                            $jumlah_beli  = $data['jumlah_beli'];
                                            $jumlah_bayar = $data['jumlah_bayar'];
                                        ?>
                                            <tr>
                                                <td width='40' class='center'><?php echo $no; ?></td>
                                                <td width='60'><img src="images/barang/<?php echo $data['gambar']; ?>" width="150"></td>
                                                <td width='150'><?php echo $data['nama_barang']; ?></td>
                                                <td width='120' >Rp. <?php echo format_rupiah_nol($data['harga']); ?></td>
                                                <td width='100'><?php echo $jumlah_beli; ?></td>
                                                <td width='120'>Rp. <?php echo format_rupiah_nol($jumlah_bayar); ?></td>
                                            </tr>
                                        <?php
                                            $no++;
                                        }

                                        $query1 = mysqli_query($mysqli, "SELECT sum(a.jumlah_bayar) as total, a.id_transaksi, b.id_transaksi, b.id_konsumen
                                                                        FROM tbl_transaksi_detail as a INNER JOIN tbl_transaksi as b
                                                                        ON a.id_transaksi=b.id_transaksi
                                                                        WHERE b.id_transaksi='$_GET[transaksi]'")
                                                                        or die('Ada kesalahan pada query total bayar: '.mysqli_error($mysqli));
                                  
                                        $data1 = mysqli_fetch_assoc($query1);
                                        $total_bayar = $data1['total'];

                                        $query2 = mysqli_query($mysqli, "SELECT * FROM tbl_biaya_kirim
                                                                        WHERE provinsi='$id_provinsi' AND kabkota='$id_kabkota'")
                                                                        or die('Ada kesalahan pada query biaya kirim: '.mysqli_error($mysqli));
                                  
                                        $data2 = mysqli_fetch_assoc($query2);
                                        $biaya_kirim = $data2['biaya'];

                                        $total_pembayaran = $total_bayar + $biaya_kirim;
                                        ?>
                                            <tr>
                                                <td align="right" colspan="5"><strong>Total Harga</strong></td>
                                                <td align="right"><strong>Rp. <?php echo format_rupiah_nol($total_bayar); ?></strong></td>
                                            </tr><tr>
                                                <td align="right" colspan="5"><strong>Biaya Kirim</strong></td>
                                                <td align="right"><strong>Rp. <?php echo format_rupiah_nol($biaya_kirim); ?></strong></td>
                                            </tr>
                                            <tr>
                                                <td align="right" colspan="5"><strong>Total Pembayaran</strong></td>
                                                <td align="right"><strong>Rp. <?php echo format_rupiah_nol($total_pembayaran); ?></strong></td>
                                            </tr>
                                        </tbody>           
                                    </table>
                                </div>
                            </div>
                        </div> <!-- /.panel -->

                        <div class="">
                            <a style="width:110px" href="?page=pembelian&form=view" class="btn btn-primary">Kembali</a>
                        </div>
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div>
        </div>
        <!-- /.row -->
    <?php
    }
}
?>

