<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Barang</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="ruang_persediaanbarang" class="col-sm-3 control-label">Ruang Persediaan Barang</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="ruang_persediaanbarang" class="form-control">
                                    <option value="Arsip Pidana">Arsip Data barang</option>
                                    <option value="Arsip Perdata">Arsip masing-masing barang</option>
                                </select>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">Nomor Rak</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_rak" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Rak atau Lemari" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_laci" class="col-sm-3 control-label">Nomor Laci</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_laci" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Laci" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">Nomor Boks</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_boks" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Boks" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama_barang" class="col-sm-3 control-label">Nama barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_barang" class="form-control" id="inputEmail3" placeholder="Inputkan Nama barang yang tersedia di gudang" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kode_barang" class="col-sm-3 control-label">Kode Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode_barang"class="form-control" id="inputEmail3" placeholder="Inputkan Kode Barang" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_pembelian" class="col-sm-3 control-label">Tanggal Pembelian </label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_pembelian" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal pembelian barang" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="kurir_pengantarbarang" class="col-sm-3 control-label">Kurir Pengantar barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="kurir_pengantarbarang" class="form-control" id="inputPassword3" placeholder="Inputkan Staff Pengantar Barang " required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="penjual" class="col-sm-3 control-label">Penjual</label>
                            <div class="col-sm-9">
                                <input type="text" name="penjual" class="form-control" id="inputPassword3" placeholder="Inputkan nama penjual barang" required>
                        </div>
                        </div>


                        <!--Status-->

                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status" class="form-control">
									<option value="Ada">Ada</option>
									<option value="Dipinjam">Dipinjam</option>
									<option value="Penghapusan">Penghapusan</option>
								</select>
                            </div>
                        </div>
                        <!--Akhir Status-->

						<div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Arsip</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Arsip
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $ruangpersediaanbarang=$_POST['ruang_persediaanbarang'];
	$rak=$_POST['no_rak'];
	$laci=$_POST['no_laci'];
	$boks=$_POST['no_boks'];
  $namabarang=$_POST['nama_barang'];

	$kodebarang=$_POST['kode_barang'];
  $tglpembelian=$_POST['tgl_pembelian'];
  $kurirpengantarbarang=$_POST['kurir_pengantarbarang'];
	$penjual=$_POST['penjual'];
  $status=$_POST['status'];
	$ket=$_POST['ket'];
    //buat sql
    $sql="INSERT INTO tbl_barang VALUES ('','$ruangpersediaanbarang','$rak','$laci','$boks','$namabarang','$kodebarang','$tglpembelian','$kurirpengantarbarang','$penjual','$status','$ket')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=pengolahan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
