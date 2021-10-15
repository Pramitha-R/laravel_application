@extends('employee.dashboard') 
@section('contentEmp1')

<form method="post" action="{{url('confirm_delivery',$order->id)}}"> 
        @csrf

        <input type="hidden" name="status" value="Delivered">
            <div class="card-header" style="background-color:aliceblue;">    
                <h1>Ok Order Is Delivered ☻☻☻</h1></br>
            </div>
            <div class="form-group">              
                <button type="submit" class="btn btn-secondary">submit</button>
            <div>
</form>
@endsection
