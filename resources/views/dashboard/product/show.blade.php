@extends('dashboard.admin')
@section('content2')
<div class="row">
        <div >
            <div class="card-header" style="background-color:aliceblue;">
                <h2>Details Of Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary"   href="{{route('products.index')}}"> Back</a></br>
            </div>
        </div>
    </div>
   
    <div class="card-header" style="background-color:aliceblue;">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{$product->name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
               {{$product->detail}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
               {{$product->price}}
            </div>
        </div>
        

    </div>
@endsection