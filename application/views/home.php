<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



<div class="navbar-fixed">	
	<nav class="black">
		<div class="container">
			<div class="nav-wrapper">
				<a href="#" class="brand-logo  red-text darken-2" style="font-weight:bold;">MIT</a>
				<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down ">
					<li ><a  href="#menu1" class="white-text">Beranda</a></li>
					<li><a href="<?= site_url("login_mahasiswa"); ?>" class="white-text">Mahasiswa</a></li>
					<li><a href="<?= site_url("login_admin"); ?>" class="white-text">Admin</a></li>
					<li><a href="#menu3" class="white-text">Prestasi</a></li>
				</ul>
			</div>
		</div>
	</nav>
</div>
<ul class="sidenav" id="mobile-demo">
	<li><a href="#menu1">Beranda</a></li>
	<li><a href="<?= site_url("mahasiswa/login_mahasiswa"); ?>">Mahasiswa</a></li>
	<li><a href="<?= site_url("admin/login_admin"); ?>">Admin</a></li>
	<li><a href="mobile.html">Mobile</a></li>
</ul>



<!-- body -->
<link rel="stylesheet" href="<?php echo base_url()?>css/section_custom.css">
<body class="grey darken-4">
	<section class="scrollspy" id="menu1">
		<div class="parallax-container">
			<div class="parallax"><img src="<?php echo base_url()?>gambar/mit.jpg"></div>
			<div class="logo"><img   style="width:150px; height:150px;  display: block;
				margin-left: auto; margin-right: auto; margin-top:10%; "src="<?php echo base_url()?>gambar/logo_fix.png"></div>	

			<div class="Judul white-text" style=""><center><h3 style="display: block;
				margin-left: auto; margin-right: auto; ">MASSACHUSETTS INSTITUTE OF TECHNOLOGY</h3></center></div>
		</div>
		<div class="container">
			<div class="row"><h3 class="center white-text">Tentang Kami</h3></div>
			<div class="row" style="text-align:justify;">
				<div class="col m6"><span class="white-text" ><h5>Sejarah</h5>MIT didirikan oleh WIlliam Barton Rogers, seorang Gubernur Massachusetts dan Profesor di University of Virginia, pada tanggal 10 April 1861. Kampus ini mengadopsi Politeknik di Eropa. MIT mempunyai berbagai sekolah/fakultas yang baik seperti MIT EECS (Teknik Elektro), MIT Aerospace Engineering, Harvard-MIT Health Science dan Technology (Kesehatan dan Kedokteran), MIT School of Humanities, Arts, and Social Sciences (Kemanusiaan, seni dan kemasyarakatan), School of Sciences, School of Engineering, School of Architecture and Planning, Sloan of Management, dan lainnya. MIT telah menghasilkan  93 orang pemenang Noble, 25 pemenang Turing Awards, 39 Astronot dan banyak alumni berprestasi lainnya yang telah memperoleh prestasi. Selain itu Alumnus MIT banyak yg bekerja di perusahaan terkenal seperti General Motors, Perusahaan-perusahaan di Silicon Valley dan banyak tempat lainnya. MIT mempunyai fokus riset yang luar biasa di bidang robotika, kecerdasan buatan, kemanusiaan, kesehatan, energi, seni, pembangunan dan arsitektur.</span>
			</div>
			<div class="row" style="text-align:justify;">
				<div class="col m6"><span class="white-text"><h5>Fakta Kunci</h5>
					<h6 class="red-text darken-2"> History</h6>
					Incorporated..........................1861
					<br>
					Motto.......................................“Mens et manus” (“Mind and hand”)
					<br>
					<h6 class="red-text darken-2">Campus</h6>
					Location....................................Cambridge, MA USA
					<br>
					Size..............................................166 acres (0.67 km2)
					<br>
					Student residences................18
					<br>
					Playing fields............................26 acres (0.11 km2)
					<br>
					Publicly sited works of art...60+
					<h6 class="red-text darken-2"> Mission</h6>
					Misi MIT adalah untuk memajukan pengetahuan dan mendidik siswa dalam sains, teknologi, dan bidang beasiswa lainnya yang akan melayani bangsa dan dunia di abad ke-21. Institut berkomitmen untuk menghasilkan, menyebarluaskan, dan melestarikan pengetahuan, dan untuk bekerja dengan orang lain untuk membawa pengetahuan ini untuk menghadapi tantangan besar dunia.
				</span>
			</div>
		</div>
	</section>
</body>
<body class="grey darken-3">
	<section class="scrollspy" id="menu3">
		<div class="parallax-container pendek">
			
			<div class="parallax"><img src="<?php echo base_url()?>gambar/prestasi.jpeg"></div>
		</div>
		<div class="container">
			<div class="row"><h3 class="center white-text">Prestasi</h3></div>
			<div class="row" style="text-align:justify;">
				
			</div>
			<div><video  src="<?php echo base_url()?>gambar/video.mp4" controls width="100%" height="50%"></video></div>
			
			
		</section>
		
	</body>
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script type="text/javascript">
		const paralax = document.querySelectorAll('.parallax');
		M.Parallax.init(paralax);
		const sidenav = document.querySelectorAll('.sidenav');
		M.Sidenav.init(sidenav);
		const scroll = document.querySelectorAll('scrollspy');
		M.ScrollSpy.init(scroll);
	</script>