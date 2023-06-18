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
                                <h1 class="h4 text-gray-900 mb-4">Silahkan input NYTB</h1>
                            </div>
                            <form class="user" action="{{ url('add') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="title" id="judul" placeholder="judul">
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="nada" id="nada" placeholder="nada dasar">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="nomor" id="nomor" placeholder="nomor">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="bait" id="bait" placeholder="bait">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="koor" id="koor" placeholder="koor">
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Kirim
                                </button>

                                <hr>
                                <a href="/nytbtabel" class="btn btn-dark btn-user btn-block" >
                                    Kembali ke Tabel NYTB
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
      
        // Your web app's Firebase configuration
        const firebaseConfig = {
          apiKey: "AIzaSyDJilVGiXG93nn40m8DjjcRRgMvLYMe6mA",
          authDomain: "pesan-31d98.firebaseapp.com",
          databaseURL: "https://pesan-31d98-default-rtdb.firebaseio.com",
          projectId: "pesan-31d98",
          storageBucket: "pesan-31d98.appspot.com",
          messagingSenderId: "722669246140",
          appId: "1:722669246140:web:5dcef736ae84ea6782e2b9"
        };
      
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