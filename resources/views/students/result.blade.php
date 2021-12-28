<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('results/css/bootstrap.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <title>الازهر</title>
    <style>
        @media print{
            .btn-hide{
                display: none
            }
        }
        .tt >td{
            border: 2px solid black
        }
        .btn-hide{
            margin:20px
        }
        #img{
            opacity: 0.3;
            position: absolute;
            left: 0;
            top: 0;
            height: 1400px ;
            margin: auto;
            width: 100%;
            background-image: linear-gradient(to bottom, white, transparent);
            object-fit: cover;


        }
        .tab >tr{
            margin-top: 50px;
        }


        h3{
            font-size: 40px;
        }
        h6{
            font-size: 30px;
        }
        body{
            background-color:rgb(250, 250, 241);
            overflow-y:scroll;
            padding: 0px;
            margin: 0px;

            /* background-image: url('back.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-image:opacity(.6) */
        }
    </style>
</head>
<body>

     <div class="w-100 auto" style="text-align: center;padding:30px;justify-content:space-between" >
        <button class="btn-hide " onclick="myFunction1()">ادخل المسلسل</button>
        <button class="btn-hide" onclick="myFunction2()">ادخل المجموعه</button>
        <button class="btn-hide btn btn-primary" id="print-btn">طباعة</button>
     </div>

    <div id="all" class="container mt-2 text-center " style=" position: relative;border: 2px solid black;">
        <img id="img" src="{{asset('assets/img/back.jpg')}}" alt="">
        <div class="row p-3">
            <div class="col-4" style="font-family: 'Aref Ruqaa';line-height:5px ">
                <h4 style="line-height:25px">الازهر الشريف</h4>
                <h4 style="line-height:25px">قطاع المعاهد الازهريه </h4>
                <h4 style="line-height:25px"> الاداره المركزيه للامتحانات</h4>
            </div>
            <div class="col-4">
                <h2 style="font-size: 30px;">بسم الله الرحمن الرحيم</h2>
                <h2><hr style="border: 2px solid rgb(7, 0, 0);color: black;" ></h2>
                <table style="margin-right:-20px">
                    <tr>
                        <td></td>
                        <td style="margin-left: 10px; font-size: 20px;">قرش</td>
                        <td style=" font-size: 20px;">جنيه</td>
                        <td></td>

                    </tr>
                    <tr>
                        <td style=" font-size: 15px;">القيمه بمبلغ</td>
                        <td></td>
                        <td>10 </td>
                        <td style="font-size: x-large; margin-top: -30px;position: absolute;" mr-2> <span style="">رقم</span> <span style="font-size:200%;margin-top: 10px;top: 10px;">{</span> </td>
<td style="margin-right: 20px;position: relative;right: 55px;bottom: 22px;font-size:20px ;">  مسلـسل <span id="demo1"></span>   <p style="margin-top: 10px;margin-bottom: -5px;position: relative;left: 2px;">مجموعه <span id="demo2"></span></p></td>

                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <!-- <td style="font-size: x-large;"> <span style="margin-top: -10px;">رقم</span> <span style="font-size:400%;">{</span> </td> -->
                        <!-- <td>  مسلــــــــسل ...........   <p style="margin-top: 20px;">مجمــــــوعه</p></td> -->


                    </tr>


                </table>
            </div>
            <div class="col-4 text-center" style="font-family: 'Cairo', sans-serif;">

                <img src="{{asset('assets/img/logo.jpg')}}" width="100px" height="120px" alt="" srcset="">
                <p style="font-size: 25px;line-height:10px;margin-top:10px"> الاداره المركزيه للامتحانات</p>
                <p style="font-size: 25px;line-height:10px">قطاع المعاهد الازهريه </p>
                <p style="font-size: 25px;line-height:10px"> شؤون الطلاب والخريجين</p>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2 style="text-align: center; font-size: 40px;line-height:15px">مستخــــــــرج رسمــــــي بنجــاح طــــــــــــالب</h3>
                <h2><hr style="border: 2px solid rgb(7, 0, 0);color: black;width: 50%;margin: auto;line-height:15px" ></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 " style="text-align: start;">
                &nbsp;&nbsp; <p style="font-size: 25px;line-height:15px"> بالكشف ف سجل النـــــــــاجحين ف امتحـــــــــان الشهـــــــــــــاده الاعداديـــــــــــه الازهريــــــــــــــه </p>

            </div>
        </div>
        <table class="tab"  style="text-align: start;">

            <tr >
                <td style="font-size: 40px;"> الدور :</td>

                <td><h5 style="font-size: 40px;">{{$student->student_term}}</h5></td>
                <td style="font-size: 40px;">عام </td>
                <td>:</td>
                <td><h5 style="font-size: 40px;"> {{$student->year}}</h5></td>

            </tr><br><br>
            <tr class="my-5">
                <td colspan="3" style="font-size: 30px;">رقم جلوس الطالب ف الامتحان</td>
                <td>:</td>
                <td><h5 style="font-size: 40px;">{{$student->sit_no}}</h5></td>

            </tr  class="tr">
            <tr>
                <td colspan="3" style="font-size: 40px;">اسم الطالب كما ورد بالسجل</td>
                <td>:</td>
                <td><h5 style="font-size: 40px;">{{$student->student_name}}</h5></td>
            </tr  class="tr">
            <tr>
                <td colspan="3" style="font-size: 30px;">اسم المعهد او الكليه اللتي تقدم منه للامتحان</td>
                <td>:</td>
                <td><h5 style="font-size: 30px;">{{$student->student_institute}}</h5></td>
            </tr >
            <tr  class="tr">
                <td colspan="3" style="font-size: 40px;">  نوع الطالب <span>(كفيف /مبصر)</span> </td>
                <td>:</td>
                <td><h5 style="font-size: 40px;">{{$student->student_status}}</h5></td>
            </tr>
            <tr  class="tr">
                <td colspan="3" style="font-size: 30px;">مجموعه الدرجات التي حصل عليها الطالب </td>
                <td>:</td>
                <td><h5 style="font-size: 30px;">{{$student->student_result}}</h5></td>
            </tr>
            <tr  class="tr">
                <td colspan="3" style="font-size: 40px;">النهايه العظمي لمجموع درجات المواد </td>
                <td>:</td>
                <td><h5 style="font-size: 40px;">{{$student->student_total}}</h5></td>

            </tr>
</table>
        <div style="text-align: start;" class="row">
            <h5 style="font-size: 30px;">وقد استخـــــــرج هذا البيــــــــان بعد سداد الرســـم المقـــــرر بنــاء علي طلـــبه</h5>
            <h5 style="font-size: 30px">   لتقديمه الي :  <span style="margin-right: 530px;border: 2px solid black;padding: 6px 2px 7px 2px;font-size: 25px" >مـــواد لاتضاف للمجمــوع</span> </h5>

        </div>
        <table class="table table-bordered" style="border: 2px solid black">
            <tr class="tt">
                <td><h5>المواد</h5> </td>
                <td style="width: 150px;"><h5>مجموع  المواد الدينيه</h5></td>
                <td style="width: 150px;"><h5>مجموع المواد العربيه</h5></td>
                <td><h6>اللغه الاجنبيه</h6> </td>
                <td><h6>العلوم</h6></td>
                <td>الرياضيات</td>
                <td>الدراسات الاجتماعيه</td>
                <td><h5>المجموع الكلي</h5></td>
                <td><h6>تربيه فنيه</h6></td>
                <td><h5>حاسب الي</h5></td>
                <td><h5>المستوي الرفيع</h5></td>

            </tr >
            <tr  class="tt">
                <td><h5>درجات الطالب</h5> </td>
                <td style="font-size: 30px">169</td>
                <td style="font-size: 30px">60.5</td>
                <td style="font-size: 30px">55</td>
                <td style="font-size: 30px">44</td>
                <td style="font-size: 30px">36</td>
                <td style="font-size: 30px">80</td>
                <td style="font-size: 30px">50</td>
                <td style="font-size: 30px">40</td>
                <td style="font-size: 30px">9</td>
                <td style="font-size: 30px">22</td>


            </tr>
            <tr  class="tt">
                <td><h5>النهايه العظمي</h5></td>
                <td style="font-size: 35px">210</td>
                <td style="font-size: 35px">100</td>
                <td style="font-size: 35px">40</td>
                <td style="font-size: 35px">40</td>
                <td style="font-size: 35px">60</td>
                <td style="font-size: 35px">40</td>
                <td style="font-size: 35px">490</td>
                <td style="font-size: 35px">20</td>
                <td style="font-size: 35px">40</td>
                <td style="font-size: 35px">40</td>

            </tr>
        </table>
        <div class="row" style="text-align: right;line-height:15px">
            <h3 style="line-height:15px">ملحــــــــــــــــــوظه :</h3>

            <h2><hr style="border: 2px solid rgb(7, 0, 0);color: black;width: 20%;line-height:15px" ></h2>

        </div>
        <div class="row text-end"  style="font-family: 'Cairo', sans-serif;" >
            <h5 style="font-size: 25px;">علي الجهه المقدم اليها هذا البيان التحقق من ان صاحبه هو الشخص المدون اسمه فيه وبيان النجاح يحل محل الشهاده
             الاصليه. واي كشط او تعديل في هذا المستخرج يعتبر لاغيا </h5>
            <div class="row" style="padding: 5px;">
                <p  style="margin-right: 70px;font-size: 25px;line-height:15px">التاريخ <span style="margin-right: 110px;">13 /11  /2021</span>  </p>

            </div>
        </div>
        <div class="row">
            <div class="col-4 " >
                <h4 style="line-height:15px">المـــــختص</h4>
                <h5 style="line-height:15px">----------</h5>
            </div>
            <div class="col-4  " >

            </div>
            <div class="col-4" >
                <h4 style="line-height:15px">رئــــــيس القـــــــسم</h4>
                <h5 style="line-height:15px">----------</h5>

            </div>
</div>
        <div class="row">
            <div class="col-4">
                <h4 style="line-height:15px">مـــــــدير اداره الامتحانــــــــات</h4>
                <h5>----------</h5>
            </div>
            <div class="col-4">
                <h4 style="line-height:15px">مدير عام شؤون الخريـــــــجين</h4>
                <h5>----------</h5>
            </div>
            <div class="col-4">
                <p style="font-size: 25px;line-height:15px"> يعتمد لدى الخــــــارجيه ,,,</p>
                <h4 style="line-height:15px">وكيـــــــــــل الوزاره</h4>
                <h5>-----------</h5>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="{{asset('results/js/bootstrap.min.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="plugins/table/datatable/datatables.js"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
    <script src="plugins/table/datatable/button-ext/jszip.min.js"></script>
    <script src="plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
    <script src="plugins/table/datatable/button-ext/buttons.print.min.js"></script>

   <script>
        function myFunction1() {
  var num1 = prompt("ادخل رقم المسلسل");

  if (num1 != null ) {
    document.getElementById("demo1").innerHTML =num1

  }
}

function myFunction2() {
  var num2 = prompt("ادخل رقم المجموعه");

  if ( num2!=null) {
    document.getElementById("demo2").innerHTML =num2

  }
}
$('#print-btn').on('click', function(){
    window.print();
});
    </script>
</body>
</html>
