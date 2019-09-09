@extends('layouts.admin')


{{--
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
--}}
@section('content')
<body class="bg-primary">
    <h1 class="display-3 text-center my-4">Create</h1>    
<form  method="post" action="{{ route('info.store') }}" >

    


    {{csrf_field()}}


    <div class="form-group">
        <label for="User Type">User Type</label>
        <select class="bg-white text-danger  form-control " name="user_id">
                <label for="User Type">User Type</label>
                <option value="1" name="user_id">Admin</option>
                <option value="2" name="user_id">User</option>
        
            </select>
        </div>
    <div class="form-group">
        <label  for="name">Name</label>
        <input class="bg-white text-danger p-2 form-control form-control-sm" type="text" name="name" placeholder="ENTER Name">
        {!! $errors->first('Name', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group">
        <label for="Student Id">Enter Student Id</label>
        <input class="bg-white text-danger p-2 form-control form-control-sm" type="text" name="studentID" placeholder="ENTER Studen ID" >
        {!! $errors->first('UserName', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input class="bg-white text-danger p-2 form-control form-control-sm" type="text" name="email">
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input class="bg-white text-danger p-2 form-control form-control-sm" type="text" name="password" placeholder="ENTER Password" ><br></br>
        {!! $errors->first('Password', '<p class="help-block">:message</p>') !!}
    </div>

    <input class="btn btn-danger btn-lg px-5" type="submit" name="submit">

            


</form>
      @endsection      


            