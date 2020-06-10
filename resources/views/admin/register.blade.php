<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register</title>
  <link rel = "icon" href =  
"https://i.imgur.com/o5cQdRb.jpg" 
        type = "image/x-icon"> 
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" action="{{url('/add')}}" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{old('name')}}">
                  </div>
                   <div class="col-sm-6 mb-3 mb-sm-0">
               <input type="email" name="email" class="form-control" placeholder="Email"  value="{{old('email')}}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                   
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="repeatPassword" class="form-control" id="exampleRepeatPassword" placeholder="Repeat Password">
                  </div>
                </div>
                    <div class="login-box-body">

        <!-- for validation errors -->
        @if(count($errors) > 0)
            <div id="error" class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Error!</h4>
                @foreach($errors->all() as $error)
                    <div class="msg">{{$error}}</div>
                @endforeach
            </div>
        @endif



        @if(Session::get('error_msg'))
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Error!</h4>
                {{Session::get('error_msg')}}
            </div>
        @elseif(Session::get('success_msg'))
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success !</h4>
                {{Session::get('success_msg')}}
            </div>
        @endif
            <div class="form-group">
                <!-- /.col -->
                <div class="col-xs-4">
                    <button name="Submit" type="submit" class="btn btn-primary btn-user btn-block">Register</button>
                </div>
                <!-- /.col -->
            </div>
          </div>
       <!--  </form>
                <hr>
                <a href="https://mail.google.com/mail/u/0/" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="https://www.facebook.com/" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a>
              </form> -->
              <hr>
              <div class="text-center">
                    <a class="small" href="http://localhost/huecit/public/forgot">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="http://localhost/huecit/public/login">Create Login!</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="http://localhost/huecit/public/post">Create Users!</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="http://localhost/huecit/public/Nhansu">Danh Sách Nhân Sự!</a>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
