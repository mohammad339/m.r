<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
    body
    {
        direction: rtl;
        text-align: center;
        padding: 40px;
    }
    .onvan
    {
        padding: 40px;
        text-align: center;
    }
    </style>
</head>
<body>
    <div class="onvan">
        <nav class="navbar navbar-expand-sm">
         <ul class="navbar-nav">
             <li class="nav-item"> <a href="{{route('categories')}}" class="btn btn-warning">دسته بندی ها</a></li>
             <li class="nav-item"> <a href="{{route('create')}}" class="btn btn-primary">دسته بندی جدید</a></li>
         </ul>
        </nav>
       <hr>
        </div>
</body>
</html>