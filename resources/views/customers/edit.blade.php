@extends('pages.layouts.app')

@section('content')
<br>
    <div class="row">
        <div class="col-lg-11">
            <h2>Update Customer</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ route('customers.create') }}"> Back</a>
        </div>
        
        
           <hr />
           <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('customers.list') }}">Customers List</a>            
            <a class="btn btn-success" href="{{ route('customers.create') }}">Customers Add</a>
            <a class="btn btn-success" href="{{ route('departments.list') }}">Departments List</a> 
            <a class="btn btn-success" href="{{ route('departments.create') }}">Departments Add</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <hr />
    <form method="post" action="{{ route('customers.update',$customer->id) }}" >
        @method('PATCH')
        @csrf
        
       

        <div class="form-group">
            <label for="txtFirstName"> Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{ $customer->name }}">
        </div>
        <div class="form-group">
            <label for="txtLastName">Last Name:</label>
            <input type="text" class="form-control" id="txtLastName" placeholder="Enter Last Name" name="txtLastName" value="{{ $customer->last_name }}">
        </div>
        <div class="form-group">
            <label for="txtAddress">Address:</label>
            <textarea class="form-control" id="txtAddress" name="txtAddress" rows="10" placeholder="Enter Address">{{ $customer->address }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection