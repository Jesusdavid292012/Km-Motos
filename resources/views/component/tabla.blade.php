  <table class="table" id="tabla">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Código</th>
        <th scope="col">Nota</th>
        <th scope="col">Qty</th>
        <th scope="col">Cósto</th>
        <th scope="col">Précio</th>
      </tr>
    </thead>
    <tbody >
      @if(count($products)>0)
        @foreach($products as $product)
            <tr>
              <th scope="row">{{$product->id}}</th>
              <td>{{$product->product_key}}</td>
              <td>{{$product->notes}}</td>
              <td>{{$product->qty}}</td>
              <td>{{$product->cost}}</td>
              <td>{{$product->price}}</td>
            </tr>
          
        @endforeach
      @else
          <tr>
              <td></td>
              <td>No existen registros</td>
          <tr>
      @endif
    </tbody>
  </table>

  <nav aria-label="..." class="float-right">
     {{--  {{$products->links()}} --}}
  </nav>

