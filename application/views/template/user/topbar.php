    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background-color: darkblue;">
          <!-- Image and text -->
          <nav class="navbar navbar-light bg-info">
            <a class="navbar-brand" href="<?= base_url('home'); ?>">
              <img src="<?= base_url('assets/img/logo/Herbie.PNG'); ?>" width="30" height="30" class="d-inline-block align-top" alt="">
              <b>PT. IT Galeri <sup>II</sup></b>
            </a>
          </nav>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('home'); ?>">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('home/profile_perusahaan'); ?>">Profile Perusahaan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('home/galeri'); ?>">Galeri Perusahaan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('home/lowongan'); ?>">Lowongan Kerja</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('home/tentang_kami') ?>">Kontak Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('home/info') ?>"> Info</a>
              </li>

              <?php 
              if (!empty($this->session->userdata('email'))) { ?>
                <li class="nav-item">
                  <a class="nav-item nav-link" href="<?= base_url('home/profil'); ?>">Selamat Datang :<b>"<?= $user; ?>"</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-item nav-link" href="<?= base_url('home/logout'); ?>"> Logout</a>
                </li>
                <?php } else { ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pelamar
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" data-toggle="modal" data-target="#daftar">Daftar</a>
                  <a class="dropdown-item" data-toggle="modal" data-target="#login">Login</a>
                </div>
              </li>
            <?php } ?>
              
            </ul>
          </div>

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

        </nav>
        <!-- End of Topbar -->

            <!-- Modal daftar -->
            <div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Daftar Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="<?= base_url('member/daftar'); ?>" method="post">
                  <div class="modal-body">
                    <div class="form-group">
                      <input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                      <input type="text" name="email" id="email" class="form-control" placeholder="Alamat Email">
                    </div>
                    <div class="form-group">
                      <input type="text" name="password1" id="password1" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <input type="text" name="password2" id="password2" class="form-control" placeholder="Ketik ulang password">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Daftar</button>
                  </div>
                </form>
                </div>
              </div>
            </div>

            <!-- Modal Login -->
            <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="<?= base_url('member'); ?>" method="post">
                    <div class="modal-body">
                      <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="email" name="email" placeholder="Alamat Email">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                      </div>
                    </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Login</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>