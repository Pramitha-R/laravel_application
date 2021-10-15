@extends('employee.dashboard') 
@section('contentEmp1')
<div class="row">
            
                    <div class="card-header" style="background-color:aliceblue;">
                        <h2>Welcome to Employee Dashboard!  </h2>
                    </div>
            
        </div>

        <div class="card-header" style="background-color:aliceblue;">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{$employee->name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
               {{$employee->email}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong>
               {{$employee->gender}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
               {{$employee->address}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mobile_No:</strong>
               {{$employee->mobile}}
            </div>
        </div>

    </div>

@endsection