@extends('pages.layouts.app')

@section('content')
<br>
    <div class="row">
        <div class="col-lg-11">
            <h2>Add New Customer</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ route('customers.list')}}"> Back</a>
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

    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name"> Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
        </div>
        <div class="form-group">
            <label for="gsm_no">GSM NO:</label>
   
              <input type="text" class="form-control" id="gsm_no" name="gsm_no" placeholder="Enter GSM NO" name="email">
            
        </div>
        <label for="department_id">Choose a Department:</label>
 <div class="form-group">
<select id="department_id" name= "department_id"   class="form-control">
  <option value="0">Choose</option>
  <option value="1">Muhasebe</option>
  <option value="2">Pazarlama</option>
</select>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection