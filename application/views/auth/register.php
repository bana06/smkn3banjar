<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $tajuk ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= site_url('') ?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= site_url('') ?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="POST" action="<?= site_url('Auth/register') ?>">
                <div class="form-group">
                  <input name="name" type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Fullname">
                  <?= form_error('name', '<div class="alert text-danger">', '</div>') ?>
                </div>
                <div class="form-group">
                  <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                  <?= form_error('email', '<div class="alert text-danger">', '</div>') ?>
                </div>
                <div class="form-group">
                  <input name="no_hp" type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="No Hp.">
                </div>
                <div class="form-group">
					<select name="provinsi" class="form-control" required>
						<option>Pilih Provinsi</option>
						<option value="1">Jawa Barat</option>
						<option value="2">Jawa Tengah</option>
						<option value="3">Jawa Timur</option>
					</select>
                </div>
                <div class="form-group">
                	<textarea class="form-control" name="alamat" cols="50" rows="5" placeholder="Alamat"></textarea>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    <?= form_error('password', '<div class="alert text-danger">', '</div>') ?>
                  </div>
                  <div class="col-sm-6">
                    <input name="password2" type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?= site_url('Auth/Login') ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= site_url('') ?>assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="<?= site_url('') ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= site_url('') ?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= site_url('') ?>assets/admin/js/sb-admin-2.min.js"></script>

</body>

</html>
