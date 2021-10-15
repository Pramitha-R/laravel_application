@extends('dashboard.admin')
@section('content2')
<div class="row">
        <div >
            <div class="card-header" style="background-color:aliceblue;">
                <h2>Details Of Employee</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('employees.index')}}"> Back</a></br>
            </div>
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