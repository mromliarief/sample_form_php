<?php
$keyword=$_REQUEST['keyword'];
$tambah=$_REQUEST['tambah'];

include "config.inc.php";
?>

<html>
<body>
<form method="post" action=<?php echo $_SERVER['PHP_SELF']; ?>>
	Pencarian: <input type="text" name="keyword" value=<?php echo $keyword; ?>> <input type="submit" value="Cari">
	<br><br><br>
	<a href=form.php>Tambah Data</a>
</form>

<table border="1" cellspacing="1" cellpadding="1">
	<tr>
		<td>NIM</td>	
		<td>Nama Mahasiswa</td>
		<td>Jenis Kelamin</td>
		<td>Agama</td>
		<td>Alamat</td>
		<td>Program Studi</td>
	</tr>

<?php
if(empty($keyword))
{
$sql="SELECT * FROM ms_mhs ORDER BY nim ASC";
}
else
{
$sql="SELECT * FROM ms_mhs WHERE (nim like '%$keyword%')OR(nama_mhs like '%$keyword%')OR(prog_studi like '%$keyword%') ORDER BY nim ASC";
}

$hasil=mysqli_query($conn,$sql);
while($data=mysqli_fetch_array($hasil))
{
?>
	<tr>
	<td><?php echo $data['nim'];?></td>
	<td><?php echo $data['nama_mhs'];?></td>
	<td><?php echo $data['jenis_kelamin'];?></td>
	<td><?php echo $data['agama'];?></td>
	<td><?php echo $data['alamat'];?></td>
	<td><?php echo $data['prog_studi'];?></td>
	</tr>
<?php
}
?>
</table>
</body>
</html>
