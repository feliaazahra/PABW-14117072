<!DOCTYPE html>
<html>
<head>
<title> Tugas Mingguan </title>
</head>
<body>
<form>

<label> Nama:  </label>
<input type="text" required name="nama" /> </br></br>
<label> Alamat:  </label>
<input type="text" name="alamat" /> </br></br>
<label> Jenis Kelamin:  </label>
<input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki - Laki
<input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan </br></br>
<label> Golongan Darah: </label>
<select name="goldar" >
     <option value="A"> A</option>
     <option value="B">B</option>
     <option value="AB">AB</option>
     <option value="O">O</option>
 </select>
</br>
</br>
<label> Hobi: </label>
    <input type="checkbox" name="hobi_baca" /> Membaca Buku
      <input type="checkbox" name="hobi_nulis" /> Menulis
      <input type="checkbox" name="hobi_mancing" /> Menonton Film
      <input type="checkbox" name="hobi_rebahan" /> Rebahan
</br>
</br>

<label> Keterangan: </label> </br>
<textarea name="keterangan" rows = "10" cols="40">
</textarea>
</br>
</br>

</form>
</html>