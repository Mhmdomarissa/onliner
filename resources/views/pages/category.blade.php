{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
</head>
<body>
    Category{{ $the_id }}
    
</body>
</html> --}}
@extends('layout.master')
@section('title','Category')
@section('content')
    <div class="container">
        Category{{ $the_id }}
    </div>

@endsection