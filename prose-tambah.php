<?php
include("koneksi.php");

if(isset($_POST['simpan'])){
          $nama = $_POST['nama'];
          $agama = $_POST['agama'];

          $sql = "INSERT INTO tambah (nama, agama) VALUES ('$nama', '$agama')";
          $query = mysqli_query($db, $sql);

          if ( $query ){
                    echo "Selamat Sudah Bisa";
          } else {
                    echo "Maaf Tidak Bisa";
          }
}
?>