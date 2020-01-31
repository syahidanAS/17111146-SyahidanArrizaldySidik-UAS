<link rel="stylesheet" href="<?php echo base_url()?>aset/profilestyle.css">
<nav class="navbar fixed-top navbar-expand-md navbar-light " style="background:#212121;">
  <div class="container">
    <a class="navbar-brand text-danger" href="#" ><h2><img src="<?php echo base_url()?>gambar/mit.png" style="width:80px; height:30px;" alt=""></h2></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
      </ul>
      <ul class="nav navbar-nav ml-auto  ">
        <li class="nav-item">
          <a class="nav-link text-danger" href="<?= site_url("login_mahasiswa/logout"); ?>">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<body style=" background-image: linear-gradient(to right top, #340505, #520811, #730c17, #95131b, #b71c1c);">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="content">
    <div class="card">

        <div class="firstinfo"><img src="<?php echo base_url()?>gambar/user.png" />
            <div class="profileinfo">
                <h1><?php print_r($mhs[0]["nama"]); ?></h1>
                <h3><?php print_r($mhs[0]["npm"]); ?></h3>
                <p class="bio"> <a href="#"><?php print_r($mhs[0]["kelas"]);?><span> || </span><?php print_r($mhs[0]["jk"]); ?></a></p>


            </div>
        </div>
    </div>
    <div class="badgescard"> 
        <span class=""><?php print_r($mhs[0]["jurusan"]);?> ||</span>
        <span class=""><?php print_r($mhs[0]["status"]); ?></span>
       
    </div>
</div>
</body>




