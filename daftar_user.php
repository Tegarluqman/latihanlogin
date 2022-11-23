<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body>
<h1>FORM PENDAFTARAN</h1>
          <form action="proses-daftaruser.php" method=POST>
                    <form>
                    <fieldset>
                              <P>
                              <label for="username">Username:</label>
                              <input type="text" name="username"/>
</P>
<P>
          <label for="password">Password:</label>
          <input type="password" name="password"/>
</p>
<P>
                              <label for="namalengkap">Nama:</label>
                              <input type="text" name="nama"/>
</P>
<P>
                              <label for="tanggallahir">tanggal lahir:</label>
                              <input type="date" name="tanggallahir"/>
</P>
<P>
                              <label for="notelp">no telp:</label>
                              <input type="number" name="notelp"/>
</P>
<P>
                              <label for="kota">asal kota:</label>
                              <input type="text" name="kota"/>
</P>
<input type="submit" value="Daftar" name="daftar"/>

                    </fieldset>
                    <form>
</body>
</html>