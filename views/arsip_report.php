<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Barang</h3>
                </div>
                <div class="panel-body">
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
                        <tfoot>
                            <tr>
                                <td colspan="9">
                                    <a href="report/arsip_semua.php" target="_blank" class="btn btn-info btn-sm">
                                        <span class="fa fa_print"></span> Cetak Semua Arsip

                                    </a>
                                  
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    
                </div>
            </div>

        </div>
    </div>
</div>

