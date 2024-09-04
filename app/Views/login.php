<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SILAKKOP - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>/template/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Sweetalert-->
    <link href="<?= base_url() ?>/template/vendor/sweetalert/sweetalert2.min.css" rel="stylesheet">

    <style>
        .split{
            height:100%;
            width:50%;
            position:fixed;
            z-index:1;
            top:0;
            overflow-x:hidden;
            padding-top:20px;
        }
        .left{
            left:0;
            background-color:grey;
        }
        .right{
            right:0;
        }
        .text-tengah{
            position: relative;
            top:50%;
            left:40%;
        }
    </style>

</head>

<body>

    <div class="container">
                
                        <div class="row">

                            <div class="col-6 split left">
                                <div class="h1 text-white text-tengah"><img class="" width="50px" src="<?= base_url() ?>/image-removebg-preview.png"> <b>SILAKKOP</b></div>

                            </div>

                            <div class="col-6 split right">
                                <div class="p-5"><br><br>

                                    <div class="text-center ">
                                        <div class="h1 text-gray-900 mb-4"><img class="" width="50px" src="<?= base_url() ?>/image-removebg-preview.png"> <b>SILAKKOP</b></div><br>
                                        <h1 class="text-gray-900 mb-4 text-center">Selamat Datang</h1>
                                        <h5 class="text-gray-900 mb-4 text-center">Silahkan Login untuk masuk ke Dashboard Pengguna</h5><br><br><br>
                                        
                                    </div>

                                <div class="row">
                                <div class="col-md-2">
                                    
                                </div>
                                <div class="col-md-8">
                                <h1 class="text-gray-900 mb-4">Login</h1><br>
                                    
                                    <form action="<?= base_url('/auth') ?>" method="post" class="user">
                                        <div class="form-group">
                                            <div class="text-left">
                                            <label for="" class="text-gray-900">Username</label>
                                            </label>
                                            <input type="text" name="username" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Username" required>
                                        </div><br>
                                        <div class="form-group">
                                            <div class="text-left">
                                            <label for="" class="text-gray-900">Password</label>
                                            </label>
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Masukkan Password" required>
                                        </div><br>
                                        <button type="submit" class="btn btn-success btn-block"> <span class="icon text-white-50">
                                                <span class="text-white">Login</span></button><br>
                                                

                                    </form>
                                    <a href="<?= site_url('forgot') ?>" class="text-tengah">Lupa Password?</a>
                                </div>
                                <div class="col-md-2">
                                    
                                </div>
                            </div><br>

                                    
                                </div>
                            </div>
                        </div>


    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>/template/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>/template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>/template/js/sb-admin-2.min.js"></script>

    <!-- Sweetalert -->
    <script src="<?= base_url() ?>/template/vendor/sweetalert/sweetalert2.min.js"></script>
    <script src="<?= base_url() ?>/template/vendor/sweetalert/myscript.js"></script>

</body>

</html>
