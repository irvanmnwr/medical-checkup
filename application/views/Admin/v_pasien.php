<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
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
            <h1 class="m-0">Data Pasien</h1>
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
                <div class="col-sm-2 align-center">
                  <a href="<?= site_url('Dashboard/add_pasien'); ?>" class="btn btn-block bg-gradient-primary btn-sm ">Add Data</a></div><br>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pasien</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>No.BPJS</th>
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      <th>Pengaturan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                    if($pasien) {
                    foreach ($pasien->result_array() as $row) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['no_bpjs']; ?></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['jns_kelamin']; ?></td>
                            <td>
                                <a href="<?= base_url('Dashboard/edit/').$row['id'];?>" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('Dashboard/delete_pasien/').$row['id'];?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
                                <a href="<?= base_url('Dashboard/checkup/').$row['id'];?>" class="btn btn-success btn-circle btn-sm"><i class="fa fa-file"></i></a>
                                <a href="<?= base_url('pdf/cetak/').$row['id']; ?>"class="btn btn-info btn-circle btn-sm"><i class="fa fa-download"></i></a>
                            </td>
                        </tr>
                      <?php } ?>
                <?php }else{ ?>
                    <tr>
                        <td colspan="7" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                <?php } ?>
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
