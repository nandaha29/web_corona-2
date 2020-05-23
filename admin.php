<?php
include "koneksi.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- Font -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">

    <title>Update Corona</title>
  </head>
  <body>
    <!-- Navbar -->
    <div class="container-fluid p-2">
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
        <a class="navbar-brand" href="#">MyInfo;</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto"><!-- ml -auto == (margin left auto) spy gak nempel Logo-->
          <a class="nav-item nav-link active" href="#">Halo, ADMIN !</a>
            <a class="nav-item nav-link active" href="#">PETA PENYEBARAN</a>
            <a class="nav-item btn btn-warning tombol" onclick="location.href='logout.php';">LOGOUT</a>
          </div>
        </div>
        </div>
      </nav>
  </div>
  <body >
	<div class="container" style="margin-top:20px">
		<h2>DATA ODP</h2>
		<hr style="border: black solid 5px;">
		<table class="table table-striped table-hover table-sm table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>NO.</th>
                    <th>NAMA LENGKAP</th>
					<th>UMUR</th>
					<th>JENIS KELAMIN</th>
					<th>NO. KARTU IDENTITAS</th>
					<th>ALAMAT</th>
                    <th>SUHU</th>
                    <th>GEJALA</th>
                    <th>HASIL</th>
                    <th>KETERANGAN</th>
				</tr>
			</thead>
			<tbody>
			<?php
				$sql = mysqli_query($kon, "SELECT * FROM tb_pasien ORDER BY id_pasien DESC") or die(mysqli_error($kon));
				if(mysqli_num_rows($sql) > 0){
					$no = 1;
					while($data = mysqli_fetch_assoc($sql)){
            ?>
						<tr>
                            <td><?php echo $no;?></td>
                            <td><?php echo $data['nama_pasien'];?></td>
							<td><?php echo $data['umur'];?></td>
							<td><?php echo $data['jk'];?></td>
							<td><?php echo $data['ki'];?></td>
							<td><?php echo $data['alamat'];?></td>
                            <td><?php echo $data['suhu'];?></td>
							<td><?php echo $data['gejala'];?></td>
							<td><?php echo $data['hasil'];?></td>
                            <td><?php echo $data['ket'];?></td>
							<td>
                                    <a href="#edit<?php echo $data['id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                    <a href="#del<?php echo $data['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                    <?php include('modal.php'); ?>
						        </td>
                        </tr>
            <?php
						$no++;
					}
				}else{
					echo '
					<tr>
						<td colspan="10">Tidak ada data.</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>
        <div> 
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" data-title="t">Tambah Data</button> 
        </div>
        <div id="myModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content"style="background-color: #f7be16; border-radius: 15px;">
                    <form action="tambah.php" method="post">
                        <div class="modal-header" style="background-color: black; color:white;">
                            <h5 class="modal-title">Tambah Pasien</h5>
                            <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
                        </div>
                        <div class="modal-body" style="color: black;">       
                            <div class="form-group">
                                <label class="control-label"><b>Nama Lengkap : </b></label>
                                <input type="text" name="nama"class="form-control">
                            </div>                 
                            <div class="form-group">
                                <label class="control-label"><b>Umur : </b></label>
                                <input type="number" name="umur" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label"><b>Jenis Kelamin : </b></label><br>
                                <input type="radio"  name="jk" value="perempuan">
                                <label for="perempuan">P</label><br>
                                <input type="radio"  name="jk" value="laki-laki">
                                <label for="laki-laki">L</label><br>
                            </div>
                            <div class="form-group">
                                <label class="control-label"><b>No. Kartu Identitas : </b></label>
                                <input type="number" name="ki" class="form-control">
                            </div>
                            <div class="form-group"><b>Alamat : </b></label>
                            <input type="text" name="alamat" class="form-control">
                            </div>
                            <div class="form-group"><b>Suhu : </b></label><br>
                            <input type="radio"  name="suhu" value="<38 C">
                            <label for="<38 C">kurang (38 C)</label><br>
                            <input type="radio" name="suhu" value=">=38 C">
                            <label for=">=38 C">lebih atau sama (38 C)</label><br>
                            </div> 
                            <div class="form-group"><b>Gejala : </b></label><br>
                            <input type="radio"  name="gejala" value="muncul">
                            <label for="muncul">muncul</label><br>
                            <input type="radio" name="gejala" value="tidakmuncul">
                            <label for="tidakmuncul">tidak muncul</label><br>
                            </div> 
                            <div class="form-group"><b>Hasil : </b></label><br>
                            <input type="radio" name="hasil" value="negatif">
                            <label for="negatif">negatif</label><br>
                            <input type="radio"  name="hasil" value="beresiko">
                            <label for="beresiko">beresiko</label><br>
                            <input type="radio" name="hasil" value="positif">
                            <label for="positif">positif</label><br>
                            </div>
                            <div class="form-group"><b>Keterangan : </b></label>
                            <input type="text" name="ket" class="form-control">
                            </div>                               
                        </div>
                        <div class="modal-footer" style="background-color: black;">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
	</div>
	


    <!-- end Navbar --> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
