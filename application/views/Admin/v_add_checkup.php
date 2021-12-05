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
              <h6 class="m-0 font-weight-bold text-primary">Form Checkup</h6>
            </div>
            <div class="card-body">
              <form action="<?= site_url('Dashboard/proses') ?>" method="post">
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-group col-lg-12">
                      <input type="hidden" name="id" class="form-control" value="<?php echo $pasien->id; ?>">
                    </div>
                      <div class="form-group col-lg-12">
                          <label>Amannesa</label>
                            <div class="pull-right">
                              <a onclick="removeDesc()" class="btn">
                                <i class="fa fa-minus"></i>
                              </a>
                              <a onclick="addDesc()" class="btn">
                                <i class="fa fa-plus"></i>
                              </a>
                            </div>
                            <div id="desc">
                               <input type="text" class="form-control" name="description[]" required/><br>
                            </div>
                      </div>
                      <div class="form-group col-lg-12">
                          <label>Diagnosa</label>
                            <div class="pull-right">
                              <a onclick="removeSpare()" class="btn">
                                <i class="fa fa-minus"></i>
                              </a>
                              <a onclick="addSpare()" class="btn">
                                <i class="fa fa-plus"></i>
                              </a>
                            </div>
                            <div id="spare">
                               <input type="text" class="form-control" name="sparepart[]" required/><br>
                            </div>
                      </div>
                      <div class="form-group col-lg-12">
                          <label>Terapi</label>
                            <div class="pull-right">
                              <a onclick="removeCount()" class="btn">
                                <i class="fa fa-minus"></i>
                              </a>
                              <a onclick="addCount()" class="btn">
                                <i class="fa fa-plus"></i>
                              </a>
                            </div>
                            <div id="count">
                               <input type="text" class="form-control" name="countermeasure[]" required/><br>
                            </div>
                      </div>
                      <div class="form-group">
                      <input type="submit" name="submit" value="Simpan" class="form-control btn btn-primary">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="kesadaran">Vital Sign</label>
                      <!-- <input type="text" name="kesadaran" class="form-control" placeholder="kesadaran" required> -->
                      <select id="kesadaran" name="kesadaran" class="form-control" placeholder="kesadaran">
                        <option value="" selected>--Pilihan--</option>
                        <option value="CM">CM</option>
                        <option value="Apatis">Apatis</option>
                        <option value="somnolen">somnolen</option>
                        <option value="Delirium">Delirium</option>
                        <option value="Stupor">Stupor</option>
                        <option value="Koma">Koma</option>
                      </select>
                      <small class="text-danger"></small>
                    </div>
                    <div class="form-group">
                      <input type="text" name="td" class="form-control" placeholder="TD" required>
                      <small class="text-danger"></small>
                    </div>
                    <div class="form-group">
                      <input type="text" name="hr" class="form-control" placeholder="HR" required>
                      <small class="text-danger"></small>
                    </div>
                    <div class="form-group">
                      <input type="text" name="rr" class="form-control" placeholder="RR" required>
                      <small class="text-danger"></small>
                    </div>
                    <div class="form-group">
                      <input type="text" name="suhu" class="form-control" placeholder="Suhu" required>
                      <small class="text-danger"></small>
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
<script>
          function addDesc() {
            let desc = document.getElementById("desc");
            desc.insertAdjacentHTML("beforeend", "<input type='text' class='form-control' name='description[]' /><br>");
        }

        function removeDesc() {
            let desc = document.getElementById("desc");
            let last = desc.lastChild;
            desc.removeChild(last);
        }

            function addSpare() {
            let spare = document.getElementById("spare");
            spare.insertAdjacentHTML("beforeend", "<input type='text' class='form-control' name='sparepart[]' /><br>");
        }

        function removeSpare() {
            let spare = document.getElementById("spare");
            let last = spare.lastChild;
            spare.removeChild(last);
        }

        function addCount() {
            let count = document.getElementById("count");
            count.insertAdjacentHTML("beforeend", "<input type='text' class='form-control' name='countermeasure[]' /><br>");
        }

        function removeCount() {
            let count = document.getElementById("count");
            let last = count.lastChild;
            count.removeChild(last);
        }
</script>

</body>
</html>
