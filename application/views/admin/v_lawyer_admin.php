<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php")?>
</head>

<body id="page-top">

  <?php $this->load->view("admin/_partials/sidebar-navbar.php")?>
  
  <!-- WRAPPER -->
  <div class="container-fluid">
      <div class="card border-bottom-success">
        <div class="card shadow mb-4">
        <div class="card-header">
         <h4 class="m-0 font-weight-bold text-success">Data Lawyer</h4>
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">

    <!-- CONTENT -->
    <div class="table-responsive">
    <table class="table table-striped" id="dataTable">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Alamat</th>
          <th>No Telepon</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        </tr>
      </tbody>
    </table>
  </div>
</div>
    <!-- END CONTENT -->

<!-- END OF CONTAINER -->
</blockquote>
        </div>
      </div>
</div>
    <!-- footer -->
    <?php $this->load->view("admin/_partials/footer.php")?>

    <!-- javascript -->
    <?php $this->load->view("admin/_partials/scrolltop.php")?>
    <?php $this->load->view("admin/_partials/modal.php")?>
    <?php $this->load->view("admin/_partials/js.php")?>
</body>

</html>