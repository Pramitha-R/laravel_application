@extends('employee.dashboard') 
@section('contentEmp1')


    @if ($message = Session::get('error'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif


    @if ($errors->any())-->
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div><br />
    @endif
    <div style=" background-color: powerblue;" class="card-header">
    <form method="post" action="{{url('newPW',$employee->id)}}"> 
        {{ csrf_field() }}
            <div class="form-group">    
                <label for="password">current Password:</label>
                <input type="text" class="form-control" name="current_password"/>
            </div>
            <div class="form-group">
                <label for="password">new Password:</label>
                    <input type="password" class="form-control" name="password"/></br>
            </div>
            <div class="form-group">
                <label for="password">confirm Password:</label>
                    <input type="password" class="form-control" name="confirm_password"/></br>
            </div>

            <div class="form-group">              
                <button type="submit" class="btn btn-primary">submit</button>
            <div>
    </form>
    </br>
@endsection