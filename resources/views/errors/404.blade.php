@extends('_template.main')

@section('responsive')@endsection

@section('titleName', 'Error - ')

@section('stylesheet')

   <link rel="stylesheet" href="{{ asset('css/erro/corpo.css') }}">
@endsection

@section('content')
    @parent
    
    <div class="erro">

        <h1 class="textBlack">ERROR 404 page not found!</h1>
        
    </div>



@endsection
