<!DOCTYPE html>
<html  lang="ar" dir="rtl">
 <head>
  <title>Live search in laravel using AJAX</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body style="background-color: #d39e004a">
  <br />
  <div class="container box">
   <h3 align="center">الادارة المركزية للامتحانات</h3><br />
   <div class="panel panel-default">
    <div class="panel-heading text-dark bg-warning rounded font-weight-bolder p-2" align="center">بحث باسم الطالب او برقم الجلوس</div>
    <div class="panel-body">
     <div class="form-group mt-3">
      <input type="text" name="search" id="search" class="form-control border border-warning" placeholder="ادخل الاسم او رقم الجلوس" />
     </div>
     <div class="table-responsive">
      {{-- <h3 align="center"> بيانات الطالب:<span id="total_records"></span></h3> --}}
      <table class="table table-striped table-bordered ">
       <thead>
        <tr class="p-3 mb-2 bg-warning text-dark">
            <th>رقم الجلوس</th>
            <th>اسم الطالب</th>
            <th>السنة</th>
            <th>الابصار</th>
            <th>المعهد</th>
            <th>المنطقة</th>
            <th>الدور</th>
            <th>النتيجة</th>
            <th>المجموع</th>
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
