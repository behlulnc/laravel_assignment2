@extends('pages.layouts.app')

@section('content')
<br>
    <div class="row">
        <div class="col-lg-11">
            <h2>Add New Departments</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ route('departments.list')}}"> Back</a>
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
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <form action="{{ route('departments.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Department Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Department Name" name="name">
        </div>
  
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection