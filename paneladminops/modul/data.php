
<table border="1">
	<tr>
		<th>NO URUT</th>
		<th>No Pendaftaran</th>
		<th>Nama</th>
		<th>Asal Sekolah</th>
		<th>Telepon</th>
		<th>Peminatan</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Alamat</th>
		<th>RT</th>
		<th>RW</th>
		<th>Kode Pos</th>
		<th>Dusun</th>
		<th>Desa</th>
		<th>Email</th>
		<th>Telepon</th>
		<th>Anak-ke</th>
		<th>Tinggal</th>
		<th>Jumlah Saudara</th>
		<th>Nama Ayah</th>
		<th>Nama Ibu</th>
		<th>ALamat Ortu</th>
		<th>RT</th>
		<th>RW</th>
		<th>Kode Pos</th>
		<th>Dusun </th>
		<th>Desa</th>
		<th>Telepon Ortu</th>
		<th>Kerja Ayah</th>
		<th>Kerja Ibu</th>
		<th>Gaji Ayah</th>
		<th>Gaji Ibu</th>
		<th>Pendidikan Ayah</th>
		<th>Pendidikan Ibu</th>
		<th>Tahun Lahir Ayah</th>
		<th>Tahun Lahir Ibu</th>
		<th>Nama Wali</th>
		<th>Alamat Wali</th>
		<th>RT</th>
		<th>RW</th>
		<th>Kode Pos</th>
		<th>Dusun</th>
		<th>Desa</th>
		<th>Telepon</th>
		<th>Gaji Wali</th>
		<th>Pendidikan Wali</th>
		<th>Tahun Lahir Wali</th>
		<th>Pernyataan</th>
		<th>Jadwal</th>
		<th>Tanggal</th>
	</tr>
	<?php
	//koneksi ke database
	mysql_connect("localhost", "root", "");
	mysql_select_db("ppdbsmamita");

	//query menampilkan data
	$sql = mysql_query("SELECT * FROM pendaftaran ORDER BY nopendaftaran ASC");
	$no = 1;
	while($data = mysql_fetch_assoc($sql)){
		echo '
		<tr>
			<td>'.$no.'</td>
			<td>'.$data['nama'].'</td>
			<td>'.$data['kelas'].'</td>
			<td>'.$data['jurusan'].'</td>
		</tr>
		';
		$no++;
	}
	?>
</table>
