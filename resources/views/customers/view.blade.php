@extends('pages.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>Laravel Assignment (Customers ) </h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ route('customers.list') }}"> Back</a>
        </div>
    </div>
<hr />

 <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('customers.list') }}">Customers List</a>            
            <a class="btn btn-success" href="{{ route('customers.create') }}">Customers Add</a>
            <a class="btn btn-success" href="{{ route('departments.list') }}">Departments List</a> 
            <a class="btn btn-success" href="{{ route('departments.create') }}">Departments Add</a>
        </div>
<hr />



    <table class="table table-bordered">
        <tr>
            <th> Name:</th>
            <td>{{ $customer->name }}</td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>{{ $customer->email }}</td>
        </tr>
        <tr>
            <th>GSM NO:</th>
            <td>{{ $customer->gsm_no }}</td>
        </tr>

    </table>
@endsection