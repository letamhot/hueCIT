<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cổng Thông Tin Thành Phố Huế</title>
  <link rel = "icon" href =
"{{ asset('img/b1.png') }}"
        type = "image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="youtube.css"> -->
    <!-- <link rel="stylesheet" href="{{ asset('css/index.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('js/highcharts.js') }}">

  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="{{ asset('js/jquery-3.4.1-jquery.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>

  <style>
  .fakeimg {
    height: 150px;
    width: auto;
    background: #66FFFF;
  }
  </style>
  <style>
  .dropdown {
    flex: 1;
    text-align: center;
  }
  a.navbar-brand{
    margin-right: 0;
  }
  </style>
<style>



</style>
<style>
h6 {
  text-shadow:  0 0 25px rgba(0,0,0,.9)
}

}

</style>


<style type="text/css">

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

.btn-search {
  position: absolute;
    right: 0;
    border: none;
    color: rgba(0,0,0,.9);
    background: transparent;
    right: 10px;
}
}

.container .tam {
  display: flex;
}

.container .tam-item {
  width: 33.33%;
  height: 300px;
  padding: 10px;
  text-align: center;
  transition: all 0.3s linear;
}

.container .tam-item:first-child {
  background: #f5f5f5;
}

.container .tam-item:nth-child(2) {
  background: #f5f5f5;
}

.container .tam-item:nth-child(3) {
  background: #f5f5f5;
}

@media (max-width: 480px){
  .container .tam-item {
  width: 100%;
  }
}

.tam-item >div:first-child img {
     width: 100%;
    height: 161px;
}

.tam-item:hover {
  opacity: 0.5;
  transform: scale(1.1);
  /*transform: rotate(45deg);*/
}
section {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        box-sizing: border-box;


  }
.bg-f8 {
    background-color: #f8f8f8;
    display: flex;
      flex-wrap: wrap;
        justify-content: space-evenly;
  }
 .full-width {
    width: 100% /*!important*/;
    padding-left: 1px;
    padding-right: 1px;


}
.nomargin {
    margin: 0px /*!important*/;
}
.container .container-fluid {
    padding: 30px 0 30px;


}
/*@media (min-width: 992px){
.container {
    width: 970px;
}
}
@media (min-width: 768px){
.container {
    width: 750px;
}*/
}

.container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
/**/
  .section-title {
    margin-bottom: 20px;
    text-align: center;
}
.row {
  /*  margin-right: -15px;
    margin-left: -15px;*/

}
@media (min-width: 992px){
.col-md-offset-2 {
    margin-left: 16.66666667%;
}
}
@media (min-width: 992px){
.col-md-8 {
    width: 66.66666667%;
}
}
h2{
    font-family: 'Roboto', sans-serif;
    color: #111111;
    font-weight: 600;
    margin-top: 0;
    margin-bottom: 10px;
    padding: 0;
    text-transform: uppercase;
    letter-spacing: 2px;
}
.color-defult {
    color: #005293;
    text-shadow: 1px 1px 1px;
}
.bg-defult {
    background: #005293;
}
.line-border-center {
    height: 2px;
    text-align: center;
    margin: auto;
    width: 70px;
    background: #333;
    margin-top: 20px;
    margin-bottom: 25px;
}
.full-width .row {
    margin: 0px;
}

.row5-2:first-child {
    padding-left: 0px;
}
.row5-2 {
    width: 20%;
    padding: 0px 1%;
    float: left;
}
.service-item.style-3 img {
    border-radius: 50%;
    width: 170px;
    height: auto;
    border: 1px solid #eee;

}
img {
    width: 100%;
    max-width: 100%;
    height: auto;
    vertical-align: middle;
    border: 0;
}
a {
    text-decoration: none;
    color: #005293;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    color: #337ab7;
    text-decoration: none;
}
.text-center {
    text-align: center;
}
section {
    display: block;
}
footer {
    background-color: #eeeef4;
    border-top: 6px solid #212529;
    color: #fff;
}
</style>
</head>
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
      <li>
        <hr>
        <div class="sideProfile center">
    <span>Xin chào:</span><br>

      <div class="clear"></div>
    </div>
        <div class="dropdown">

  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
   {{$name}}
  </a>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="{{url('logout')}}">Đăng xuất</a>
  </div>
</div>
      </li>



    </ul>
</div>
  <div class="content" style="padding-left: 50px;">
<nav class="navbar btn bg navbar-style">
  <div class="text-left" style="width: 100%; display: flex; justify-content: space-between; ">
  <div>
  <a href="{{url('master')}}"><img src="{{ asset('img/b1.png') }}" style="width: 50px; height: 50px" alt="home" /></a>

</div>
<form class="form-inline" style="position: relative;">
<input class="form-control mr-sm-2" placeholder="Search" aria-label="Search" style="height: 30px;">
<button class="fa fa-search btn-search" type="submit" ></button>
  </form>
</div>
<div class="text-left">
  <h3>Thông Tin Thành Phố Huế</h3>
  <h5>Thống kê các chỉ số về các lĩnh vực trên địa bàn thành phố Huế</h5>
  </div>
</nav>
</div>

  <br>

    <script
  src="{{ asset('js/jquery-3.4.1.js') }}">

</script>
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
//   $('.carousel').carousel({
//   interval: 100777700000
// })
</script>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" style="height: 500px; object-fit: cover;" src="{{ asset('img/a3.jpg') }}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="height: 500px; object-fit: cover;" src="{{ asset('img/a7.jpg') }}" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="height: 500px; object-fit: cover;" src="{{ asset('img/a4.jpg') }}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<div class="container">
  <div class="tam" style="display: flex; flex-wrap: wrap;">
  <div class="tam-item">
    <div>
      <img src="{{ asset('img/a3.jpg') }}" />
    </div>
    <div>
      <h4 >Bệnh Viện</h4>
    </div>
  </div>
  <div class="tam-item">
       <div>
        <img src="{{ asset('img/a1.jpg') }}" />

    </div>
    <div>
      <h4 >Trạm Y Tế</h4>
    </div>
  </div>
  <div class="tam-item">
       <div>
      <img src="{{ asset('img/a2.jpg') }}" />
    </div>
    <div>
      <h4 >Đội Ngũ Y Bác Sĩ</h4>
    </div>
  </div>
</div>
</div>
<br />
<section class="service-area animatedParent animateOnce  bg-f8">
  <div class="container nomargin full-width">
    <div class="section-title">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <h2><span class="color-defult">Lĩnh vực đầu ngành</span></h2>
          <div class="line-border-center bg-defult"></div>
          <p>Bệnh viện Trung ương Huế ngày nay đã trở thành địa chỉ tin cậy trong chăm sóc điều trị chất lượng cao của nhân dân</p>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="row">
        <div class="row5-2">
          <div class="service-item text-center style-3">
            <img src="{{ asset('img/d10.jpg') }}">
            <h4>Đột quỵ</h4>
            <div class="border-center"></div>
            <p>Cứu sống nhiều  trường hợp tai biến mạch máu não, nhồi máu cơ tim  được can thiệp nhanh chóng, kịp khoảng “thời gian vàng”.</p>
          </div>
        </div>
        <div class="row5-2">
          <div class="service-item text-center style-3">
            <img src="{{ asset('img/d9.jpg') }}"><h4>Ghép tạng</h4>
            <div class="border-center"></div>
            <p>Đạt được những thành tựu to lớn trong lĩnh vực ghép tạng: ghép tim, ghép thận, ghép tế bào gốc tạo máu tự thân, ghép giác mạc...</p>
          </div>
        </div>
        <div class="row5-2">
          <div class="service-item text-center style-3">

              <img src="{{ asset('img/d8.jpg') }}">

            <h4>Ngoại khoa - Phẫu thuật nội soi</h4>
            <div class="border-center"></div>
            <p>Chiếm trung bình 50% tất cả các loại phẫu thuật tại Bệnh viện với các kỹ thuật tương đương như các trung tâm lớn trên cả nước.</p>
          </div>
        </div>
        <div class="row5-2">
          <div class="service-item text-center style-3">
            <img src="{{ asset('img/d7.jpg') }}">
            <h4>Vô sinh hiếm muộn - Nam học</h4>
            <div class="border-center"></div>
            <p>Hơn 1.000 em bé ra đời bằng phương pháp thụ tinh trong ống nghiệm, triển khai thành công mang thai hộ tại Việt Nam.</p>
          </div>
        </div>
        <div class="row5-2">
          <div class="service-item text-center style-3">
           <img src="{{ asset('img/d6.jpg') }}"><h4>Điều trị Ung thư</h4>
            <div class="border-center"></div>
            <p>Điều trị ung thư bằng các kỹ thuật xạ trị cao cấp lần đầu tiên tại Việt Nam, điều trị ung thư đa mô thức.</p>
          </div>
        </div>
      </div>
            <div class="row">
              <div class="row5-2">
              <div class="service-item text-center style-3">
                  <img src="{{ asset('img/d5.jpg') }}">
                  <h4>Tim mạch</h4>
                  <div class="border-center"></div>
                  <p>Cứu sống nhiều trường hợp tai biến mạch máu não, nhồi máu cơ tim được can thiệp nhanh chóng, kịp khoảng “thời gian vàng”.</p>
                </div>
              </div>
              <div class="row5-2">
                <div class="service-item text-center style-3"><img src="{{ asset('img/d4.jpg') }}">
                  <h4>Tạo hình thẩm mỹ</h4>
                    <div class="border-center"></div>
                    <p>Giải pháp tối ưu khắc phục hiệu quả các nhược điểm trên cơ thể, mang đến gương mặt hài hòa, vóc dáng chữ S cho những ai đang muốn cải thiện.</p>
                  </div>
                </div>
                <div class="row5-2">
                  <div class="service-item text-center style-3">
                    <img src="{{ asset('img/d3.jpg') }}">
                    <h4>Chăm sóc da – Thẩm mỹ</h4>
                    <div class="border-center"></div>
                    <p>Là địa chỉ tin cậy được nhiều khách hàng và người bệnh lựa chọn để làm đẹp, điều trị các bệnh lý về da</p>
                  </div>
                </div>
                <div class="row5-2">
                  <div class="service-item text-center style-3">
                      <img src="{{ asset('img/d2.jpg') }}">
                      <h4>Gây mê Hồi sức</h4>
                      <div class="border-center"></div>
                      <p>Triển khai hàng chục nghìn ca mổ mỗi năm, với đa số là các ca phẫu thuật đặc biệt và phẫu thuật có sử dụng kỹ thuật cao.</p>
                    </div>
                  </div>
                  <div class="row5-2">
                    <div class="service-item text-center style-3">
                      <img src="{{ asset('img/d1.jpg') }}">
                      <h4>Cận Lâm sàng</h4>
                      <div class="border-center"></div>
                      <p>Giúp cho việc khám bệnh, chẩn đoán, điều trị, theo dõi điều trị bệnh nhân được chính xác hơn.</p>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
  <br>


<footer class="ba">
    <div class="container">
        <div class="row flex-items-xs-bottom">
    <div id="dnn_Footer_1_Pane" class="col-sm"><div class="DnnModule DnnModule-DNN_HTML DnnModule-394"><a name="394"></a>

<div class="contraC main">
    <div id="dnn_ctr394_ContentPane" class="contentpane"><!-- Start_Module_394 --><div id="dnn_ctr394_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
  <div id="dnn_ctr394_HtmlModule_lblContent" class="Normal">
  <div class="footer-content" style="padding-left: 56px;">
    <br>
    <h6 style="color: rgba(0,0,0,.9)">HỆ THỐNG THÔNG TIN THÀNH PHỐ HUẾ</h6>
    <p style="color: rgba(0,0,0,.9)">
      Trung tâm Công nghệ thông tin tỉnh Thừa Thiên Huế<br>
      Địa chỉ: 6 Lê Lợi, thành phố Huế.<br>
      Điện thoại:0234.3823650<br>
      Fax: 0234.3823649<br>
      E-mail: <a href="mailto:info@huecit.vn">info@huecit.vn</a>
    </p>
  </div>
</div>

</div><!-- End_Module_394 --></div>
</div>
</div></div>
<!--  <div class="thumbnail"> -->
    <div class="col-sm text-right" style="padding-left: 56px;">
      <div id="dnn_Social_Pane"><div class="DnnModule DnnModule-DNN_HTML DnnModule-417"><a name="417"></a>

<div class="contraC main">
    <div id="dnn_ctr417_ContentPane" class="contentpane"><!-- Start_Module_417 --><div id="dnn_ctr417_ModuleContent" class="DNNModuleContent ModDNNHTMLC">

</div><!-- End_Module_417 --></div>
</div>
</div></div>
      <span id="dnn_dnnCopyright_lblCopyright" class="SkinObject" style="color: rgba(0,0,0,.9)">
        <br>
        <a href="https://www.facebook.com/Huecit/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
        <a href="https://www.youtube.com/channel/UC8cmtykxZSXeI5wFfeN-DmA"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
        <a href="http://www.huecit.vn/"><i class="fa fa-envelope" aria-hidden="true"></i></a>
        <br>
        Tư vấn thiết kế và xây dựng: <a href="http://www.huecit.vn/" target="_blank">HueCIT</a></span>

    </div>
</div><!-- ./row -->
</div>
  </footer>

<!-- </div> -->
</body>
</html>
