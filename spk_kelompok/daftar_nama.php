<?php 
session_start();
include('koneksi.php');
?>

<?php 
	if(isset($_POST["tambah_karyawan"])){
		$nama    			 = $_POST["nama"];
		$kehadiran 			 = $_POST["kehadiran"];
		$masa_kerja          = $_POST["masa_kerja"];
		$pengetahuan      	 = $_POST["pengetahuan"];
		$interaksi_sosial    = $_POST["interaksi_sosial"];
		$tingkat_pendidikan  = $_POST["tingkat_pendidikan"];
		$prestasi    		 = $_POST["prestasi"];
		
		$kehadiran_angka = $masa_kerja_angka = $pengetahuan_angka = $interaksi_sosial_angka = $tingkat_pendidikan_angka = $prestasi_angka = 0;

		if($kehadiran == 1){
			$kehadiran_angka = 1;
		}
		elseif($kehadiran == 2){
			$kehadiran_angka = 2;
		}
		elseif($kehadiran == 3){
			$kehadiran_angka = 3;
		}
		elseif($kehadiran == 4){
			$kehadiran_angka = 4;
		}
		elseif($kehadiran == 5){
			$kehadiran_angka = 5;
		}


		if($masa_kerja == 1){
			$masa_kerja_angka = 1;
		}
		elseif($masa_kerja == 2){
			$masa_kerja_angka = 2;
		}
		elseif($masa_kerja == 3){
			$masa_kerja_angka = 3;
		}
		elseif($masa_kerja == 4){
			$masa_kerja_angka = 4;
		}
		elseif($masa_kerja == 5){
			$masa_kerja_angka = 5;
		}


		if($pengetahuan == 1){
			$pengetahuan_angka = 1;
		}
		elseif($pengetahuan == 2){
			$pengetahuan_angka = 2;
		}
		elseif($pengetahuan == 3){
			$pengetahuan_angka = 3;
		}
		elseif($pengetahuan == 4){
			$pengetahuan_angka = 4;
		}
		elseif($pengetahuan == 5){
			$pengetahuan_angka = 5;
		}



		if($interaksi_sosial == 1){
			$interaksi_sosial_angka = 1;
		}
		elseif($interaksi_sosial == 2){
			$interaksi_sosial_angka = 2;
		}
		elseif($interaksi_sosial == 3){
			$interaksi_sosial_angka = 3;
		}
		elseif($interaksi_sosial == 4){
			$interaksi_sosial_angka = 4;
		}
		elseif($interaksi_sosial == 5){
			$interaksi_sosial_angka = 5;
		}



		if($tingkat_pendidikan == 1){
			$tingkat_pendidikan_angka = 1;
		}
		elseif($tingkat_pendidikan == 2){
			$tingkat_pendidikan_angka = 2;
		}
		elseif($tingkat_pendidikan == 3){
			$tingkat_pendidikan_angka = 3;
		}
		elseif($tingkat_pendidikan == 4){
			$tingkat_pendidikan_angka = 4;
		}
		elseif($tingkat_pendidikan == 5){
			$tingkat_pendidikan_angka = 5;
		}



		if($prestasi == 1){
			$prestasi_angka = 1;
		}
		elseif($prestasi == 2){
			$prestasi_angka = 2;
		}
		elseif($prestasi == 3){
			$prestasi_angka = 3;
		}
		elseif($prestasi == 4){
			$prestasi_angka = 4;
		}
		elseif($prestasi == 5){
			$prestasi_angka = 5;
		}





		$sql = "INSERT INTO `data_karyawan` (`id_karyawan`, `nama_karyawan`, `kehadiran`, `masa_kerja`, `pengetahuan`, `interaksi_sosial`, `tingkat_pendidikan`, `prestasi`,`kehadiran_angka`, `masa_kerja_angka`, `pengetahuan_angka`, `interaksi_sosial_angka`, `tingkat_pendidikan_angka`, `prestasi_angka`) 
				VALUES (NULL, :nama_karyawan, :kehadiran, :masa_kerja, :pengetahuan, :interaksi_sosial, :tingkat_pendidikan, :prestasi, :kehadiran_angka, :masa_kerja_angka, :pengetahuan_angka, :interaksi_sosial_angka, :tingkat_pendidikan_angka, :prestasi_angka)";
		$stmt = $db->prepare($sql);
		$stmt->bindValue(':nama_karyawan', $nama);
		$stmt->bindValue(':kehadiran', $kehadiran);
		$stmt->bindValue(':masa_kerja', $masa_kerja);
		$stmt->bindValue(':pengetahuan', $pengetahuan);
		$stmt->bindValue(':interaksi_sosial', $interaksi_sosial);
		$stmt->bindValue(':tingkat_pendidikan', $tingkat_pendidikan);
		$stmt->bindValue(':prestasi', $prestasi);
		$stmt->bindValue(':kehadiran_angka', $kehadiran_angka);
		$stmt->bindValue(':masa_kerja_angka', $masa_kerja_angka);
		$stmt->bindValue(':pengetahuan_angka', $pengetahuan_angka);
		$stmt->bindValue(':interaksi_sosial_angka', $interaksi_sosial_angka);
		$stmt->bindValue(':tingkat_pendidikan_angka', $tingkat_pendidikan_angka);
		$stmt->bindValue(':prestasi_angka', $prestasi_angka);
		$stmt->execute();
	}

	if(isset($_POST["hapus_karyawan"])){
		$id_hapus_karyawan = $_POST['id_hapus_karyawan'];
		$sql_delete = "DELETE FROM `data_karyawan` WHERE `id_karyawan` = :id_hapus_karyawan";
		$stmt_delete = $db->prepare($sql_delete);
		$stmt_delete->bindValue(':id_hapus_karyawan', $id_hapus_karyawan);
		$stmt_delete->execute();
		$query_reorder_id=mysqli_query($selectdb,"ALTER TABLE data_karyawan AUTO_INCREMENT = 1");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>SISTEM PENDUKUNG KEPUTUSAN DALAM PENILAIAN KINERJA PEGAWAI TERBAIK DI KECAMATAN</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Data Table -->
	<link rel="stylesheet" type="text/css" href="assets/dataTable/jquery.dataTables.min.css">
	<script type="text/javascript" charset="utf8" src="assets/dataTable/jquery.dataTables.min.js"></script>

</head>
<body>
	<div class="navbar-fixed">
	<nav>
    	<div class="container">
					
						<div class="nav-wrapper">
								<ul class="left" style="margin-left: -52px;">
									<li><a href="index.php">HOME</a></li>
									<li><a href="rekomendasi.php">PERHITUNGAN NILAI</a></li>
									<li><a class="active" href="daftar_nama.php">ALTERNATIF</a></li>
									<li><a href="kriteria.php">KRITERIA</a></li>
								</ul>
						</div>
					
        </div>
		</nav>
		</div>
		<!-- Body Start -->

		<!-- Daftar hp Start -->
	<div style="background-color: #efefef">
		<div class="container">
		    <div class="section-card" style="padding: 40px 0px 20px 0px;">
				<ul>
				    <li>
						<div class="row">
						<div class="card">
								<div class="card-content">
									<center><h4 style="margin-bottom: 0px; margin-top: -8px;">DAFTAR KARYAWAN</h4></center>
									<table id="table_id" class="hover dataTablesCustom" style="width:100%">
											<thead style="border-top: 1px solid #d0d0d0;">
												<tr>
													<th><center>No </center></th>
													<th><center>Nama Karyawan</center></th>
													<th><center>Kehadiran</center></th>
													<th><center>Masa Kerja</center></th>
													<th><center>Pengetahuan</center></th>
													<th><center>Interaksi Sosial </center></th>
													<th><center>Tingkat Pendidikan </center></th>
													<th><center>Prestasi </center></th>
													<th><center>Hapus</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query=mysqli_query($selectdb,"SELECT * FROM data_karyawan");
												$no=1;
												while ($data=mysqli_fetch_array($query)) {
												?>
												<tr>
													<td><center><?php echo $no; ?></center></td>
													<td><center><?php echo $data['nama_karyawan'] ?></center></td>
													<td><center><?php echo $data['kehadiran'] ?></center></td>
													<td><center><?php echo $data['masa_kerja'] ?></center></td>
													<td><center><?php echo $data['pengetahuan'] ?></center></td>
													<td><center><?php echo $data['interaksi_sosial'] ?></center></td>
													<td><center><?php echo $data['tingkat_pendidikan'] ?></center></td>
													<td><center><?php echo $data['prestasi'] ?></center></td>
													<td>
													<center>
															<form method="POST">
																<input type="hidden" name="id_hapus_karyawan" value="<?php echo $data['id_karyawan'] ?>">
																<button type="submit" name="hapus_karyawan" style="height: 32px; width: 32px;" class="btn-floating btn-small waves-effect waves-light red"><i style="line-height: 32px;" class="material-icons">remove</i></button>
															</form>
														</center>
													</td>
												</tr>
												<?php
														$no++;}
												?>
											</tbody>
									</table>
									</div>
									
							</div>
							<a href="#tambah" class="btn-floating btn-large waves-effect waves-light teal btn-float-custom"><i class="material-icons">add</i></a>
						</div>
				    </li>
				</ul>	     
	    	</div>
		</div>
	</div>
	<!-- Daftar hp End -->

	<!-- Daftar hp Start -->
	<div style="background-color: #efefef">
		<div class="container">
		    <div class="section-card" style="padding: 1px 20% 24px 20%;">
				<ul>
				    <li>
						<div class="row">
							<div class="card">
								<div class="card-content" style="padding-top: 10px;">
									<center><h5 style="margin-bottom: 10px;">Analisa Hasil Penilaian</h5></center>
									<table class="responsive-table">
									
											<thead style="border-top: 1px solid #d0d0d0;">
												<tr>
													<th><center>Alternatif</center></th>
													<th><center>C1 (Benefit)</center></th>
													<th><center>C2 (Benefit)</center></th>
													<th><center>C3 (Benefit)</center></th>
													<th><center>C4 (Benefit)</center></th>
													<th><center>C5 (Benefit)</center></th>
													<th><center>C6 (Benefit)</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query=mysqli_query($selectdb,"SELECT * FROM data_karyawan");
												$no=1;
												while ($data=mysqli_fetch_array($query)) {
												?>
												<tr>
													<td><center><?php echo "A",$no ?></center></td>
													<td><center><?php echo $data['kehadiran_angka'] ?></center></td>
													<td><center><?php echo $data['masa_kerja_angka'] ?></center></td>
													<td><center><?php echo $data['pengetahuan_angka'] ?></center></td>
													<td><center><?php echo $data['interaksi_sosial_angka'] ?></center></td>
													<td><center><?php echo $data['tingkat_pendidikan_angka'] ?></center></td>
													<td><center><?php echo $data['prestasi_angka'] ?></center></td>
												</tr>
												<?php
														$no++;}
												?>
											</tbody>
									</table>
									</div>
							</div>
						</div>
				    </li>
				</ul>	     
	    	</div>
		</div>
	</div>
	<!-- Daftar hp End -->

	<!-- Modal Start -->
	<div id="tambah" class="modal" style="width: 40%; height: 100%;">
		<div class="modal-content">
			<div class="col s6">
					<div class="card-content">
						<div class="row">
							<center><h5 style="margin-top:-8px;">Masukan Data Karyawan</h5></center>
							<form method="POST" action="">
								<div class = "row">
									<div class="col s12">

										<div class="col s6" style="margin-top: 10px;">
											<b>Nama</b>
										</div>
										<div class="col s6">
											<input style="height: 2rem;" name="nama" type="text" required>
										</div>

										<div class="col s6" style="margin-top: 10px;">
										<b>Kehadiran</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="kehadiran">
												<!-- <option value = "" disabled selected>Kriteria Masa Kerja</option>  -->
												<option value = "1">50 - 60</option>
												<option value = "2">60 - 70</option>
												<option value = "3">70 - 80</option>
												<option value = "4">80 - 90</option>
												<option value = "5">> 90</option>
											</select>
										</div>
										
										<div class="col s6" style="margin-top: 10px;">
										<b>Masa Kerja</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="masa_kerja">
												<!-- <option value = "" disabled selected>Kriteria Masa Kerja</option>  -->
												<option value = "1">50 - 60</option>
												<option value = "2">60 - 70</option>
												<option value = "3">70 - 80</option>
												<option value = "4">80 - 90</option>
												<option value = "5">> 90</option>
											</select>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Pengetahuan</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="pengetahuan">
												<!-- <option value = "" disabled selected>Kriteria Pengetahuan</option> -->
												<option value = "1">50 - 60</option>
												<option value = "2">60 - 70</option>
												<option value = "3">70 - 80</option>
												<option value = "4">80 - 90</option>
												<option value = "5">> 90</option>
											</select>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Interaksi Sosial</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="interaksi_sosial">
													<!-- <option value = "" disabled selected>Kriteria Interaksi Sosial</option> -->
												<option value = "1">50 - 60</option>
												<option value = "2">60 - 70</option>
												<option value = "3">70 - 80</option>
												<option value = "4">80 - 90</option>
												<option value = "5">> 90</option>
											</select>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Tingkat Pendidikan</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="tingkat_pendidikan">
												<!-- <option value = "" disabled selected>Kriteria Tingkat Pendidikan</option> -->
												<option value = "1">50 - 60</option>
												<option value = "2">60 - 70</option>
												<option value = "3">70 - 80</option>
												<option value = "4">80 - 90</option>
												<option value = "5">> 90</option>
											</select>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Prestasi</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="prestasi">
												<!-- <option value = "" disabled selected>Kriteria Prestasi</option> -->
												<option value = "1">50 - 60</option>
												<option value = "2">60 - 70</option>
												<option value = "3">70 - 80</option>
												<option value = "4">80 - 90</option>
												<option value = "5">> 90</option>
											</select>
										</div>
									</div>  
								</div> 
								<center><button name="tambah_karyawan" type="submit" class="waves-effect waves-light btn teal" style="margin-top: 0px;">Tambah</button></center>	
							</form>
						</div>
					</div>
				</div>
			</div>
		<div style="height: 0px; "class="modal-footer">
          <a style="margin-top: -30px;" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</a>
        </div>
	</div>
	<!-- Modal End -->

    <!-- Body End -->

    <!-- Footer Start -->
	<div class="footer-copyright" style="padding: 0px 0px; background-color: white">
      <div class="container">
        <p align="center" style="color: #999">&copy; SISTEM PENDUKUNG KEPUTUSAN DALAM PENILAIAN KINERJA PEGAWAI DI KECAMATAN.</p>
      </div>
    </div>
    <!-- Footer End -->
    <script type="text/javascript">
	  	$(document).ready(function(){
		$('.parallax').parallax();
		$('.modal').modal();
		$('#table_id').DataTable({
    		"paging": false
		});
	    });
	</script>
</body>
</html>