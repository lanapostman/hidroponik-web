<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laporan Hasil Panen</title>
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		.line-title{
			border: 0;
			border-style: inset;
			border-top: 1px solid #000;
		}
	</style>
</head>
<body>
	
	<table style="width: 100%;">
		<!--<tr>
			<td align="center">
				<span style="line-height: 1.6; font-weight: bold;">
					PT. DUA PUTRA JAYA MAJU
					<br>PELAIHARI, TANAH LAUT
				</span>
			</td>
		</tr>-->
	</table>

	<hr class="line-title">
	<p align="center">
		LAPORAN HASIL PANEN<br>
	</p>

	<table class="table table-bordered">
		<tr>
			<th>Tanggal Tanam</th>
			<th>Awal Tanam</th>
			<th>Umur Awal (Hari)</th>
			<th>Tanggal Perubahan</th>
			<th>Tanaman Mati</th>
			<th>Total Tanaman</th>
			<th>Total (Kg)</th>
			<th>Harga (Kg)</th>
			<th>Hasil Panen (Rp)</th>
		</tr>
		<?php $no = 1; foreach ($data as $row): ?>
			<tr>
				<td><?php echo $row['tanggal_tebar'] ?></td>
				<td><?php echo $total ?></td>
				<td><?php echo $row['umur_awal'] ?></td>
				<td><?php echo $row['tgl_perubahan'] ?></td>
				<td><?php echo $row['ikan_mati'] ?></td>
				<td><?php echo $row['total'] ?></td>
				<td><?php echo $row['total_kg'] ?> Kg</td>
				<td>Rp. <?php echo number_format($row['harga_kg'], 0, ".", ".") ?></td>
				<td>Rp. <?php echo number_format($row['hasil_panen'], 0, ".", ".") ?></td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>