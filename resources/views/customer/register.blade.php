@extends('layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="card-header" style="background-color:aliceblue;">
            <h2>Customer Registration!</h2>
        </div>
        <div class="pull-right">
           
        </div>
    </div>
</div>
<!-- error messages --> 
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

   
<form action="{{route('customers.store')}}" method="post">
    @csrf
    <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name"  class="form-control" placeholder="name">
                </div>
            </div>
            <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email"  class="form-control" placeholder="email">
            </div>
            <div class="form-group">
                <strong>Gender:</strong>
                <select name="gender" class="form-select form-select-sm" aria-label="from-select-sm example">
                    <option class="from-control" value="f">F</option>
                    <option class="from-control" value="m">M</option>
                </select>    
            </div>

                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" name="address"  class="form-control" placeholder="address">
                </div>

                <div class="form-group">
                    <strong>Mobile_No:</strong>
                    <input type="number" name="mobile"  class="form-control" placeholder="mobile">
                </div>
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="text" name="password"   class="form-control" placeholder="password">
                </div>
            </br></br>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection