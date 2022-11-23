<?php
include("koneksi.php");
if(isset($_POST['daftar'])){
          $Nik=$_POST['username'];
          $jk=$_POST['password'];
          $nama=$_POST['nama'];
          $tgl=$_POST['tanggallahir'];
          $telp=$_POST['notelp'];
          $kota=$_POST['kota'];

          $sql ="INSERT INTO user(username,password,namalengkap,tanggallahir,notelp,kota) VALUES ('$Nik','$jk','$nama','$tgl','$telp','$kota')";
          $query = mysqli_query ($db, $sql);
          if($query){
                    header("Location:index.php");         
          } else {
                    echo "gagal mendaftar";
}
}
?>