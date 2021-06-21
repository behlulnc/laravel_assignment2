
@extends('layout.app')

@section('content')
<br>
    <div class="row">
        <div class="col-lg-11">
                <h2>Laravel 8  Example</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ route('student.create') }}">Add</a>
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
                <th>First Name</th>
                <th>Last Name</th>
                <th>Adddress</th>
             
            </tr>
        </thead>
        <tbody>
        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->gsm_no }}</td>
                
                <td>
                    <form action="{{ route('student.destroy',['id'=>$student->id])}}"  method="POST"onsubmit="return confirm('Are you sure you want to unenroll?');" style="display: inline-block;">
                        <a class="btn btn-info btn-sm" href="{{ route('student.show',$student->id) }}">Show</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('student.edit',$student->id) }}">Edit</a>
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