@extends('customer.layout') 
@section('contentCustomer')
    <div class="row">
        <div  class="pull-right">
            <h3 style=" background-color: blue;" class="card-header">E-Store</h3><br/>
           
            
            <table>
                <tr>
                    <th><a class="btn btn-secondary" style="width:275px" href="{{url('customer_detail',$customer->id)}}">Customer_name</a></th>
                    <th><a class="btn btn-secondary" style="width:275px"href="{{url('customer_orders',$customer->id)}}">Place_Orders</a></th>
                    <th><a class="btn btn-secondary" style="width:275px"  href="{{url('customer_Myorders',$customer->id)}}">My_Orders</a></th>
                    <th><a class="btn btn-secondary" style="width:275px" href="{{url('admin_logout')}}">Logout</a></th>
                </tr>            
            </table>
        </div>
    </div>
    <div class="container">
            @yield('contentCust1')
    </div>
@endsection