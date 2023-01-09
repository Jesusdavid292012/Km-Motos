@extends('welcome')

                
@section('title', 'Productos')

@section('content')
    
<div class="table-responsive" >
  <nav class="navbar navbar-light bg-light">

    <a class="btn btn-primary mb-2 float-left" href="{{url('home')}}" role="button">Home</a>

    <div class="form-inline">
      <div class="input-group">
        <input id="filtrar" type="text" class="form-control" placeholder="Filtrar" aria-label="Username" aria-describedby="basic-addon1">
      </div>
    </div>
  </nav>

  @include('component.tabla')

</div>
  <nav aria-label="..." class="float-right">
     {{--  {{$products->links()}} --}}
  </nav>

</div>

<div id="#resultado">
  <?php /* print_r($products) */ ?>
</div>

@endsection