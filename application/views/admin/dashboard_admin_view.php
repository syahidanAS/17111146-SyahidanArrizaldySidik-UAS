<body style="background-image: linear-gradient(to right top, #340505, #520811, #730c17, #95131b, #b71c1c);
  " >
  <div class="container" style=" margin-top:2%;">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <img src="<?php echo base_url()?>gambar/mit.png" style="width:100px; height:50px;" alt="">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link text-success" href="" data-toggle="modal" data-target="#modalLoginForm">+Tambah Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="<?php echo site_url("login_admin/logout") ?>">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="card-title mb-4">
              
            </div>
            <div class="row">
              <div class="col-12">
                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Data Akademik</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="connectedServices-tab" data-toggle="tab" href="#connectedServices" role="tab" aria-controls="connectedServices" aria-selected="false">Bio Mahasiswa</a>
                  </li>
                </ul>
                <div class="tab-content ml-1" id="myTabContent">
                  <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                    <table class="table table-responsive" style="margin-top:2%; ">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">Nama</th>
                          <th scope="col">Kelas</th>
                          <th scope="col">Jurusan</th>
                          <th scope="col">NPM</th>
                          <th scope="col">Status</th>
                          <th scope="col" colspan="2" style="text-align:center;">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($mahasiswa as $u){ ?>
                        <tr>
                          <td><?php echo $u->nama ?></td>
                          <td><?php echo $u->kelas ?></td>
                          <td><?php echo $u->jurusan ?></td>
                          <td><?php echo $u->npm ?></td>
                          <td><?php echo $u->status ?></td>
                          <td><a href="<?= site_url("dashboard_admin/delete/".$u->npm);?>" ><img src="<?php echo base_url()?>gambar/bin.svg" style="width:20px; height:20px;"></a></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    <hr />
                  </div>
                  <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                    <table class="table table-responsive" style="margin-top:2%; ">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">Nama</th>
                          <th scope="col">Tempat Lahir</th>
                          <th scope="col">Alamat</th>
                          <th scope="col">Jenis Kelamin</th>
                          <th scope="col" colspan="2" style="text-align:center;">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($mahasiswa as $u){ ?>
                        <tr>
                          <td><?php echo $u->nama ?></td>
                          <td><?php echo $u->tmpt_lahir ?></td>
                          <td><?php echo $u->alamat ?></td>
                          <td><?php echo $u->jk ?></td>
                          <td><a href="<?= site_url("dashboard_admin/delete/".$u->npm); ?>"><img src="<?php echo base_url()?>gambar/bin.svg" style="width:20px; height:20px;"></a></td>

                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>




<!-- INI ADALAH MODAL -->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Masukan data mahasiswa</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <form id="login-form" action="<?php echo site_url("dashboard_admin/tambah") ?>" method="POST" role="form" style="display: block;">
          <div class="form-group">
            <input type="text" name="npm" id="username" tabindex="1" class="form-control" placeholder="Masukan NPM" value="">
          </div>
          <div class="form-group">
            <input type="text" name="nama" id="password" tabindex="2" class="form-control" placeholder="Nama Lengkap">
          </div>
          <div class="form-group">
            <input type="text" name="kelas" id="password" tabindex="2" class="form-control" placeholder="Kelas">
          </div>
          <div class="form-group">
            <select class="form-control" name="jurusan" style="width:100%;">
              <option  disabled selected>Program Studi</option>
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
              <option value="Teknik Industri">Teknik Industri</option>
              <option value="Teknik Mekanika">Teknik Mekanika</option>
              <option value="Teknik Elektro">Teknik Elektro</option>
              <option value="Matematika Terapan">Matematika Terapan</option>
              <option value="Ilmu Bisnis">Ilmu Bisnis</option>
              <option value="Kimia Murni">Kimia Murni</option>
            </select>
          </div>
          <div class="form-group">
            <input type="text" name="alamat" id="password" tabindex="2" class="form-control" placeholder="Alamat">
          </div>
          <div class="form-group">
            <h6>Status</h6>
            <input  type="radio" name="status" value="aktif"> Aktif
            <input  type="radio" name="status" value="cuti">  Cuti
          </div>
          <div class="form-group">
            <input type="text" name="tmpt_lahir" id="password" tabindex="2" class="form-control" placeholder="Tempat Lahir">
          </div>
          <div class="form-group" >
            <select class="form-control" name="jk" style="width:100%;">
              <option  disabled selected>Jenis Kelamin</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
            
          </div>
          
          <div class="form-group">
            <div class="row">
              <div class="col-sm-12 col-sm-offset-3">
                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-primary"  style="" value="SIMPAN">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-lg-12">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>


