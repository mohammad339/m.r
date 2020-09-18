<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$pagetitle}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  @include('layouts.topmenu')
        <div class="container">
          @include('layouts.messages')
        <div class="d-flex justify-content-center"></div>
        </div>
    <table class="table">
     <thead>
      <tr>
        <td>شناسه</td>
        <td>عنوان</td>
        <td>توضیحات</td>
        <td>وضعیت</td>
        <td>ویرایش</td>
        <td>حذف</td>
      </tr>
     </thead>

     <body>
        @foreach ($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td><a href="{{route('show',$category->id)}}">{{$category->title}}</a></td>
            <td>{{$category->description}}</td>
            <td>{{$category->active}}</td>
            <td><a href="{{route('edit',$category->id)}}">ویرایش</a></td>
            <td><a href="{{route('destroy',$category->id)}}" onclick="return confirm('آیاآیتم مورد نظرحذف شود')">حذف</a></td>
          </tr>
        @endforeach
     </body>
    </table>
</body>
</html>