<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>{{$pagetitle}}</title>
</head>
<body>
    @foreach ($posts as $post)
    {{$post->title}}
    <hr>
    @endforeach
    
 @php
//foreach ($posts as $post) {
     # code...
    // echo $post->title.'<hr>';
// }
@endphp
</body>
</html>