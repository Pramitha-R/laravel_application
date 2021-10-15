@extends('dashboard.admin')
@section('content2')
<div class="row">
        <div >
            <div class="card-header" style="background-color:aliceblue;">
                <h2>Edit Employee</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('employees.index')}}"> Back</a>
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
  
    <form action="{{route('employees.update',$employee->id)}}" method="post">
        @method('PUT')
        @csrf
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{$employee->name}}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="form-group">
                    <strong>Email:</strong>
                    <input type="name" name="email" value="{{$employee->email}}" class="form-control" placeholder="email">
            </div>
            <div class="form-group">
                    <strong>Gender:</strong>
                    <input type="text" name="gender" value="{{$employee->gender}}" class="form-control" placeholder="gender">
                </div>

                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" name="address" value="{{$employee->address}}" class="form-control" placeholder="address">
                </div>

                <div class="form-group">
                    <strong>Mobile_No:</strong>
                    <input type="number"  name="mobile" value="{{$employee->mobile}}" class="form-control" placeholder="mobile">
                </div>
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="text" name="password"  value="{{$employee->password}}" class="form-control" placeholder="password">
                </div>

</br>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </div>
   
    </form>
@endsection