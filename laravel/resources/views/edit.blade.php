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
          @include('layouts.messages')
        <div class="d-flex justify-content-center">

         <form action="{{route('update',$category->id)}}" method="POST">
          @method('put')
            @csrf
          <div class="form-group">
            <label for="title">عنوان دسته بندی</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror " name="title" value="{{$category->title}}">
            @error('title')
               <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div> 
          <div class="form-group">
            <label for="description">شرح دسته بندی</label>
            <textarea class="form-control"  @error('title') is-invalid @enderror name="description">{{$category->description}}</textarea>
            @error('title')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>  
          <div class="form-group">
            <label for="title">وضعیت</label>
             <select name="active" >
                 <option value="1" <?php if($category->active==1)echo 'selected'?>>منتشر شده</option>
                 <option value="0" <?php if($category->active==0)echo 'selected'?>>منتشر نشده</option>
             </select>
          </div>  
          <div class="form-group">
            <label for="title">ثبت</label>
            <button type="submit" class="btn btn-success">ویرایش</button>
          </div>    
        </form>  
        </div>
        </div>
     </body>
    </table>
</body>
</html>