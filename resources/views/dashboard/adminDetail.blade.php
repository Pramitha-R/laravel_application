@extends('dashboard.admin')

@section('content2')

        <div  >
            
                    <div class="card-header" style="background-color:aliceblue;" >
                        <h2>Welcome to Admin Dashboard! </h2>
                    </div>
            
        </div>

    <div class="card-header" style="background-color:aliceblue;">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{Auth::user()->name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{Auth::user()->email}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong>
                {{Auth::user()->gender}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                {{Auth::user()->address}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mobile_No:</strong>
                {{Auth::user()->mobile}}
            </div>
        </div>

    </div>
@endsection
   
