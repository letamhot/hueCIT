<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset = "utf-8" /> 
  <title>Cổng Thông Tin Thành Phố Huế</title>
          
        <!-- add icon link -->
  <link rel = "icon" href =  
"{{ asset('img/b1.png') }}" 
        type = "image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="youtube.css"> -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('js/highcharts.js') }}">

  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="{{ asset('js/jquery-3.4.1-jquery.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!--   <script src="https://code.jquery.com/jquery-3.4.1.js"></script> -->
 
  <style>
  .dropdown {
    /*width: 300px;*/
    flex: 1;
    text-align: center;
  }
  a.navbar-brand{
    margin-right: 0;
  }
  </style>
<style>
h6 {
  text-shadow:  0 0 25px rgba(0,0,0,.9)
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


.container .tam {
  display: flex;
}

.container .tam-item {
  width: calc(33.33% - 5px);
    /* height: 300px; */
    /* padding: 10px; */
    margin-right: 5px;
    text-align: center;
    transition: all 0.2s linear;
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
  transform: scale(1.1);
}
.panel .highcharts{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-evenly;
  background: whitesmoke;
}
.panel .charts-item {
  width: 50%;
  height: 400px;
  padding: 10px;
  text-align: center;
 
}

.panel .charts-item:first-child {
  background: #f5f5f5;
}

.panel .charts-item:nth-child(2) {
  background: #f5f5f5;
}

.panel .charts-item:nth-child(3) {
  background: #f5f5f5;
}

@media (max-width: 480px){
  .panel .charts-item{
  width: 100%;
  }
}

.charts-item >div:first-child img {
  width: 80%;
  height: 50%;
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
      <li ><a href="{{url('home')}}"><i class="fa fa-home" aria-hidden="true"> Trang chủ</i></a></li>
      <li><a href="{{url('yte')}}"><i class="fa fa-leaf" aria-hidden="true"> Y Tế</i></a></li>
      <hr>
      <li><a href="{{url('login')}}"><i class="fa fa-user-circle-o 
" aria-hidden="true"></i> Đăng Nhập</a></li>
      <li><a href="{{url('register')}}"><i class="fa fa-address-book 
" aria-hidden="true"></i> Đăng Ký</a></li>

    </ul>
</div>
  <div class="content" style="padding-left: 50px;">
<nav class="navbar btn bg navbar-style">
  <div class="text-left" style="width: 100%; display: flex; justify-content: space-between; ">
  <div>
    <a href="{{url('home')}}"><img src="https://i.imgur.com/o5cQdRb.jpg" style="width: 50px; height: 50px" alt="home" /></a>
  
</div>
<div style="display: flex;">
<form class="form-inline" style="position: relative;">
<input class="form-control mr-sm-2" placeholder="Search" aria-label="Search" style="height: 30px;">
<button class="fa fa-search btn-search" type="submit" ></button>
  </form> 
</div>
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
  <br>
  <div class="section-title">
    <h2>Nhiệm Vụ Của Chúng Tôi</h2>
    <div></div>
  </div>
  <div class="row-items">
    <div class="item">
      <img src="{{ asset('img/c4.jpg') }}">
      <h5>Khám Chữa Bệnh Và Cấp Cứu</h5>
    </div>
    <div class="item">
      <div class="service-item text-center style-3"><img src="{{ asset('img/c5.jpg') }}"><h5>Nghiên Cứu Khoa Học</h5></div>
    </div>
    <div class="item">
      <div class="service-item text-center style-3"><img src="{{ asset('img/c3.jpg') }}"><h5>Đào Tạo<br></h5></div>
    </div>
    <div class="item">
      <div class="service-item text-center style-3"><img src="{{ asset('img/c2.jpg') }}"><h5>Hợp Tác Quốc Tế<br></h5></div>
    </div>
    <div class="item">
      <div class="service-item text-center style-3"><img src="{{ asset('img/c1.jpg') }}"><h5>Chăm Sóc Sức Khỏe Cộng Đồng</h5></div>
    </div>
  </div>
<br>
<hr>
<b><h4>Chỉ Tiêu Về Y Tế</h4></b>
<hr>
<script src="{{ asset('js/highcharts.js') }}"></script>
<script src="{{ asset('js/export-data.js') }}"></script>
<script src="{{ asset('js/exporting.js') }}"></script>
<script src="{{ asset('js/accessibility.js') }}"></script>
<div class="panel">
  <div class="highcharts">
  <div class="charts-item" id="charts">
    <script type="text/javascript">
      $.ajax({
    type: 'GET',
    url: 'highchart/nhansu',
    success: function(data){
        console.log(data)
        var names = [];
        data.forEach(item => {
          item.forEach(i => {
            if(!names.includes(i.name))
            names.push(i.name);
        });
        });
        var chartData = [];
        names.forEach(name =>{
          var arr = [];
          data.forEach(item => {
            var isHasValue = false;
            item.forEach(i => {
              if(i.name === name){
                arr.push(i.SoLuong);
                isHasValue = true;
              }
            });
            if(!isHasValue) arr.push(0);
          });
          chartData.push({name, data: arr});
        });
        console.log(names);
        console.log(chartData);

 var categories = [
        '2013',
        '2014',
        '2015',
        '2016',
        '2017',
        '2018'
        ];
    Highcharts.chart('charts', {
    chart: {
        type: 'spline'
    },
    title: {
        text: 'Số lượng nhân sự cán bộ, bác sĩ, dược sĩ'
    },
    subtitle: {
        text: '(ĐV: người)'
    },
    xAxis: {
        categories,
        crosshair: true
    },
      yAxis: {
        min: 0,
        title: {
            text: 'Rainfall (mm)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} người</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: chartData
});
    },
    error: function(xhr){
        console.log(xhr.responseText);
    }
    });

  
    </script>
  </div>
    <div class="charts-item" id="chart">

    <script type="text/javascript">
         $.ajax({
    type: 'GET',
    url: 'highchart/cosoyte',
    success: function(data){  console.log(data)
        var names = [];
        data.forEach(item => {
          item.forEach(i => {
            if(!names.includes(i.loaiCS))
            names.push(i.loaiCS);
        });
        });
        var chartData = [];
        names.forEach(name =>{
          var arr = [];
          data.forEach(item => {
            var isHasValue = false;
            item.forEach(i => {
              if(i.loaiCS === name){
                arr.push(i.SoLuong);
                isHasValue = true;
              }
            });
            if(!isHasValue) arr.push(0);
          });
          chartData.push({name, data: arr});
        });
        console.log(names);
        console.log(chartData);

         var categories = [
        '2010',
        '2012',
        '2014',
        '2016',
        '2018',
        ];
    Highcharts.chart('chart', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Số lượng cơ sở y tế'
    },
    subtitle: {
        text: '(ĐV: Cơ sở)'
    },
  
    xAxis: {
        categories,
        crosshair: true
    },
      yAxis: {
        min: 0,
        title: {
            text: 'Rainfall (mm)'
        }
    },
    
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} cơ sở</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: chartData
});
    },
 error: function(xhr){
        console.log(xhr.responseText);
    }
    });
</script>
</div>
<div class="charts-item" id="highchart">
  
   
    <script type="text/javascript">
      $.ajax({
    type: 'GET',
    url: 'highchart/benhnhan',
    success: function(data){
        console.log(data);
        var names = [];
        data.forEach(item => {
          item.forEach(i => {
            if(!names.includes(i.name))
            names.push(i.name);
        });
        });
        var chartData = [];
        names.forEach(name =>{
          var arr = [];
          data.forEach(item => {
            var isHasValue = false;
            item.forEach(i => {
              if(i.name === name){
                arr.push(i.SoLuong);
                isHasValue = true;
              }
            });
            if(!isHasValue) arr.push(0);
          });
          chartData.push({name, data: arr});
        });
        console.log(names);
        console.log(chartData);

 var categories = [
        '2016',
        '2017',
        '2018'
        ];
    Highcharts.chart('highchart', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Số lượng Bệnh Nhân , Giường Bệnh'
    },
    subtitle: {
        text: '(ĐV: người)'
    },
    xAxis: {
        categories,
        crosshair: true
    },
      yAxis: {
        min: 0,
        title: {
            text: 'Rainfall (mm)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} người</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: chartData
});
    },
    error: function(xhr){
        console.log(xhr.responseText);
    }
    });
    </script>
  </div>
      </div>
  </div>

  <br>
<br>
<hr>
<footer class="ba" style="background-color:#eeeef4">
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
