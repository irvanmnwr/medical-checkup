<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  <?php $this->load->view('layout/v_css');?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- Navbar -->
    <?php $this->load->view('layout/v_header');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <?php $this->load->view('layout/v_sidebar');?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('Dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= site_url('Dashboard/pasien'); ?>">Pasien</a></li>
              <li class="breadcrumb-item active">Add Data</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Registrasi Pasien</h6>
            </div>
            <div class="card-body">
              <form action="<?php echo base_url(). 'Dashboard/tambah_aksi'; ?>" method="post">
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" name="nama" class="form-control" required>
                      <small class="text-danger"> </small>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Tempat Lahir</label>
                          <input type="text" name="tmpt_lahir" class="form-control" required>
                          <small class="text-danger"> </small>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Tanggal Lahir</label>
                          <input type="date" name="tgl_lahir" class="form-control" required>
                          <small class="text-danger"> </small>
                        </div>
                      </div>
                    </div>
                <div class="form-group">
                    <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="jns_kelamin" value="Laki-Laki" checked>
                        <label for="radioPrimary1">Laki-Laki</label>
                      </div><br><br>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary2" name="jns_kelamin" value="Perempuan">
                        <label for="radioPrimary2">Perempuan</label>
                      </div>
                    </div>
                </div>
                    <div class="form-group">
                      <label>Nomor BPJS</label>
                      <input type="text" name="no_bpjs" class="form-control" required>
                      <small class="text-danger"> </small>
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <textarea name="alamat" rows="3" class="form-control" required> </textarea>
                      <small class="text-danger"> </small>
                    </div>
                    <div class="form-group">
                      <input type="submit" name="submit" value="Tambah" class="form-control btn btn-primary">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <?php $this->load->view('layout/v_footer');?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
    <?php $this->load->view('layout/v_js');?>
</body>
</html>
