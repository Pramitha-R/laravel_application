@extends('customer.dashboard')
@section('contentCust1')
<div class="row">
        <div >
            <div class="card-header" style="background-color:aliceblue;">
                <h2>Order Detail</h2>
            </div>
        </div>
</div>

    <form action="{{url('store_order')}}"  method="post">
            @csrf
            <div class="card-header" style="background-color:aliceblue;">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Product Name:</strong>
                        {{$product->name}}
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Product Price:</strong>
                        
                    {{$product->price}}

                    </div>
                </div>
                <div>
                    <div>
                        <strong>Employee: </strong>
                        <select class="form-group"  name="EID">
                        @foreach($employees as $employee)
                        <option value="{{$employee->id}}">{{$employee->name}}</option>
                        @endforeach
                        </select>
                    </div>      
                </div>



                <div>
                    <div>
                        <strong>Confirm Employee: </strong>
                        <select class="form-group"  name="emp_name">
                        @foreach($employees as $employee)
                        <option value="{{$employee->name}}">{{$employee->name}}</br></option>
                        @endforeach
                        </select>
                    </div>      
                </div>
    
                    <input type="hidden" name="PID" value="{{$product->id}}">
                    <input type="hidden" name="CID" value="{{$customer->id}}">
                    <input type="hidden" name="product" value="{{$product->name}}">
                    <input type="hidden" name="detail" value="{{$product->detail}}">
                    <input type="hidden" name="price" value="{{$product->price}}">
                    <input type="hidden" name="cust_name" value="{{$customer->name}}">
                    <input type="hidden" name="cust_address" value="{{$customer->address}}">
                    <input type="hidden" name="cust_mobile" value="{{$customer->mobile}}">
                    <input type="hidden" name="status" value="null">

                <div class="col-xs-12 col-sm-12 col-md-12 text-left"></br>
                    <button type="submit" class="btn btn-primary" value ="order">Order</button>
                </div>
                

            </div>
</from>
@endsection