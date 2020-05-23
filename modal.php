<?php include("koneksi.php"); ?>
<div class="modal fade" id="del<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data Buku</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($koneksi,"SELECT * FROM t_pasien WHERE id='".$data['id']."'");
					$deleteData=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
                    <h5><center>Kode Buku: <strong><?php echo $deleteData['kode_buku']; ?></strong></center></h5> 
					<h5><center>Judul Buku: <strong><?php echo $deleteData['judul_buku']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
 
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
				<?php
					$edit=mysqli_query($koneksi,"SELECT * FROM t_pasien WHERE id='".$data['id']."'");
					$editData=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
                <form method="POST" action="edit.php?id=<?php echo $editData['id']; ?>">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data Pasien</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">       
                        <div class="form-group">
                            <label class="control-label">Nama : </label>
                            <input type="text" name="nama"class="form-control" value="<?php echo $editData['nama']; ?>" readonly>
                        </div>  
                        <div class="form-group">
                            <label class="control-label">Umur : </label>
                            <input type="number" name="umur"class="form-control" value="<?php echo $editData['umur']; ?>" readonly>
                        </div> 
                        <div class="form-group">
                            <label class="control-label">Jenis Kelamin : </label><br>
                            <input type="radio"  name="jk" value="<?php echo $editData['jk']; ?>" readonly>
                        </div> 
                        <div class="form-group">
                            <label class="control-label">No. Kartu Identitas : </label>
                            <input type="text" name="ki"class="form-control" value="<?php echo $editData['ki']; ?>" readonly>
                        </div>                
                        <div class="form-group">
                            <label class="control-label">Alamat : </label>
                            <input type="text" name="nama"class="form-control" value="<?php echo $editData['alamat']; ?>" readonly>
                        </div> 
                        <div class="form-group">
                            <label class="control-label">Suhu : </label>
                            <input type="radio" name="suhu" value="<?php echo $editData['suhu']; ?>" required>
                        </div> 
                        <div class="form-group">
                            <label class="control-label">Gejala : </label>
                            <input type="radio" name="gejala" value="<?php echo $editData['gejala']; ?>" required>
                        </div> 
                        <div class="form-group">
                            <label class="control-label">Hasil : </label>
                            <input type="radio" name="hasil" value="<?php echo $editData['hasil']; ?>" required>
                        </div> 
                        <div class="form-group">
                            <label class="control-label">Keterangan : </label>
                            <input type="text" name="ket"class="form-control" value="<?php echo $editData['ket']; ?>" required>
                        </div>  
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                        <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                    </div>
				</form>
            </div>
        </div>
    </div>