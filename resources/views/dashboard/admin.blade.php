@extends('layout')
@section('content')
    <div class="row">
        <div  class="pull-right">
            <h3 style=" background-color: blue;" class="card-header">E-Store</h3><br/>
           
            <!--<strong>{{ Auth::user()->email }}</strong></br>-->
            <table class="card-header" >
                <tr>
                    <th><a class="btn btn-secondary"  style=" width:275px"  href="{{url('admindetail')}}">Admin_name</a></th>
                    <th><a class="btn btn-secondary" style=" width:275px" href="{{route('products.index')}}">Products</a></th>
                    <th><a class="btn btn-secondary" style=" width:275px" href="{{route('employees.index')}}">Employees</a></th>
                    <th><a class="btn btn-secondary" style=" width:275px" href="{{url('admin_logout')}}">Logout</a></th>
                </tr>            
            </table>
        </div>
    </div>
    <div class="container">
            @yield('content2')
    </div>

 @endsection