<html>
<body bgcolor=#efefef>
<h1>Form Pendaftaran</h1>

<form method="post" action="proses.php">
	<table bgcolor=cyan>
	<tr>
		<td>NIM</td>
		<td>:</td>
		<td><input type=text maxlength=10 name='nim' placeholder="Masukkan NIM"></td>
	</tr>
	<tr>
		<td>Nama Lengkap</td>
		<td>:</td>
		<td><input type=text name="nama_lengkap" placeholder="Masukkan Nama"></td>
	</tr>
	
	<tr>
	 	<td>Jenis Kelamin</td>
	 	<td>:</td>
	 	<td><input type=radio name=jk value="L" checked>Laki-Laki
	 	    <input type=radio name=jk value="P">Perempuan</td>
	</tr>
	<tr>
		<td>Agama</td>
		<td>:</td>
	   	<td><select name="agama">
		<option>Islam</option>
		<option>Katolik</option>
		<option>Protestan</option>
		<option>Hindu</option>
		<option>Budha</option>
		<option>Konghucu</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>Alamat</td> 
	 	<td>:</td>
		<td><textarea cols=40 row=7 name="alamat"></textarea></td>
	</tr>
	<tr>
		<td>Prodi</td>
		<td>:</td>
		<td><input type=text name="prodi"></td>
	</tr>
	<tr>
		<td>Hobi</td>
		<td>:</td>
		<td><input type=checkbox> Futsal
	  		<input type=checkbox> Travelling
	   		<input type=checkbox> Fotografi
		</td>
	</tr>
	<tr>
		<td colspan=3><input type=submit value=Simpan>
			      <input type=reset value=Reset></td>
	</tr>
	</table>	
</form>

</body>
</html>