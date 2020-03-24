<?php
include "../koneksi/koneksi.php";

$nilai = mysql_query("select * from rekapnilai where nopendaftaran='" . $_SESSION['nopendaftaran'] . "'");
$dp = mysql_fetch_array($nilai);

?>

<div>
	<table class='table table-striped table-hover' cellspacing='0' cellpadding='2' border='1'>
		<thead>
			<tr class="info">
				<th rowspan='2'>NO</th>
				<th rowspan='2'>MATA PELAJARAN</th>
				<th colspan='5'>NILAI RAPORT SEMESTER</th>
				<th rowspan='2'>RATA2</th>
				<th rowspan='2'>NILAI<br>UN</th>
			</tr>
			<tr class="info">
				<th>1</th>
				<th>2</th>
				<th>3</th>
				<th>4</th>
				<th>5</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Bahasa Indonesia</td>
				<td><input type="text" name="bin1" value="<?php echo $dp['bin1']; ?>" onFocus="startCalc();" onBlur="stopCalc();"
					 size="4" tabindex='29'></td>
				<td><input type="text" name="bin2" value="<?php echo $dp['bin2']; ?>" onFocus="startCalc();" onBlur="stopCalc();"
					 size="4" tabindex='30'></td>
				<td><input type="text" name="bin3" value="<?php echo $dp['bin3']; ?>" onFocus="startCalc();" onBlur="stopCalc();"
					 size="4" tabindex='31'></td>
				<td><input type="text" name="bin4" value="<?php echo $dp['bin4']; ?>" onFocus="startCalc();" onBlur="stopCalc();"
					 size="4" tabindex='32'></td>
				<td><input type="text" name="bin5" value="<?php echo $dp['bin5']; ?>" onFocus="startCalc();" onBlur="stopCalc();"
					 size="4" tabindex='33'></td>
				<td><input type="text" name="averageBox" value="<?php echo $dp['rata_bin']; ?>" onKeyUp="startCalc();" onBlur="stopCalc();"
					 size="4"></td>
				<td><input type="text" name="bin_un" value="<?php echo $dp['bin_un']; ?>" size="4" tabindex='34'></td>
			</tr>
			<tr>
				<td>2</td>
				<td>Bahasa Inggris</td>
				<td><input type="text" name="big1" value="<?php echo $dp['big1']; ?>" onFocus="startCalc();" onBlur="stopCalc();"
					 size="4" tabindex='35'></td>
				<td><input type="text" name="big2" value="<?php echo $dp['big2']; ?>" onFocus="startCalc();" onBlur="stopCalc();"
					 size="4" tabindex='36'></td>
				<td><input type="text" name="big3" value="<?php echo $dp['big3']; ?>" onFocus="startCalc();" onBlur="stopCalc();"
					 size="4" tabindex='37'></td>
				<td><input type="text" name="big4" value="<?php echo $dp['big4']; ?>" onFocus="startCalc();" onBlur="stopCalc();"
					 size="4" tabindex='38'></td>
				<td><input type="text" name="big5" value="<?php echo $dp['big5']; ?>" onFocus="startCalc();" onBlur="stopCalc();"
					 size="4" tabindex='39'></td>
				<td><input type="text" name="averageBox2" value="<?php echo $dp['rata_big']; ?>" onKeyUp="startCalc();" onBlur="stopCalc();"
					 size="4"></td>
				<td><input type="text" name="big_un" value="<?php echo $dp['big_un']; ?>" size="4" tabindex='40'></td>
			</tr>
			<tr>
				<td>3</td>
				<td>Matematika</td>
				<td><input type="text" name="mtk1" value="<?php echo $dp['mtk1']; ?>" onFocus="startCalc();" onBlur="stopCalc();"
					 size="4" tabindex='41'></td>
				<td><input type="text" name="mtk2" value="<?php echo $dp['mtk2']; ?>" onFocus="startCalc();" onBlur="stopCalc();"
					 size="4" tabindex='42'></td>
				<td><input type="text" name="mtk3" value="<?php echo $dp['mtk3']; ?>" onFocus="startCalc();" onBlur="stopCalc();"
					 size="4" tabindex='43'></td>
				<td><input type="text" name="mtk4" value="<?php echo $dp['mtk4']; ?>" onFocus="startCalc();" onBlur="stopCalc();"
					 size="4" tabindex='44'></td>
				<td><input type="text" name="mtk5" value="<?php echo $dp['mtk5']; ?>" onFocus="startCalc();" onBlur="stopCalc();"
					 size="4" tabindex='45'></td>
				<td><input type="text" name="averageBox3" value="<?php echo $dp['rata_mtk']; ?>" onKeyUp="startCalc();" onBlur="stopCalc();"
					 size="4"></td>
				<td><input type="text" name="mtk_un" value="<?php echo $dp['mtk_un']; ?>" size="4" tabindex='46'></td>
			</tr>
			<tr>
				<td>4</td>
				<td>IPA</td>
				<td><input type="text" name="ipa1" value="<?php echo $dp['ipa1']; ?>" onFocus="startCalc();" onBlur="stopCalc();"
					 size="4" tabindex='47'></td>
				<td><input type="text" name="ipa2" value="<?php echo $dp['ipa2']; ?>" onFocus="startCalc();" onBlur="stopCalc();"
					 size="4" tabindex='48'></td>
				<td><input type="text" name="ipa3" value="<?php echo $dp['ipa3']; ?>" onFocus="startCalc();" onBlur="stopCalc();"
					 size="4" tabindex='49'></td>
				<td><input type="text" name="ipa4" value="<?php echo $dp['ipa4']; ?>" onFocus="startCalc();" onBlur="stopCalc();"
					 size="4" tabindex='50'></td>
				<td><input type="text" name="ipa5" value="<?php echo $dp['ipa5']; ?>" onFocus="startCalc();" onBlur="stopCalc();"
					 size="4" tabindex='51'></td>
				<td><input type="text" name="averageBox4" value="<?php echo $dp['rata_ipa']; ?>" onKeyUp="startCalc();" onBlur="stopCalc();"
					 size="4"></td>
				<td><input type="text" name="ipa_un" value="<?php echo $dp['ipa_un']; ?>" size="4" tabindex='52'></td>
			</tr>
			<tr>
				<td>5</td>
				<td>IPS</td>
				<td><input type="text" name="ips1" value="<?php echo $dp['ips1']; ?>" onFocus="startCalc();" onBlur="stopCalc();"
					 size="4" tabindex='53'></td>
				<td><input type="text" name="ips2" value="<?php echo $dp['ips2']; ?>" onFocus="startCalc();" onBlur="stopCalc();"
					 size="4" tabindex='54'></td>
				<td><input type="text" name="ips3" value="<?php echo $dp['ips3']; ?>" onFocus="startCalc();" onBlur="stopCalc();"
					 size="4" tabindex='55'></td>
				<td><input type="text" name="ips4" value="<?php echo $dp['ips4']; ?>" onFocus="startCalc();" onBlur="stopCalc();"
					 size="4" tabindex='56'></td>
				<td><input type="text" name="ips5" value="<?php echo $dp['ips5']; ?>" onFocus="startCalc();" onBlur="stopCalc();"
					 size="4" tabindex='57'></td>
				<td><input type="text" name="averageBox5" value="<?php echo $dp['rata_ips']; ?>" onKeyUp="startCalc();" onBlur="stopCalc();"
					 size="4"></td>
				<td><input type="text" name="ips_un" value="<?php echo $dp['ips_un']; ?>" size="4" tabindex='58'></td>
			</tr>
			<tr class="danger">
				<td colspan='7'>Total Average</td>
				<td><input type="text" name="averageBox_total" value="<?php echo $dp['rata_total']; ?>" size="4"></td>
			</tr>
		</tbody>
	</table>
	<div class="alert alert-danger alert-info">
		Nb. Nilai rapor dan UN berupa nilai puluhan dan bulat.<br>
		Nilai rapor kurikulum 2013 skala 0-4 harus di konversi ke skala 100
		dan dibulatkan. Cara konversi (nilai raport x 25)<br>
		contoh : 3.3 x 25 = 82.5 = 83
	</div>
</div>