<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Quản Lý Nhân Sự</title>
        <link rel = "icon" href =  
"{{ URL::asset('img/b1.png') }}" 
        type = "image/x-icon">

        <!-- bootstrap minified css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        {{-- <link rel="stylesheet" href="{{ URL::asset('css/toggle.css') }}"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- bootstrap minified js -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <!-- custom CSS -->
        <style>
        h1{font-size:23px;}
        .pull-left h2{margin-top:0;font-size:20px;}
        .toggle {
  font-size: 25px;
  padding: 15px;
}

.navbar-vertical {
  position: fixed;
  top: 0;
  left: 0;
  background: #f5f5f5;

   z-index: 2;
   bottom: 0;

}

.active {
    display: block;
    /*width: 240px;*/
    /*z-index: 1000;*/
}

.box-shadow {
    box-shadow: 7px 7px 7px rgba(0,0,0,0.5);
}
body, ul {
  padding: 0;
      padding-left: 52px;

  }

ul {
  display: none;
  margin: 0;
  padding: 0;
}

ul li{
  list-style: none;
  display: block;
  padding: 10px;
}

ul li:hover {
    background: #dcdcdc;

}

ul li a{
  text-decoration: none;
  color:#463b3b;
  padding: 10px;
}

ul li a:hover{
  text-decoration: none;
  color:#2d2828;
}
        </style>
    </head>
<script type="text/javascript">
  $(document).ready(() => {
    $('.menu').click(()=> {
      $('ul').toggleClass('active');
      $('.navbar-vertical').toggleClass('box-shadow');
    });
    
    $('.navbar-vertical').mouseleave(()=> {
      $('ul').removeClass('active');
      $('.navbar-vertical').removeClass('box-shadow');
    });
  });
  $('.carousel').carousel({
  interval: 100777700000
})
</script>
    <body>
        <div class="navbar-vertical">
    <div class="toggle">
      <i class="fa fa-bars menu"></i>
    </div>
    <ul>
     <hr>
     <li ><a href="{{url('dashboard')}}"><i class="fa fa-home" aria-hidden="true"> Trang chủ</i></a></li>
      <li><a href="{{url('yte')}}"><i class="fa fa-leaf" aria-hidden="true"> Y Tế</i></a></li>
 
      <hr>
      <li><a href="{{url('post')}}"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Quản lý tài khoản</a></li>
      <li><a href="{{url('nhansu')}}"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Quản lý nhân sự</a></li>
      <li><a href="{{url('benhnhan')}}"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Quản lý bệnh nhân</a></li>
      <li><a href="{{url('cosoyte')}}"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Quản lý cơ sở y tế</a></li>
   
        <hr>

      </li>
      

    </ul>
</div>
        <div class="container">
            <h1>Danh Sách tài khoản</h1>
            @yield('content')
        </div>
    </body>
</html>