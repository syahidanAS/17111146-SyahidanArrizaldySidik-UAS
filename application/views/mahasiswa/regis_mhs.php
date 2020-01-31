<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="<?php echo base_url()?>aset/login.js"></script>
<link rel="stylesheet" href="<?php echo base_url()?>aset/gaya.css">

<body style="background:#e8eaf6;">
<div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <h2>Sistem Informasi akademik</h2>
            <img src="<?php echo base_url()?>gambar/logo_fix.png" style="width:100px; height:100px;" alt="">
             <h5>Massachusetts Institute of Technology</h5>
            <br>
            <div class="row">
              <div class="col-xs-6">
                <a href="<?php echo site_url("login_mahasiswa")?>"  >Masuk</a>
              </div>
              <div class="col-xs-6">
                <a href="" id="register-form-link" class="active">Daftar</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">


                
                <!-- Ini Form registrasi
                 -->
                <form id="register-form" action="<?php echo site_url("daftar_mahasiswa/daftarMahasiswa")?>" method="post" role="form" style="display: block;">
                  <div class="form-group">
                    <input type="text" name="npm" id="username" tabindex="1" class="form-control" placeholder="Masukan NPM" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password1" id="email" tabindex="1" class="form-control" placeholder="Password" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password2" id="confirm-password" tabindex="2" class="form-control" placeholder="Ketik ulang password">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <?php echo $this->session->flashdata('pesan'); ?>
                      <p style="text-align:center; color:#808080;">Pastikan NPM anda sudah terdaftar, jika belum harap hubungi admin</p>
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Daftar">
                      </div>


                    </div>
                  </div>
                </form>
                <!-- Ini batas form registrasi -->


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>