@extends('employee.layout') 
@section('contentEmployee')
    <div class="row">
        <div  class="pull-right">
            <h3 style=" background-color: blue;" class="card-header">E-Store</h3><br/>
           
            <table>
                <tr>
                    <th><a class="btn btn-secondary" style=" width:275px" href="{{url('Employee_detail',$employee->id)}}">Employee_Name</a></th>
                    <th><a class="btn btn-secondary" style=" width:275px" href="{{url('Employee_resetPW',$employee->id)}}">Reset Password</a></th>
                    <th><a class="btn btn-secondary" style=" width:275px" href="{{url('My_Order',$employee->id)}}">My_Order</a></th>
                    <th><a class="btn btn-secondary"  style=" width:275px" href="{{url('admin_logout')}}">Logout</a></th>
                </tr>            
            </table>
        </div>
    </div>
    <div class="container">
            @yield('contentEmp1')
    </div>
@endsection