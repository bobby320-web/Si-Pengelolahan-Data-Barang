<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_barang WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Arsip</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="ruang_persediaanbarang" class="col-sm-3 control-label">Ruang Arsip</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="ruang_persediaanbarang" class="form-control">
                                    <option value="Arsip Pidana">Arsip Pidana</option>
                                    <option value="Arsip Perdata">Arsip Perdata</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">Nomor Rak</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_rak" value="<?=$data['no_rak']?>"class="form-control" id="inputEmail3" placeholder="Nomor Rak/Lemari">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="no_laci" class="col-sm-3 control-label">Nomor Tingkat/Laci</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_laci" value="<?=$data['no_laci']?>"class="form-control" id="inputEmail3" placeholder="Nomor Tingkat/Laci">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="no_boks" class="col-sm-3 control-label">Nomor Boks</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_boks" value="<?=$data['no_boks']?>"class="form-control" id="inputEmail3" placeholder="Nomor Boks">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nama_barang" class="col-sm-3 control-label">Nama Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_barang" value="<?=$data['nama_barang']?>"class="form-control" id="inputEmail3" placeholder="Para Pihak">
                            </div>
                        </div>
							<div class="form-group">
                            <label for="kode_barang" class="col-sm-3 control-label">Kode Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode_barang" value="<?=$data['kode_barang']?>"class="form-control" id="inputEmail3" placeholder="Nomor Perkara" >
                            </div>
                        </div>
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                          
                            <!--untu tahun-->
                           <div class="form-group">
                            <label for="tgl_pembelian" class="col-sm-3 control-label">Tanggal Pembelian </label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_pembelian" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal pembelian barang" required>
                            </div>
                        </div>
                        </div>
                        <!--end tanggal lahir-->           

                        <div class="form-group">
                            <label for="kurir_pengantarbarang" class="col-sm-3 control-label">Pengantar Berkas</label>
                            <div class="col-sm-9">
                                <input type="text" name="kurir_pengantarbarang" value="<?=$data['kurir_pengantarbarang']?>" class="form-control" id="inputPassword3" placeholder="Pengantar Berkas">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="penjual" class="col-sm-3 control-label">Penerima Berkas</label>
                            <div class="col-sm-9">
                                <input type="text" name="penjual" value="<?=$data['penjual']?>" class="form-control" id="inputPassword3" placeholder="Penerima Berkas">
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
                                <input type="text" name="ket" value="<?=$data['ket']?>" class="form-control" id="inputPassword3" placeholder="Keterangan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Arsip</button>
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

    $ruang_persediaanbarang=$_POST['ruang_persediaanbarang'];
    $no_rak=$_POST['no_rak'];
	$no_laci=$_POST['no_laci'];
    $no_boks=$_POST['no_boks'];
	$nama_barang=$_POST['nama_barang'];
    $kode_barang=$_POST['kode_barang'];
    $tgl_pembelian=$_POST['tgl_pembelian'];
    $kurirpengantarbarang=$_POST['kurir_pengantarbarang'];
	$penjual=$_POST['penjual'];
    $status=$_POST['status'];
	$ket=$_POST['ket'];
    //buat sql
    $sql="UPDATE tbl_barang SET ruang_persediaanbarang='$ruang_persediaanbarang',no_rak='$no_rak',no_laci='no_laci',no_boks='$no_boks',nama_barang='$nama_barang',
	kode_barang='$kode_barang',tgl_pembelian='$tgl_pembelian',penjual='$penjual',kurir_pengantarbarang='$kurirpengantarbarang',status='$status',ket='$ket' WHERE id ='$id'"; 
    echo $sql;
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=report');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



