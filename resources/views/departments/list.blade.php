
@extends('pages.layouts.app')

@section('content')
<br>
    <div class="row">
        <div class="col-lg-11">
                <h2>Laravel Assignment (Customers List) </h2>
        </div> 
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('customers.list') }}">Customers List</a>            
            <a class="btn btn-success" href="{{ route('customers.create') }}">Customers Add</a>
            <a class="btn btn-success" href="{{ route('departments.list') }}">Departments List</a> 
            <a class="btn btn-success" href="{{ route('departments.create') }}">Departments Add</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Department Name</th>
      
             
            </tr>
        </thead>
        <tbody>
        @foreach ($departments as $department)
            <tr>
                <td>{{ $department->id }}</td>
                <td>{{ $department->name }}</td>
 
                
                <td>
                    <form action="{{ route('departments.destroy',['id'=>$department->id])}}"  method="POST"onsubmit="return confirm('Are you sure you want to unenroll?');" style="display: inline-block;">
                        <a class="btn btn-info btn-sm" href="{{ route('departments.show',$department->id) }}">Show</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('departments.edit',$department->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

@endsection