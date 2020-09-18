<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$pagetitle}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body dir="rtl" style="text-align:right" >
    @include('layouts.topmenu')
        <div class="container">
        <div class="d-flex justify-content-center">
         عنوان دسته بندی : {{$category->title}}<br>
         توضیحات دسته بندی : {{$category->description}}<br>
         تاریخ ایجاد : {{$category->created_at}}<br>
         تاریخ به روزرسانی : {{$category->updated_at}}<br>


        </div>
        </div>
  
   
     </body>
    </table>
</body>
</html>