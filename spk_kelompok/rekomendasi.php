<!DOCTYPE html>
<html>
<head>
	<title>SISTEM PENDUKUNG KEPUTUSAN DALAM PENILAIAN KINERJA PEGAWAI  DI KECAMATAN</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png"> 	<link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
	<div class="navbar-fixed">
	<nav>
    	<div class="container">
					
						<div class="nav-wrapper">

								<ul class="left" style="margin-left: -52px;">
									<li><a href="index.php">HOME</a></li>
									<li><a class="active" href="rekomendasi.php">PERHITUNGAN NILAI</a></li>
                                    <li><a href="daftar_nama.php">ALTERNATIF</a></li>
                                    <li><a href="kriteria.php">KRITERIA</a></li>
		</div>
					
        </div>
		</nav>
		</div>
		<!-- Body Start -->

		<!-- Daftar Laptop Start -->
        <div style="background-color: #efefef">
            <div class="container">
                <div class="section-card" style="padding: 32px 0px 20px 0px">
                    <ul>
                        <li>
                            <div class="row">
                                <div class="col s3">
                                </div>
                                <div class="col s6">      
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="row">
                                                <center><h4>Masukan Pembobotan</h4></center>
                                                <br>
                                                <form class = "col s12" method="POST" action="hasil.php">
                                                    <div class = "row">
                                                        <div class="col s12">

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Kehadiran</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="kehadiran">
                                                                    <option value = "" disabled selected style="color: #eceff1;"><i>Kriteria Kehadiran</i></option>                                                
                                                                    <option value = "1">Kurang Baik</option>
                                                                    <option value = "2">Kurang</option>
                                                                    <option value = "3">Cukup </option>
                                                                    <option value = "4">Baik</option>
                                                                    <option value = "5">Sangat Baik</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                            <b>Masa Kerja</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="masa_kerja">
                                                                    <option value = "" disabled selected>Kriteria Masa Kerja</option> 
                                                                    <option value = "1">Kurang Baik</option>
                                                                    <option value = "2">Kurang</option>
                                                                    <option value = "3">Cukup </option>
                                                                    <option value = "4">Baik</option>
                                                                    <option value = "5">Sangat Baik</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Pengetahuan</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="pengetahuan">
                                                                    <option value = "" disabled selected>Kriteria Pengetahuan</option>
                                                                    <option value = "1">Kurang Baik</option>
                                                                    <option value = "2">Kurang</option>
                                                                    <option value = "3">Cukup </option>
                                                                    <option value = "4">Baik</option>
                                                                    <option value = "5">Sangat Baik</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Interaksi Sosial </b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="interaksi_sosial">
                                                                    <option value = "" disabled selected>Kriteria Interaksi Sosial </option>
                                                                    <option value = "1">Kurang Baik</option>
                                                                    <option value = "2">Kurang</option>
                                                                    <option value = "3">Cukup </option>
                                                                    <option value = "4">Baik</option>
                                                                    <option value = "5">Sangat Baik</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Tingkat Pendidikan </b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="tingkat_pendidikan">
                                                                    <option value = "" disabled selected>Kriteria Tingkat Pendidikan </option>
                                                                    <option value = "1">Kurang Baik</option>
                                                                    <option value = "2">Kurang</option>
                                                                    <option value = "3">Cukup </option>
                                                                    <option value = "4">Baik</option>
                                                                    <option value = "5">Sangat Baik</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Prestasi </b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="prestasi">
                                                                    <option value = "" disabled selected>Kriteria Prestasi</option>
                                                                    <option value = "1">Kurang Baik</option>
                                                                    <option value = "2">Kurang</option>
                                                                    <option value = "3">Cukup </option>
                                                                    <option value = "4">Baik</option>
                                                                    <option value = "5">Sangat Baik</option>
                                                                </select>
                                                            </div>
                                                            




                                                        </div>  
                                                    <center><button type="submit" class="waves-effect waves-light btn" style="margin-bottom:-46px;">Hitung</button></center>	
                                                </form>       
                                            </div>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="col s3">
                                </div>
                            </div>
                        </li>
                    </ul>	     
                </div>
            </div>
        </div>
        <!-- Rekomendasi Laptop End -->



    <!-- Body End -->

    <!-- Footer Start -->
	<div class="footer-copyright" style="padding: 0px 0px; background-color: white">
      <div class="container">
        <p align="center" style="color: #999">&copy; SISTEM PENDUKUNG KEPUTUSAN DALAM PENILAIAN KINERJA PEGAWAI DI KECAMATAN..</p>
      </div>
    </div>
    <!-- Footer End -->
    <script type="text/javascript">
	  $(document).ready(function(){
	      $('.parallax').parallax();
          $('select').material_select();
          $('.modal').modal();
	    });
    </script>
</body>
</html>