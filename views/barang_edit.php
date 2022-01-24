<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM penjualanbarang WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>

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
                            <label for="kode_barang" class="col-sm-3 control-label">kode barang</label>
                               <div class="col-sm-2 col-xs-9">
                                <input type="text" name="kode_barang"  value="<?=$data['kode_barang']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Rak atau Lemari" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="penjualan" class="col-sm-3 control-label">penjualan</label>
                            <div class="col-sm-9">
                                <input type="text" name="penjualan"  value="<?=$data['penjualan']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Rak atau Lemari" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="tanggal_pembelian" class="col-sm-3 control-label">tanggal pembelian</label>
                            <div class="col-sm-9">
                                <input type="text" name="tgl_pembelian"  value="<?=$data['tgl_pembelian']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Laci" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="tanggal_pengiriman" class="col-sm-3 control-label">tanggal pengiriman</label>
                            <div class="col-sm-9">
                                <input type="text" name="tgl_pengiriman"  value="<?=$data['tgl_pengiriman']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Boks" required>
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label for="lama_pengiriman" class="col-sm-3 control-label">lama pengiriman</label>
                            <div class="col-sm-9">
                                <input type="text" name="lama_pengiriman"  value="<?=$data['lama_pengiriman']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Kode Barang" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="Keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-3">
                                <input type="text" name="keterangan"  value="<?=$data['keterangan']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal pembelian barang" required>
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
  $kodebarang=$_POST['kode_barang'];
	$penjualan=$_POST['penjualan'];
	$tanggalpembelian=$_POST['tgl_pembelian'];
	$tanggalpengiriman=$_POST['tgl_pengiriman'];
  $lamapengiriman=$_POST['lama_pengiriman'];

	$keterangan=$_POST['keterangan'];
  
    //buat sql
    $sql="UPDATE penjualanbarang SET kode_barang = '$kodebarang', penjualan='penjualan', tgl_pembelian='$tanggalpembelian',tgl_pengiriman='$tanggalpengiriman', lama_pengiriman=' $lamapengirima',
    keterangan='$keterangan' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=barang&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
