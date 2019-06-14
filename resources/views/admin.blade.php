	<head>
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="dropdown.js"></script>
    <script src="showhide.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<title>ADMIN PANEL</title>
		<style>
			.submenu {
				display: none;
			}
			.mainmenu {
				margin: 1px;width:100%;line-height: 30px;background: #5c79cd url(plus.png) left top no-repeat;
			}
			.mainmenu a{
				margin: 10px;color: #FFFFFF;text-decoration: none;padding-left:20px;
			}
			.submenu ul{
				list-style: none;margin: 0;padding: 0px;
			}
			.submenu li {
				background-color: #FFF0F5;margin:0px 0px 1px 4px;line-height: 30px;
			}
			.submenu li a{
				color: #000000;
			}			
            
		</style>	
	</head>
	<body>	
		<h1 align="center" style="color:#000000">ADMIN PANEL Virtual Tour Guide FIK</h1>
		<table border="1" style="width:100%" >
		<tr>
		<td style="width: 20%; background-color:#8fa5e2" valign="top">
		<h3 style="text-align: center; padding-top: 10px;  font-size: 25" > MENU </h3>	
		<div id="menu" style="width:400px">
			<div id="popular" class="mainmenu">
				<a href="#">Halaman depan FIK</a>
					<div class="submenu">
					<ul>
						<li><a href="#" class="GiriReka">Halaman Giri Reka</a></li>
						<li><a href="#" class="TechnoPark">Depan Techno Park</a></li>
						<li><a href="#" class="Gazebo">Gazebo FIK</a></li>
					</ul>
					</div>
			</div>
			<div id="recent" class="mainmenu">
				<a href="#">Lantai 1 FIK</a>
					<div class="submenu">
					<ul>
						<li><a href="#" class="DepanTU">Depan TU</a></li>
						<li><a href="#" class="DepanDekan">Depan Ruang Dekan</a></li>
						<li><a href="#" class="DosenSI">Depan Ruang Dosen Sistem Informasi</a></li>
						<li><a href="#" class="WakilDekan">Depan Ruang Wakil Dekan</a></li>
						<li><a href="#" class="KaprodiTF">Depan Ruang Kaprodi Teknik Informatika</a></li>
						<li><a href="#" class="DosenTF">Depan Ruang Dosen Teknik Informatika</a></li>
						<li><a href="#" class="Hima">Depan HIMA</a></li>
					</ul>
					</div>
			</div>
			<div id="category" class="mainmenu">
				<a href="#">Lantai 2 FIK</a>
					<div class="submenu">
					<ul>
						<li><a href="#">Depan Ruang Dosen TF</a></li>
						<li><a href="#">Laboratorium Risti & Multimedia</a></li>
						<li><a href="#">Ruang Kelas FIK 201</a></li>
						<li><a href="#">Ruang Kelas FIK 201</a></li>
						<li><a href="#">Depan Ruang Dikjar FIK</a></li>
						<li><a href="#">Laboratorium Pemrograman</a></li>
						<li><a href="#">Laboratorium Jaringan</a></li>
					</ul>
					</div>
			</div>
			<div id="category" class="mainmenu">
				<a href="#">Lantai 3 FIK</a>
					<div class="submenu">
					<ul>
						<li><a href="#">Latar Lantai 3</a></li>
						<li><a href="#">Ruang Baca FIK</a></li>
						<li><a href="#">Ruang Kelas FIK 301</a></li>
						<li><a href="#">Ruang Kelas FIK 302</a></li>
						<li><a href="#">Ruang Kelas FIK 303</a></li>
						<li><a href="#">Ruang Kelas FIK 304</a></li>
						<li><a href="#">Ruang Kelas FIK 305</a></li>
						<li><a href="#">Depan Kamar Mandi FIK Lt 3</a></li>
					</ul>
					</div>
			</div>
		</div>
		</td>
			<td id="kolomkanan" style="border-left-width: 0px; padding-top: 20px;">
<!-- ======================================= DEPAN TU ==================================================== -->
				<div id="GiriReka" class="teskolom"> 
				<p style="text-align: center; font-size: 25 "><b>Giri Reka</b></p> 
					<table style="border: 0px solid black; font-family: arial, sans-serif; border-collapse: collapse; width: 100%; vertical-align: text-bottom"> 
						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Panah girireka → TU		
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/proses_edit.php">
 								<input type="text" name="nama deskripsi" value="test"
 										 style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Hotspot girireka → gazebo		
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi"
 										style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Hotspot girireka → depan TTG		
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi"
 										style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>

					</table>
				</div>
<!-- ============================ DEPAN TU ==================================================== -->

				<div id="DepanTU" class="teskolom"> 
				<p style="text-align: center; font-size: 25 "><b>Lobby TU FIK</b></p> 
					<table style="border: 0px solid black; font-family: arial, sans-serif; border-collapse: collapse; width: 100%; vertical-align: text-bottom"> 
						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Panah girireka → TU		
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi"
 										style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Hotspot girireka → gazebo		
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi"
 										style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>
						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Hotspot girireka → depan TTG		
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi"
 										style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>
					</table>
				</div>
<!-- ============================ Depan Techno Park ==================================================== -->

				<div id="TechnoPark" class="teskolom"> 
				<p style="text-align: center; font-size: 25 "><b>Depan Techno Park</b></p> 
					<table style="border: 0px solid black; font-family: arial, sans-serif; border-collapse: collapse; width: 100%; vertical-align: text-bottom"> 
						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Panah Techno Park → Giri Reka		
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi" 
 								 		style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>
						
					</table>
				</div>
<!-- ============================ Gazebo ==================================================== -->

				<div id="Gazebo" class="teskolom"> 
				<p style="text-align: center; font-size: 25 "><b>Gazebo FIK</b></p> 
					<table style="border: 0px solid black; font-family: arial, sans-serif; border-collapse: collapse; width: 100%; vertical-align: text-bottom"> 
						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Panah Gazebo → Giri Reka		
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi" 
 								 		style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>

						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Papan Gazebo		
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi" 
 								 		style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>
						
					</table>
				</div>				
<!-- ===================================================================================-->
<!-- ============================ Depan Ruang Dekan ==================================================== -->

				<div id="DepanDekan" class="teskolom"> 
				<p style="text-align: center; font-size: 25 "><b>Depan Ruang Dekan FIK</b></p> 
					<table style="border: 0px solid black; font-family: arial, sans-serif; border-collapse: collapse; width: 100%; vertical-align: text-bottom"> 
						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Papan Ruang Dekan		
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi" 
 								 		style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>

						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Panah Ruang Dekan → Depan TU		
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi" 
 								 		style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>

						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Panah Ruang Dekan → Depan Dosen SI		
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi" 
 								 		style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>
						
					</table>
				</div>
<!-- ===================================================================================-->	
<!-- ============================ Depan Ruang Dekan ==================================================== -->

				<div id="DosenSI" class="teskolom"> 
				<p style="text-align: center; font-size: 25 "><b>Depan Ruang Dosen SI</b></p> 
					<table style="border: 0px solid black; font-family: arial, sans-serif; border-collapse: collapse; width: 100%; vertical-align: text-bottom"> 
						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Papan Ruang Dosen SI		
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi" 
 								 		style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>

						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Panah Ruang Dosen SI → Ruang Dekan
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi" 
 								 		style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>

						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Panah Depan Dosen SI → Depan Wadek		
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi" 
 								 		style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>
						
					</table>
				</div>
<!-- ===================================================================================-->			
<!-- ============================ Depan Ruang Dekan ==================================================== -->

				<div id="WakilDekan" class="teskolom"> 
				<p style="text-align: center; font-size: 25 "><b>Depan Ruang Wakil Dekan</b></p> 
					<table style="border: 0px solid black; font-family: arial, sans-serif; border-collapse: collapse; width: 100%; vertical-align: text-bottom"> 
						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Papan Ruang Wakil Dekan		
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi" 
 								 		style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>

						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Panah Ruang Wakil Dekan → Depan Ruang Dosen SI
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi" 
 								 		style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>

						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Panah Depan Dosen SI → Depan Wadek		
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi" 
 								 		style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>
						
					</table>
				</div>
<!-- ===================================================================================-->
<!-- ==================== Depan Ruang Kaprodi TF ==================================================== -->

				<div id="KaprodiTF" class="teskolom"> 
				<p style="text-align: center; font-size: 25 "><b>Depan Ruang Kaprodi TF</b></p> 
					<table style="border: 0px solid black; font-family: arial, sans-serif; border-collapse: collapse; width: 100%; vertical-align: text-bottom"> 
						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Papan Ruang Kaprodi TF	
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi" 
 								 		style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>

						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Panah Depan Ruang Kaprodi TF → Depan TU
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi" 
 								 		style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>

						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Panah Depan Ruang Kaprodi TF → Depan Ruang Dosen TF		
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi" 
 								 		style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>
						
					</table>
				</div>
<!-- ===================================================================================-->
<!-- ==================== Depan Ruang Dosen TF ==================================================== -->

				<div id="Hima" class="teskolom"> 
				<p style="text-align: center; font-size: 25 "><b>Depan Ruang Hima</b></p> 
					<table style="border: 0px solid black; font-family: arial, sans-serif; border-collapse: collapse; width: 100%; vertical-align: text-bottom"> 
						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Papan Himatifa	
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi" 
 								 		style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>

						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Papan Himasifo	
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi" 
 								 		style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>

						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Panah Depan Hima → Depan Ruang Dosen TF
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi" 
 								 		style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>

						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Panah Depan Hima → Gazebo		
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi" 
 								 		style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>
						
					</table>
				</div>
<!-- ===================================================================================-->
<!-- ==================== Depan Ruang Dosen TF ==================================================== -->

				<div id="DosenTF" class="teskolom"> 
				<p style="text-align: center; font-size: 25 "><b>Depan Ruang Dosen TF</b></p> 
					<table style="border: 0px solid black; font-family: arial, sans-serif; border-collapse: collapse; width: 100%; vertical-align: text-bottom"> 
						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Papan Ruang Dosen TF	
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi" 
 								 		style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>

						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Panah Depan Ruang Dosen TF → Depan HIMA
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi" 
 								 		style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>

						<tr>
							<td style="vertical-align: text-bottom; padding-left: 30px;">
								Panah Depan Ruang Dosen TF → Depan Ruang Kaprodi TF		
							</td>
							<td style="vertical-align: text-bottom;">
								<form action="/action_page.php">
 								<input type="text" name="nama deskripsi" value="Masukkan deskripsi" 
 								 		style="width: 313px"> 
  								<input type="submit" value="Submit">
								</form>
							</td>
						</tr>
						
					</table>
				</div>
<!-- ===================================================================================-->			
			</td>
		</table>
	</body>