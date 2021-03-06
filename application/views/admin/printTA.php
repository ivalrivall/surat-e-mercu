<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Surat Kerja Praktek </title>
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/dist/css/bootstrap.min.css') ?>">
	 <style>
	 	body{
	 		line-height: normal;
	 	}
	 	.table-borderless td,
		.table-borderless th,
		.table-borderless tr {
		    border: 0 !important;
		}
		.kepadayth-cover{
			line-height: 10px;
		}
		#kepadayth{
			font-size: 10px;
		}
		.tanggal{
			font-size:17px;
		}
		#kepadaalamat{
			font-size: 10px;
		}
	 </style>
</head>
<body class="printkpta">
<br /><br /><br />
	<div class="container-fluid printKPTA">
		<div class="container kopsurat">
			<div class="row">
				<div class="col-xs-6">
					<span class="hidden-print">
					<img src="<?php echo base_url('assets/image/UMB.png') ?>" width="200" alt="">
					</span>
				</div>
				<div class="col-xs-6">
					<?php  
						$pecah = explode("-",$surat['tanggal_diajukan']);
						$bulanindo ="";
						switch ($pecah[1]) {
							    case '01':
								   $bulanindo ="Januari";
								break;
								case '02':
								   $bulanindo ="Februari";
								break;
								case '03':
								   $bulanindo ="Maret";
								break;
								case '04':
								   $bulanindo ="April";
								break;
								case '05':
								   $bulanindo ="Mei";
								break;
								case '06':
								   $bulanindo ="Juni";
								break;
								case '07':
								   $bulanindo ="Juli";
								break;
								case '08':
								   $bulanindo ="Agustus";
								break;
								case '09':
								   $bulanindo ="September";
								break;
								case '10':
								   $bulanindo ="Oktober";
								break;
								case '11':
								   $bulanindo ="November";
								break;
								case '12':
								   $bulanindo ="Desember";
								break;
						}
						$tanggal_fix = $pecah[2]." ".$bulanindo." ".$pecah[0];
					?>

					<span class="pull-right tanggal">Jakarta, <?php cetak($tanggal_fix)?></span>
				</div><!-- /.col-xs-6 -->
			</div>
			<span class="hidden-print warning"><h1 class="text-center">Direkomendasikan Menggunakan Chrome Versi 64 Atau Lebih</h1></span>
		</div>
		<br /><br /> <br /> <br /> <br />			

		<div class="container idsurat">
			<div class="row">
				<div class="col-xs-12"><p class="nomor"><?php cetak($surat['no_surat']); ?></p></div>
			</div>
			<div class="row">
				<div class="col-xs-12"><p class="lampiran">Lampiran	:------------</p></div>
			</div>
			<div class="row">
				<div class="col-xs-12"><p class="perihal">Perihal	:<b><u><i>Permohonan Observasi Data <?php if($surat['prodi']=='Teknik Informatika'){ echo "Dan Wawancara";} ?></i></u></b></p></div>
			</div>
		</div>

		<br /><br />

		<div class="container kepadayth-cover">
			<p>Kepada Yth,</p>
			<p><?php cetak($surat['nama_perusahaan'])?></p>
			<p id="kepadaalamat"><?php cetak($surat['alamat_perusahaan'])?></p>
			<p id="kepadaalamat"><?php cetak($surat['kota'])?> <?php cetak($surat['kodepos'])?></p>
			<p>UP. <?php cetak($surat['orang_dituju'])?></p>
			<p><?php cetak($surat['jabatan_dituju'])?></p>
		</div>
		<br /><br />
		<div class="container isipesan">
			<p>Dengan Hormat,</p>
			<p class="text-justify">
				Dalam rangka memenuhi persyaratan kurikulum Kurikulum Program Stude Sistem Informasi Fakultas Ilmu Komputer Universitas Mercu Buana, Setiap mahasiswa yang akan menumpuh ujian Sarjana, Terlebih dahulu diwajibkan menyelesaikan TUGAS AKHIR</p>
				<p class="text-justify">	Sehubungan dengan hal tersebut,bersama ini kami mohon bantuan Bapak/Ibu agar dapat kiranya memberikan data - data yang diperlukan mahasiswa kami</p>
			<p class="text-justify"> 			
			<table class="table table-borderless col-xs-12">
				
				<tr class="judul" style="border-bottom: 2px dashed!important;">
					<th>No.</th>
					<th>Nama</th>
					<th>NIM</th>
					<th>No Handphone</th>
				</tr>
				<?php $no=1; ?>
				<?php foreach ($mahasiswa as $vmahasiswa): ?>
				<tr>
						<td><?php cetak($no++)?></td>
						<td><?php cetak($vmahasiswa['nama_mahasiswa'])?></td>
						<td><?php cetak($vmahasiswa['nim'])?></td>
						<td><?php cetak($vmahasiswa['nohp'])?></td>
					</tr>
				
			<?php endforeach ?>
			</table>
			<p class="text-justify">Demikian Surat permohonan kami, atas perhatian dan bantuan Bapak/Ibu kami ucapkan terima kasih.</p>
			<br /><br />
			</p>
		</div>

		<div class="container ttd">
			<p>Hormat Kami,<br>
			  <?php if ($surat['prodi']=='Sistem Informasi'): ?>
			  	<b> Kordinator Tugas Akhir </b> <br>		
			    <b>Fakultas Ilmu Komputer </b> <br>	
			    Program Studi Sistem Informasi <br>	
			  <?php else: ?>
				<b> Fakultas Ilmu Komputer </b> <br>		
			   	Fakultas Ilmu Komputer Program Studi Teknik Informatika <br>	
			  <?php endif ?>
			</p>
			
			<br><br><br>
			<p>(<b><?php cetak($surat['nama_dosen'])?></b>)<br>
			<?php if ($surat['prodi']=='Teknik Informatika'): ?>
				<i>Koordinator Tugas Akhir</i>
			<?php endif ?>
			</p>
		</div>
	</div>
</body>
</html>
<script>
    window.print();
</script>