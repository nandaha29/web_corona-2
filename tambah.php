<?php
    include("koneksi.php");
    if(isset($_POST['submit'])){
        $nama			= @$_POST['nama'];
        $umur			= @$_POST['umur'];
        $jk			    = @$_POST['jk'];
        $ki	            = @$_POST['ki'];
        $alamat	    	= @$_POST['alamat'];
        $suhu	    	= @$_POST['suhu'];
        $gejala	    	= @$_POST['gejala'];
        $hasil	    	= @$_POST['hasil'];
        $ket	    	= @$_POST['ket'];
        
        $cek = mysqli_query($kon, "SELECT * FROM tb_pasien WHERE nomor=''") or die(mysqli_error($kon));
        
        if(mysqli_num_rows($cek) == 0){
            $sql = mysqli_query($kon, "INSERT INTO t_pasien(nama, umur, jk, ki, alamat, suhu, gejala, hasil, ket) 
            VALUES('$nama', '$umur', '$jk', '$ki','$alamat', '$suhu', '$gejala', '$hasil', '$ket',)") or die(mysqli_error($kon));
            if($sql){
                echo '<script>alert("Berhasil menambahkan data."); document.location="admin.php";</script>';
            }else{
                echo '<div class="alert alert-warning">Gagal melakukan proses tambah pasien</div>';
            }
        }else{
            echo '<div class="alert alert-warning">Gagal, pasien sudah terdaftar.</div>';
        }
    }
?>