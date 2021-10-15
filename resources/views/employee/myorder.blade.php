@extends('employee.dashboard') 
@section('contentEmp1')

    <h2 class="card-header" style="background-color:aliceblue;">Order Details</h2>
<br>

   
    <div class="d-flex justify-content-center mt-3 p-3">
      
                <table  class="table table-striped table-hover" >
                       <tr>
                            <th>No</th>
                            <th>Product Name</th>
                            <th>Details</th>
                            <th>Price</th>
                            <th>Customer Name</th>
                            <th>Customer Address</th>
                            <th>Customer Mobile No</th>
                            <th>Date</th>
                            <th>Delivered</th>
                       </tr>
                    @foreach($orders as $order)
                      <tr>
                        <td>{{$order->id}}</td> 
                        <td>{{$order->product}}</td> 
                        <td>{{$order->detail}}</td> 
                        <td>{{$order->price}}</td> 
                        <td>{{$order->cust_name}}</td> 
                        <td>{{$order->cust_address}}</td> 
                        <td>{{$order->cust_mobile}}</td> 
                        <td>{{$order ->updated_at}}</td> 
                        <td>
                            <a class="btn btn-info" href="{{ url('deliverd_orders',['order'=>$order->id,'employee'=>$employee->id])}}">Yes</a>
                        </td>
                    </tr>
                    @endforeach

                    @foreach($E_orders as $order)
                      <tr>
                        <td>{{$order->id}}</td> 
                        <td>{{$order->product}}</td> 
                        <td>{{$order->detail}}</td> 
                        <td>{{$order->price}}</td> 
                        <td>{{$order->cust_name}}</td> 
                        <td>{{$order->cust_address}}</td> 
                        <td>{{$order->cust_mobile}}</td> 
                        <td>{{$order ->updated_at}}</td> 
                        <td>{{$order->status}}</td>
                    </tr>
                    @endforeach

                    
                    </table>
    </div>
@endsection
