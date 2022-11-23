<?php
include("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body>
<?php
          session_start();
          if($_SESSION['status']!="login"){
                    header("location;../index.php?pesan=login");

          }
          ?>
          <h4>selamat datang, <?php echo $_SESSION['username'];?>! anda telah login. </h4>
          <h1>DATA WARGA DESA SUKAMUNDUR</h1>
          <?php
include("koneksi.php");?>
          <form action="databarang.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
          <?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}?>
</br>
</br>
          <table border="1">
                    <tr>
                              <th>ID</th>
                              <th>NIK</th>
                              <th>NAMA</th>
                              <th>AGAMA</th>
                    </tr>
                    <td>
                    <?php
                    include("koneksi.php");
                    if(isset($_GET['cari'])){
                              $cari = $_GET['cari'];
                              $sql ="SELECT * FROM data_ganjil WHERE NAMA LIKE '%".$cari."%'";	
                              $query=mysqli_query($db, $sql);                             			
                    }else{
                              $sql='SELECT*FROM data_ganjil';
                              $query=mysqli_query($db, $sql);		
                    };
                    while($data=mysqli_fetch_array($query)){
                              echo "<tr>";
                              echo "<td>".$data['id']."</td>";
                              echo "<td>".$data['NIK']."</td>";
                              echo "<td>".$data['NAMA']."</td>";
                              echo "<td>".$data['AGAMA']."</td>";
                              echo "<td>";
                              echo "<a href='edit.php?id=".$data['id']."'>Edit</a> ||";
                              echo "<a href='hapus.php?id=".$data['id']."'>Hapus</a>";
                              echo "</td>";
                              echo "</tr>";
                    }
                    ?>
                    
                    
                    <a href = "logout.php">logout</a>

                    <a href="tambah.php"><input type="button" name="tambah" value="Tambah">
          </td>
</body>
</html>