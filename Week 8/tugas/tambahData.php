<HTML>
<HEAD>
   <title>Tambah Data Mahasiswa</title>
</HEAD>
<BODY>
<h4>Tambah Data Mahasiswa</h4>
<?php
$nrp = $_POST["nrp"]; 
$nama = $_POST["nama"];
$path = $_POST["foto"];
$id_jur = $_POST["jurusan"];

$conn=mysqli_connect ("localhost","root","")  
  or die ("koneksi gagal");
mysqli_select_db($conn,"soccer");
echo "NRP      : $nrp <br>";
echo "Nama     : $nama <br>";
echo "Path     : $path <br>";
echo "Jurusan  : $id_jur <br>";
$sqlstr="insert into mahasiswa (nrp,nama,id_jur,path)
   values ('$nrp','$nama','$id_jur','$path')";
$hasil = mysqli_query($conn,$sqlstr);
echo "Simpan data mahasiswa berhasil dilakukan";
?>
</BODY> 
</HTML>