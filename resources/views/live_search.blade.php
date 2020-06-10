<!DOCTYPE html>
<html>
 <head>
  <title>Tìm Kiếm</title>
  <link rel = "icon" href =  
"https://i.imgur.com/o5cQdRb.jpg" 
        type = "image/x-icon"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  
  <br />
  <div class="container box">
    <div class="pull-right">
                <a href="{{url('yte')}}" class="btn btn-primary">Back</a>
            </div>
            <br>
   <h3 align="center">Danh Sách Tìm Kiếm</h3><br />
   <div class="panel panel-default">
    <div class="panel-heading">Danh Sách Nhân Sự</div>
    <div class="panel-body">
     <div class="form-group">
      <input type="text" name="search" id="search" class="form-control" placeholder="Search Now" />
     </div>
     <div class="table-responsive">
      <h3 align="center">Total Data : <span id="total_records"></span></h3>
      <table class="table table-striped table-bordered">
       <thead>
        <tr>
         <th>Name</th>
         <th>BirthDay</th>
         <th>StartDay</th>
         <th>Nhan su</th>
        </tr>
       </thead>
       <tbody>

       </tbody>
      </table>
     </div>
    </div>    
   </div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('live_search.action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});
</script>