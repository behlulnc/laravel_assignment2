
@extends('pages.layouts.app')

@section('content')
<br>
    <div class="row">
        <div class="col-lg-11">
                <h2>Laravel Assignment</h2>
        </div>
        <hr />
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

<hr />
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th> GSM NO </th>
                <th> Department ID </th>
             
            </tr>
        </thead>
        <tbody>
        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->gsm_no }}</td>
                <td>{{ $customer->department_id }}</td>
                
                <td>
                    <form action="{{ route('customers.destroy',['id'=>$customer->id])}}"  method="POST"onsubmit="return confirm('Are you sure you want to unenroll?');" style="display: inline-block;">
                        <a class="btn btn-info btn-sm" href="{{ route('customers.show',$customer->id) }}">Show</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('customers.edit',$customer->id) }}">Edit</a>
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