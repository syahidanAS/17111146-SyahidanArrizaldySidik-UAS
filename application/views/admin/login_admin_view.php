<link rel="stylesheet" href="<?php echo base_url()?>aset/gayaAdmin.css">

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
            <div class="row">
              <h2>Masuk admin</h2>
               <img src="<?php echo base_url()?>gambar/logo_fix.png" style="width:100px; height:100px;" alt="">
              <h5>Massachusetts Institute of Technology</h5>
             
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">


                <!-- Ini buat login -->
                      <form id="login-form" action="<?php echo site_url("login_admin/login_aksi") ?>" method="POST" role="form" style="display: block;">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                 
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
                          <a href="<?php echo site_url("login_mahasiswa")?>" tabindex="5" class="teks-bawah">Masuk sebagai mahasiswa</a>
                          <br>
                          <br>
                          <a href="<?php echo site_url("home")?>" tabindex="5" class="teks-bawah">Batalkan</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>

                <!-- Ini batas form login -->

    

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>