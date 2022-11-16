<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body>
          <h1>latihan login XII RPL 2<h1>
</br>
<?php
if(isset($_GET['pesan'])){
          if($_GET['pesan']=="gagal"){
                    echo "login gagal! username dan password salah!";
          }else if($_GET['pesan']=="logout"){
                    echo "anda telah berhasil logout";
          }else if($_GET['pesan']=="belum login"){
                    echo "anda harus login untuk mengakses halaman admin";
          }
}
?>
<br/>
<br/>
<form method="POST" action="login.php">
          <table>
                    <tr>
                              <td>Username</td>
                              <td>:</td>
                              <td><input type="text" name="username" placeholder="masukan username"></td>
</tr>
<tr>
          <td>Password</td>
          <td>:</td>
          <td><input type="password" name="password"placeholder="masukkan password"></td>
</tr>
<tr>
          <td></td>
          <td></td>
          <td><input type="submit"value="login"></td>
</tr>
</table>
</form>
</body>
</html>