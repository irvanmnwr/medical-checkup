<html>
<head>
	<title>Cetak PDF</title>
</head>
<body>

<h2 style="text-align: center;">KLINIK KANTOR KESEHATAN KELAS III LHOKSEMAWE<br>REKAM MEDIS/ CATATAN MEDIS</h2>

<style>
table{
    border-collapse: collapse;
}

/*table, td, th {
    border: 1px solid black;
}*/
</style>

<table border="0" align="left">
<?php
if( ! empty($pasien)){
	foreach($pasien as $data){
		echo "<tr>";
		echo "<td>".'Nama'."</td>";
		echo "<td>".':'."</td>";
		echo "<td>".$data->nama."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".'Tanggal Lahir'."</td>";
		echo "<td>".':'."</td>";
		echo "<td>".$data->tgl_lahir."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".'Alamat'."</td>";
		echo "<td>".':'."</td>";
		echo "<td>".$data->alamat."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".'Jenis Kelamin'."</td>";
		echo "<td>".':'."</td>";
		echo "<td>".$data->jns_kelamin."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>".'no_bpjs'."</td>";
		echo "<td>".':'."</td>";
		echo "<td>".$data->no_bpjs."</td>";
		echo "</tr>";
		break;
	}
}
?>
</table>

<br><br><table border="1" align="left" width="850px">
<tr>
	<td style="width: 2%" align="center">No.</td>
	<td style="width: 3%" align="center">Tgl.</td>
	<td style="width: 25%" align="center">Anamnesa</td>
	<td style="width: 4%" align="center">kesadaran</td>
	<td style="width: 4%" align="center">td</td>
	<td style="width: 4%" align="center">hr</td>
	<td style="width: 4%" align="center">rr</td>
	<td style="width: 4%" align="center">suhu</td>
	<td style="width: 15%" align="center">Diagnosa</td>
	<td style="width: 20%" align="center">Terapi</td>
</tr>
<?php
if( ! empty($pasien)){
	$no = 1;
	foreach($pasien as $data){
		echo "<tr>";
		echo "<td style='width: 3%' align='center'>".$no."</td>";
		echo "<td style='width: 8%'>".$data->tgl_periksa."</td>";
		echo "<td style='width: 25%'>".$data->amannesa."</td>";
		echo "<td style='width: 10%'>".$data->kesadaran."</td>";
		echo "<td style='width: 10%'>".$data->td." mmhg"."</td>";
		echo "<td style='width: 5%'>".$data->hr." x/i"."</td>";
		echo "<td style='width: 5%'>".$data->rr." x/i"."</td>";
		echo "<td style='width: 5%'>".$data->suhu."°C"."</td>";
		echo "<td style='width: 15%'>".$data->diagnosa."</td>";
		echo "<td style='width: 20%'>".$data->pengobatan."</td>";
		echo "</tr>";
		$no++;
	}
}
?>
</table>



</body>
</html>
