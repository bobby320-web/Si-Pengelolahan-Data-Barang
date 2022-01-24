<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Peminjaman Arsip</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Arsip Pengadilan Negeri Kisaran </h2>
                        <h4>Jalan Jendral Ahmad Yani No. 33, Sei Renggas, Kisaran, Sendang Sari <br> Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA SELURUH PEMINJAMAN ARSIP</h3>
                      <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th><th>kode_barang</th><th>penjualan</th><th>tgl_pembelian</th><th>tgl_pengiriman</th><th>lama_pengiriman</th><th>keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM penjualanbarang";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['kode_barang'] ?></td>
                                    <td><?= $data['penjualan'] ?></td>
                                    <td><?= $data['tgl_pembelian'] ?></td>
                                    <td><?= $data['tgl_pengiriman'] ?> hari</td>
                                    <td><?= $data['lama_pengiriman'] ?></td>
                                    <td><?= $data['keterangan'] ?></td>
                                  
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
 <tfoot>
                            <tr>
                                <td colspan="9">
                                    <a href="report/peminjaman_semua.php" target="_blank" class="btn btn-info btn-sm">
                                        <span class="fa fa_print"></span> Cetak Semua Arsip

                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    </div>
                </div>
            </div>
    </body>
</html>
