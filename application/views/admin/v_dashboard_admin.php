<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php")?>
</head>

<body id="page-top">

  <?php $this->load->view("admin/_partials/sidebar-navbar.php")?>
  
<!-- WRAPPER -->

		<!-- CONTENT -->

    <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">My Profile</h1>

          <div class="card mb-3" style="max-width: 540px;">
            <div class="card border-left-success shadow h-100 py-2">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="assets/images/profile/default.png" class="card-img">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?= $user['nama']; ?></h5>
                <p class="card-text"><?= $user['username']; ?></p>
                <p class="card-text"><small class="text-muted">Admin since <?= date('d F Y', $user['date_created'])?></small></p>
              </div>
            </div>
          </div>
        </div>
          </div>


    </div>
    
		<!-- END CONTENT -->

    <!-- footer -->
    <?php $this->load->view("admin/_partials/footer.php")?>
   
  </div>

    <!-- javascript -->
    <?php $this->load->view("admin/_partials/scrolltop.php")?>
    <?php $this->load->view("admin/_partials/modal.php")?>
    <?php $this->load->view("admin/_partials/js.php")?>
    
</body>

</html>