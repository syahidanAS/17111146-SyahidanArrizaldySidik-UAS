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
                <a href="#" class="active" id="login-form-link">Masuk</a>
              </div>
              <div class="col-xs-6">
                <a href="<?php echo site_url("daftar_mahasiswa")?>" >Daftar</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">


                <!-- Ini buat login -->
                <form id="login-form" action="<?php echo site_url("login_mahasiswa/loginMahasiswa")?>" method="post" role="form" style="display: block;">

                  <div class="form-group">
                    <input type="text" name="npm" id="username" tabindex="1" class="form-control" placeholder="Masukan NPM" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
              
                <?php echo $this->session->flashdata('validasi_salah'); ?>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Masuk">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="text-center">
                          <a href="<?php echo site_url("login_admin")?>" tabindex="5" class="teks-bawah">Masuk sebagai admin</a>
                          <br>
                          <br>
                          <a href="<?php echo site_url("home")?>" tabindex="5" class="teks-bawah">Batalkan</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>

                <!-- Ini batas form login -->

                
                <!-- Ini Form registrasi
                 -->
                <form id="register-form" action="<?php echo site_url("login_mahasiswa/daftarMahasiswa")?>" method="post" role="form" style="display: none;">
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