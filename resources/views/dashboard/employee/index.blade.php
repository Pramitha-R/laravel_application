@extends('dashboard.admin')
@section('content2')
   <div class="row">
        <div >
            <div >
                </br>
                <a class="btn btn-secondary" href="{{route('employees.create')}}"> Enroll New Employee</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-striped table-hover"  >
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile_No</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->mobile }}</td>
            <td>
            <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
   
            <a class="btn btn-info" href="{{ route('employees.show',$employee->id) }}">Show</a>

            <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}">Edit</a>

            @csrf
                @method('DELETE')

       <button type="submit" class="btn btn-danger">Delete</button>
   </form>
            
            </td>
        </tr>
        @endforeach
    </table> 
  
@endsection    

   
   
