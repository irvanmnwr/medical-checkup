<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Check UP</title>
  <?php $this->load->view('layout/v_css');?>
    <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
            <h1 class="m-0"> </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('Dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Checkup</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="overflow-x:auto;">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th style="width: 20px">Tanggal periksa</th>
                      <th style="width: 150px">Nama</th>
                      <th style="width: 150px">No.BPJS</th>
                      <th style="width: 20px">Jenis Kelamin</th>
                      <th style="width: 250px">Alamat</th>
                      <th style="width: 20px">Tanggal Lahir</th>
                      <th style="width: 250px">Ananmesa</th>
                      <th style="width: 250px">Diagnosa</th>
                      <th style="width: 250px">Penatalaksanaan dan Pengobatan</th>
                      <th style="width: 50px">Kesadaran</th>
                      <th style="width: 50px">TD</th>
                      <th style="width: 50px">HR</th>
                      <th style="width: 50px">RR</th>
                      <th style="width: 50px">Suhu</th>
                    </tr>
                  </thead>
                  <tbody>
                        <?php
                          $no=1;
                          foreach ($hasil as $item)
                          {
                              ?>
                          <tr>
                              <td><?php echo $no;?></td>
                              <td><?php echo $item->tgl_periksa;?></td>
                              <td><?php echo $item->nama;?></td>
                              <td><?php echo $item->no_bpjs;?></td>
                              <td><?php echo $item->jns_kelamin;?></td>
                              <td><?php echo $item->alamat;?></td>
                              <td><?php echo $item->tgl_lahir;?></td>
                              <td><?php echo $item->amannesa;?></td>
                              <td><?php echo $item->diagnosa;?></td>
                              <td><?php echo $item->pengobatan;?></td>
                              <td><?php echo $item->kesadaran;?></td>
                              <td><?php echo $item->td;?></td>
                              <td><?php echo $item->hr;?></td>
                              <td><?php echo $item->rr;?></td>
                              <td><?php echo $item->suhu;?></td>
                          </tr>
                          <?php
                                  $no++;
                          }
                              ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
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
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
</html>
