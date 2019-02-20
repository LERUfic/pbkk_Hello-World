<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Hello World!</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
	<style type="text/css">
		html *
		{
		   font-size: 17px !important;
		   font-family: Arial !important;
		}

		body {
			background-color:#f1f1f1;
			background-image:url(<?php echo base_url('images/noise.png'); ?>);
			background-repeat:repeat;
			background-position:top left;
			background-attachment:fixed;
			}
	</style>

</head>
<body>

	<div id="particles-js"></div>
	<div class="ui container">
	    <!-- <div class="logo" style="text-align: center; padding-top:1.5%;">
			<img src="/homepage/logo.png">
	    </div> -->
		<div class="ui horizontal section divider">HELLO WORLD!</div>
		<div class="ui grid">
			<div class="row"></div>
			<div class="row">
				<div class="two wide column"></div>
				<div class="four wide column">
					<img src="<?php echo base_url('images/foto.jpg'); ?>" alt="" width="256px" height="auto">
				</div>
				<div class="one wide column"></div>
				<div class="six wide column">
					<div class="ui grid">
						<div class="row">
							<div class="four wide column">
								Nama
							</div>
							<div class="one wide column">
								:
							</div>
							<div class="ten wide column">
								Aguel Satria Wijaya
							</div>
						</div>
						<div class="row">
							<div class="four wide column">
								NRP
							</div>
							<div class="one wide column">
								:
							</div>
							<div class="ten wide column">
								05111640000056
							</div>
						</div>
						<div class="row">
							<div class="four wide column">
								No. HP
							</div>
							<div class="one wide column">
								:
							</div>
							<div class="ten wide column">
								085702400989
							</div>
						</div>
						<div class="row">
							<div class="one wide column"></div>
							<div class="fourteen wide column">
								<div class="ui mini images">
									<a href="https://www.facebook.com/aguelsatria" class="ui image"><img src="<?php echo base_url('images/facebook.png'); ?>" alt=""></a>
									<a href="https://twitter.com/AguelW" class="ui image"><img src="<?php echo base_url('images/twitter.png'); ?>" alt=""></a>
									<a href="https://www.linkedin.com/in/aguelsatria/" class="ui image"><img src="<?php echo base_url('images/linkedin.png'); ?>" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="row"></div>
			<div class="row"></div>
			<div class="ui horizontal section divider">My Projects</div><br />
			<div class="ui vertically divided grid">
				<div class="row">
					<div class="three wide column"></div>
					<div class="four wide column">
						<h3>AJKuiz</h3>
						AJKuiz merupakan online web-based game yang menggunakan Node.JS dan Socket.IO dalam penggunaannya. Gamenya adalah pemain menjawab pertanyaan yang ada di layar terpisah dan menggunakan device pilihan mereka untuk memilih pilihan jawabannya.
					</div>
					<div class="three wide column"></div>
					<div class="four wide column">
						<img class="ui medium image" src="<?php echo base_url('images/ajkuiz.png'); ?>" alt="">
					</div>
				</div>
				<div class="row">
					<div class="three wide column"></div>
					<div class="four wide column">
						<img class="ui medium image" src="<?php echo base_url('images/reservasi.png'); ?>" alt="">
					</div>
					<div class="three wide column"></div>
					<div class="four wide column">
						<h3>Reservasi AJK</h3>
						Sebuah website untuk melakukan reservasi sarana dan prasarana yang ada di Lab AJK secara online. User bisa melakukan reservasi PC, alat-alat, dan juga reservasi kelas setelah nantinya disetujui oleh Administrator AJK.
					</div>
				</div>
				<div class="row">
					<div class="three wide column"></div>
					<div class="four wide column">
						<h3>e-Request Surat</h3>
						e-Request Surat merupakan sebuah aplikasi untuk melakukan request surat kepada sekretaris yang diintegrasikan dengan aplikasi LINE sebagai media notifikasinya.
					</div>
					<div class="three wide column"></div>
					<div class="four wide column">
						<img class="ui medium image" src="<?php echo base_url('images/surat.png'); ?>" alt="">
					</div>
				</div>
				<div class="row">
					<div class="three wide column"></div>
					<div class="four wide column">
						<img class="ui medium image" src="<?php echo base_url('images/gemastik.png'); ?>" alt="">
					</div>
					<div class="three wide column"></div>
					<div class="four wide column">
						<h3>Prototype Backend Website Final CTF</h3>
						Membuat website final CTF namun hanya sekedar mekanisme backendnya saja. Backend meliputi mekanisme input flag, start dan stop permainan, management flag tiap team, management user tiap team.
					</div>
				</div>
				<div class="row">
					<div class="three wide column"></div>
					<div class="four wide column">
						<h3>Tokoreadya</h3>
						Membuat simple e-commerce menggunakan PHP from scratch sederhana input barang, management harga, mekanisme alur jual-beli. Project ini merupakan Final Project dari mata kuliah Pemrograman Website.
					</div>
					<div class="three wide column"></div>
					<div class="four wide column">
						<img class="ui medium image" src="<?php echo base_url('images/tokoreadya.png'); ?>" alt="">
					</div>
				</div>
				<div class="row">
					<div class="three wide column"></div>
					<div class="four wide column">
						<img class="ui medium image" src="<?php echo base_url('images/ppdb.png'); ?>" alt="">
					</div>
					<div class="three wide column"></div>
					<div class="four wide column">
						<h3>PPDB Surabaya 2018</h3>
						Website untuk pendaftaran siswa baru tahun ajaran 2018/2019. Saya bertugas sebagai bagian aplikasi bagian pendaftaran calon siswa SD.
					</div>
				</div>
				<div class="row">
					<div class="three wide column"></div>
					<div class="four wide column">
						<h3>e-Vote Pilrek 2019</h3>
						Aplikasi voting online untuk memilih bakal calon rektor ITS 2019.
					</div>
					<div class="three wide column"></div>
					<div class="four wide column">
						<img class="ui medium image" src="<?php echo base_url('images/evote.png'); ?>" alt="">
					</div>
				</div>
				<div class="row">
					<div class="three wide column"></div>
					<div class="four wide column">
						<img class="ui medium image" src="<?php echo base_url('images/sipks.png'); ?>" alt="">
					</div>
					<div class="three wide column"></div>
					<div class="four wide column">
						<h3>Mobile SIPKS</h3>
						Aplikasi untuk membantu kepala sekolah dan bendahara untuk melakukan pembayaran. Saya bertugas untuk membangun infrastruktur server dan backend security.
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script> 
	<!-- <script src="/homepage/js/jquery.min.js" type="text/javascript"></script> -->
  	<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
</body>
</html>
