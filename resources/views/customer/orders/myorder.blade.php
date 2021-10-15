@extends('customer.dashboard')
@section('contentCust1')
<table class="table table-striped table-hover" >
        <tr>
            <th >No</th>
            <th>Name</th>
            <th>Details</th>
            <th>Price</th>
            <th>Delivery Person</th>
            <th width="280px">Status</th>
        </tr>
        @foreach ($orders as $order)
        <tr>
            <td>{{ $order->id}}</td>
            <td>{{ $order->product }}</td>
            <td>{{ $order->detail }}</td>
            <td>{{ $order->price }}</td>
            <td >{{$order->emp_name}}</td>
            <td>
                    <a class="btn btn-info" href="{{ url('cansal_order',['order'=>$order->id , 'customer'=>$customer->id])}}" style="background-color:red">Cancel Order</a>
        </tr>
        @endforeach

        @foreach ($C_orders as $order)
        <tr>
            <td>{{ $order->id}}</td>
            <td>{{ $order->product }}</td>
            <td>{{ $order->detail }}</td>
            <td>{{ $order->price }}</td>
            <td >{{$order->emp_name}}</td>
            <td>{{$order->status}}</td>
        @endforeach

       




    </table>



@endsection