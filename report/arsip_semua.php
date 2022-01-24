<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Arsip</title>
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
                        <h3>DATA SELURUH ARSIP</h3>
                        <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ruang_persediaanbarang</th><th>no_rak</th><th>no_laci</th><th>no_boks</th><th>nama_barang</th><th>kode_barang</th><th>tgl_pembelian</th><th>kurir_pengantarbarang</th><th>penjual</th><th>status</th><th>ket</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_barang";
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
                                    <td><?= $data['ruang_persediaanbarang'] ?></td>
                                    <td><?= $data['no_rak'] ?></td>
                                    <td><?= $data['no_laci'] ?></td>
                                    <td><?= $data['no_boks'] ?></td>
                                    <td><?= $data['kode_barang'] ?></td>
                                    <td><?= $data['tgl_pembelian'] ?></td>
                                    <td><?= $data['kurir_pengantarbarang'] ?></td>
                                    <td><?= $data['penjual'] ?></td>
                                    <td><?= $data['status'] ?></td>
                                    <td><?= $data['ket'] ?></td>
                                   
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                       
                    </table>
                    
                    </div>
                </div>
            </div>
    </body>
</html>