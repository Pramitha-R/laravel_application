@extends('customer.dashboard') 
@section('contentCust1')
<div class="row">
            
                    <div class="card-header" style="background-color:aliceblue;">
                        <h2>Welcome to Customer Dashboard!  </h2>
                    </div>
            
        </div>

    <div class="card-header" style="background-color:aliceblue;">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{$customer->name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{$customer->email}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong>
                {{$customer->gender}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                {{$customer->address}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mobile_No:</strong>
                {{$customer->mobile}}
            </div>
        </div>

    </div>

@endsection