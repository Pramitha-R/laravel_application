@extends('layout')
@section('content')
            <div style="padding-top:10px; width:500px"  >
                <div class="col-sm-8 offset-sm-2">
                    <h1  style="padding-left:flex; width:350px;  background-color: blue;" class="card-header" >E-Store</h1><br/>
                    
                   <!-- @if(isset(Auth::user()->email))
                    <script>window.location="#";</script>
                    @endif-->

                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                        @endif
                    <div >
                    <form method="post" action="checkLogin"> 
                        {{ csrf_field() }}
                        <div class="card-header" style="background-color: powderblue;" >    
                            <label for="email">Email Id:</label>
                            <input type="email" class="form-control" name="email"/>
                        </div>
                        <div class="card-header" style="background-color: powderblue;" >
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" name="password"/></br>
                        </div>
                        <div class="card-header" style="background-color: powderblue;">              
                            <button type="submit" class="btn btn-secondary">Login</button>
                        <div>
                    </form>
</br>
                    </div>

                    <div>
                            <a class="btn btn-secondary" href="{{route('customers.index')}}">Register Now!</a>
                    </div>
                </div>
            </div>
@endsection
