@extends('customer.dashboard')
@section('contentCust1')
<form method="post" action="{{url('cancell_confirm',$order->id)}}"> 
        @csrf

        <input type="hidden" name="status" value="Cancelled">
            <div class="card-header" style="background-color:aliceblue;">    
                <h1>order will cancel </h1></br>
            </div>
            <div class="form-group">              
                <button type="submit" class="btn btn-secondary">submit</button>
            <div>
</form>


@endsection