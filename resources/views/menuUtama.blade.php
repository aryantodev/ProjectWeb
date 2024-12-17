@extends('layout')

@section('title', $title)

@section('konten')
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- isi konten disini -->
    <div class="container_menuUtama">
        <div class="img">
            <img src="{{asset('img/menu_Utama.jpg')}}" alt="" width="300px">
        </div>
    </div>
</body>
</html>

@endsection
    