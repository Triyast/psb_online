<?php
$tab = TabView('Edit Konfirmasi','','',''); echo"$tab";
$sql = mysql_query("SELECT * FROM psb_konfirmasi AS a, psb_formulir AS b where a.no_perserta=b.no_peserta AND id_konfirmasi = '$_GET[id]'")or die(mysql_error());
$row=mysql_fetch_array($sql);
?>
<form action="#" method="post" id="biodata">
	<table width="75%" border="0" align="center">
	  <tr>
		<td colspan="8" bgcolor="#33CC33"><span class="style1"><b>DATA PEMBAYARAN SISWA</b></span></td>
	  </tr>
	  <tr>
		<td colspan="6">&nbsp;</td>
	  </tr>
	  <tr>
		<td width="173">No Formulir</td>
		<td width="5">:</td>
		<td colspan="4"><input name="form0" type="text" id="form0" value="<?= $row['no_formulir'] ?>" readonly="true" /></td>
		<td width="173">No Peserta</td>
		<td colspan="4"><input name="from1" type="text" id="from1" value="<?= $row['no_peserta'] ?>" readonly="true" /></td>
	  </tr>
	  <tr>
		<td colspan="8">&nbsp;
		<hr />	
		</td>
	  </tr>
	  <tr>
		<td width="173">FORMULIR PENDAFTARAN</td>
		<td width="5">:</td>
		<td colspan="4"><input name="form0" type="text" id="form0" value="<?= $row['sts_verifikasi']==1 ? 'Sudah Verifikasi' : 'BELUM Verifikasi' ?>" readonly="true" /></td>
		<td colspan="4"><input name="from1" type="text" id="from1" value="<?= $row['jenis_pembayarn']=='Formulir Pendaftaran' && $row['total_pembayaran']==100000 ? 'LUNAS' : $row['total_pembayaran'] ?>" readonly="true" /></td>
	  </tr>
	  <tr>
		<td><label>MOS</label></td>
		<td>:</td>
		<td colspan="4"><input name="mos" type="text" id="mos" readonly="true" value="<?= $row['jenis_pembayarn']=='MOS' && $row['total_pembayaran']==150000 ? 'LUNAS' : 'BELUM LUNAS' ?>" /></td>
	  </tr>
	  <tr>
		<td><label>SPP</label></td>
		<td>:</td>
		<td colspan="4"><input name="spp" type="text" id="spp" readonly="true" value="<?= $row['jenis_pembayarn']=='SPP' && $row['total_pembayaran']==135000 ? 'LUNAS' : 'BELUM LUNAS' ?>" /></td>
	  </tr>
	  <tr>
		<td><label>Seragam</label></td>
		<td>:</td>
		<td colspan="4"><input name="srm" type="text" id="srm" readonly="true" value="<?= $row['jenis_pembayarn']=='Seragam' && $row['total_pembayaran']==350000 ? 'LUNAS' : 'BELUM LUNAS' ?>" /></td>
	  </tr>
	  <tr>
		<td><label>LKS Semester 1</label></td>
		<td>:</td>
		<td colspan="4"><input name="lks" type="text" id="lks" readonly="true" value="<?= $row['jenis_pembayarn']=='LKS Semester 1' && $row['total_pembayaran']==150000 ? 'LUNAS' : 'BELUM LUNAS' ?>" /></td>
	  </tr>
	  <tr>
		<td><label>Atribut</label></td>
		<td>:</td>
		<td colspan="4"><input name="atrib" type="text" id="atrib" readonly="true" value="<?= $row['jenis_pembayarn']=='Atribut' && $row['total_pembayaran']==70000 ? 'LUNAS' : 'BELUM LUNAS' ?>" /></td>
	  </tr>
	  <tr>
		<td><label>Cover Ijazah</label></td>
		<td>:</td>
		<td colspan="4"><input name="cover" type="text" id="cover" readonly="true" value="<?= $row['jenis_pembayarn']=='Cover Ijazah' && $row['total_pembayaran']==100000 ? 'LUNAS' : 'BELUM LUNAS' ?>" /></td>
	  </tr>
	  <tr>
		<td><label>Kartu Pelajar & Photo</label></td>
		<td>:</td>
		<td colspan="4"><input name="kts" type="text" id="kts" readonly="true" value="<?= $row['jenis_pembayarn']=='Kartu Pelajar & Photo' && $row['total_pembayaran']==70000 ? 'LUNAS' : 'BELUM LUNAS' ?>" /></td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td colspan="3">&nbsp;</td>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td colspan="6">&nbsp;</td>
	  </tr>
	  <tr>
		<td colspan="6"></td>
	  </tr>
	</table>
</form>
</div>