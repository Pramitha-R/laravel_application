@extends('customer.dashboard')
@section('contentCust1')
   
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-striped table-hover" >
        <tr>
            <th >No</th>
            <th>Name</th>
            <th>Details</th>
            <th>Price</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>{{ $product->price }}</td>
            <td>
            
                    <a class="btn btn-info" href="{{url('placeOrder',['product'=>$product->id,'customer'=>$customer->id])}}" >Place Order</a>
            </td>
                </tr>
        @endforeach
    </table>
  
    
@endsection