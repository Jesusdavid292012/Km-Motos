@extends('welcome')
{{-- @foreach($products as $pr)
h
@endforeach --}}
                
@section('title', 'Home')

@section('content')
    


<div class="title">Km Motos</div>
<h1 class="mb-4">Laravel 5.4</h1>


<a class="btn btn-primary" href="{{route('products.index')}}" role="button">Productos</a>

@endsection