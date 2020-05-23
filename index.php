<!-- <?php
include 'koneksi.php';
?> -->
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
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
        <a class="navbar-brand" href="#">MyInfo;</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto"><!-- ml -auto == (margin left auto) spy gak nempel Logo-->
            <a class="nav-item nav-link active" href="logadmin.php">ADMIN</a>
            <a class="nav-item nav-link active" href="aboutme.php">ABOUT ME</a>
            <a class="nav-item btn btn-outline-warning tombol mr-3" href="register.php">REGISTER</a>
            <a class="nav-item btn btn-warning tombol" href="#">LOGIN</a>
          </div>
        </div>
        </div>
      </nav>
    <!-- end Navbar -->    
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Update Data COVID-19</h1>
        </div>
      </div>

    <!-- END Jumbotron -->
    <!-- Container  --> <!-- spy di tengah semua -->
    <div class="container">

        <!-- Info Panel -->
        <div class="row justify-content-center"> <!--ini fleksbox utk just s/d center spy sesuatu berada di tengah-->
          <div class="col-11 info-panel">
            <div class="row">
              <div class="col-lg">
                <img src="img/virus.png" alt="virus" class="float-left">
                <h4>Apa Itu COVID-19?</h4>
                <p>fakta seputar virus</p>
                <p><a class="btn btn-warning tombol" href="infocov.php">Cek yuk</a></p>                
              </div>
              <div class="col-lg">
                <img src="img/shield.png" alt="shield" class="float-left">
                <h4>Cara Pencegahan</h4>
                <p>mencegah lebih baik </p>
                <p><a class="btn btn-warning tombol" href="pencegahan.php">Cek yuk</a></p>   
              </div>
              <div class="col-lg">
                <img src="img/kit.png" alt="kit" class="float-left">
                <h4>Gejala Awal Penyakit</h4>
                <p>lakukan pemeriksaan </p>
                <p><a class="btn btn-warning tombol" href="gejala.php">Cek yuk</a></p>   
              </div>
              <div class="col-lg">
                <img src="img/phone.png" alt="phone" class="float-left">
                <h4>Kontak Penting</h4>
                <p>Pelayanan Kesehatan</p>
                <p><a class="btn btn-warning tombol" href="kontak.php">Cek yuk</a></p>   
              </div>
            </div>
          </div>
        </div>

        <!-- End Info Panel -->
        <!-- Worspace -->
        <div class="row workingspace">
          <div class="col-lg">
            <img src="img/dokter1.jpg" alt="dokter1" class="img-fluid rounded"> 
          </div>  
            <div class="col-lg">
              <h3>Indonesia Atasi Pandemi COVID-19</h3>
              <p>Seluruh Indonesia juga Dunia sedang bersatu mengatasi Corona Virus Disease 2019 (COVID-19). Siapapun kita bisa berkontribusi: Selalu update dengan informasi yang benar, serta jaga diri, keluarga, dan komunitas agar terhindar dari penyebaran wabah ini. Bersama, kita pasti bisa.</p>
            </div>
        </div>
        <!-- END Worspace -->
    

        <!-- Info -->
        <section id="Info" class="info">
              <div class="row mb-4 pt-4">
                  <div class="col text-center">
                      <h1>Data Update Kota Batu </h1>
                  </div>
              </div>
              <div class="row mb-4">
                  <div class="col-md">
                      <div class="card text-white bg-primary">
                          <div class="card-body">
                            <h4>Total ODR</h4>
                            <h6 class="card-subtitle mb-2 ">(Orang Dengan Resiko)</h6>
                            <h3>230</h3>
                              <p class="card-text">dari kasus se-Kota Batu</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md">
                    <div class="card text-white bg-primary">
                        <div class="card-body">
                          <h4>Total OTG</h4>
                          <h6 class="card-subtitle mb-2">(Orang Tanpa Gejala)</h6>
                          <h3>10</h3>
                            <p class="card-text">dari kasus se-Kota Batu</p>
                        </div>
                    </div>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-md">
                  <div class="card text-dark bg-warning">
                      <div class="card-body">
                        <h4>Total ODP</h4>
                        <h6 class="card-subtitle mb-2" >(Orang Dalam Pemantauan)</h6>
                        <h3>46</h3>
                          <p class="card-text">dari kasus se-Kota Batu</p>
                      </div>
                  </div>
              </div>
            
              <div class="col-md">
                <div class="card text-dark bg-warning">
                    <div class="card-body">
                      <h4>Total PDP</h4>
                      <h6 class="card-subtitle mb-2 ">(Pasien Dalam Pengawasan)</h6>
                      <h3>10</h3>
                        <p class="card-text">dari kasus se-Kota Batu</p>
                    </div>
                </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-md">
              <div class="card text-white bg-danger">
                  <div class="card-body">
                    <h4>Total Konfirm</h4>
                    <h6 class="card-subtitle mb-2 ">Orang Positif Corona</h6>
                    <h3>1</h3>
                      <p class="card-text">dari kasus se-Kota Batu</p>
                  </div>
              </div>
          </div>
          <div class="col-md">
            <div class="card text-white bg-success">
                <div class="card-body">
                  <h4>Total Sembuh</h4>
                  <h6 class="card-subtitle mb-2 ">Orang berhasil sembuh</h6>
                  <h3>1</h3>
                    <p class="card-text">dari kasus se-Kota Batu</p>
                </div>
            </div>
        </div>
        <div class="col-md">
          <div class="card text-white bg-secondary">
              <div class="card-body">
                <h4>Total Meninggal</h4>
                <h6 class="card-subtitle mb-2 ">PDP Meninggal</h6>
                <h3>1</h3>
                  <p class="card-text">dari kasus se-Kota Batu</p>
              </div>
          </div>
      </div>
              
              <div class="col">

              <div class="card border-info mb-3" style="max-width: 18rem;">
                <div class="card-header">Pembaruan Terakhir</div>
                <div class="card-body text-info">
                  <h5 class="card-title">23 April 2020</h5>
                </div>
              </div>
            </div>
          </div>
      </section>
        <!-- End Info -->
</div>

<footer class="bg-dark text-white">
      <div class="container">
          <div class="row pt-3">
              <div class="col text-center">
                  <p>Copyright Nanda_Hafiza_Y_32/XR5</p>
              </div>
          </div>
      </div>
  </footer>

 <!-- <footer>
    <div class="container-fluid p-0">
            <div class="row text-left">
                <div class="col-md-5 col-sm-5">
                    <h4 class="text-light">COVID.19.GO.ID</h4>
                    <p class="pt-4 text-muted">HOTLINE <br> Whatsapp :
                        <span class = "span">081133399000</span><br> Telepon : <span class = "span">119</span>
                    </p>
                    <p class="pt-4 text-muted">WEBSITE</p>
                    <p class="text-muted">
                    <span class = "span">www.covid19.go.id</span><br><span class = "span">www.who.int/emergencies/diseases/novel-coronavirus-2019</span>
                    <br><span class = "span">infeksiemerging.kemkes.go.id</span>
                    </p>
                </div>
                <div class="col-md-5 col-sm-12">
                </div>
                <div class="col-md-2 col-sm-12">
                    <h4 class="text-light">Follow me</h4>
                    <div class="column text-light">
                        <a href="https://www.instagram.com/nand_aha29/"><i class="fab fa-instagram"></i></a>
                    </div><br><br><br>
                    <h4 class="text-light">SUMBER</h4>
                    <div class="column text-light">
                        <a>who.int</a><br>
                        <a>covid19.go.id</a>
                    </div>
                </div>
            </div>
        </div>
</footer>  -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>