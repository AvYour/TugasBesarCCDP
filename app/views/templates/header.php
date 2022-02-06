<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    Bootstrap CSS
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    		<!-- plugins:css -->
		<link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css" />
		<link rel="stylesheet" href="vendors/base/vendor.bundle.base.css" />
		<!-- endinject -->
		<!-- plugin css for this page -->
		<link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css" />
		<!-- End plugin css for this page -->
		<!-- inject:css -->
		<link rel="stylesheet" href="css/style.css" />
		<!--Plugin icon-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<!-- endinject -->
		<!-- JQuery -->
		<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
		<!-- SweetAlert2 -->
		<script src=" //cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <title>Halaman <?=$data['judul'] ?></title>
</head>

<body>
    <!--Navbar-->
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">Batik</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link btn btn-outline-success" href="#">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-outline-success" href="#">Daftar</a>
                            </li>
                        </ul>
                    </div>
				</div>
			</nav>
		</header>