<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $title }}</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('timplit')}}/templat/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('timplit')}}/templat/css/sb-admin-2.min.css" rel="stylesheet">

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
                                <h1 class="h4 text-gray-900 mb-4">Silahkan input Renungan</h1>
                            </div>
                            <form class="user">

                                <div class="form-group">
                                    <input type="date" class="form-control form-control-user" name="tanggal" id="tanggal" placeholder="Tanggal Renungan">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="ayat" id="ayat" placeholder="Link Ayat Renungan">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="content" id="content" placeholder="Content Renungan">
                                </div>

                                <a href="login.html" class="btn btn-primary btn-user btn-block">
                                    Kirim
                                </a>
                                <hr>
                                <a href="/renungantabel" class="btn btn-dark btn-user btn-block" >
                                    Kembali ke Tabel Renungan
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.22.2/firebase-app.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries
      
        
      
        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
      </script>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('timplit')}}/templat/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('timplit')}}/templat/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('timplit')}}/templat/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('timplit')}}/templat/js/sb-admin-2.min.js"></script>

</body>

</html>