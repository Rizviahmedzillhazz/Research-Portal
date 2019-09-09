@extends('layouts.admin')

        
@section('content')

	
<body>
<h1 class="display-3 text-center my-4">Edit</h1>
<form class="bg-primary " method="post" action="{{route('info.update' ,$post->id)}}" >
@method('PUT')
    @csrf
    <div class="form-group">
        <label for="User Type">User Type</label>
        <select class="bg-white text-danger  form-control " name="user_id">
        <option value="1" name="user_id">Admin</option>
        <option value="2" name="user_id">User</option>

    </select>
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input class="bg-white text-danger p-2 form-control form-control-sm" 
        type="text" name="name" placeholder="Edit Name" 
        value="{{ $post->Name }}" >
        {!! $errors->first('Name', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group">
        <label for="Stident Id">Studen Id</label>
        <input class="bg-white text-danger p-2 form-control form-control-sm" 
        type="text" name="studentID" placeholder="Edit Student Id" 
        value="{{ $post->UserName }}" >
        {!! $errors->first('UserName', '<p class="help-block">:message</p>') !!}
        </div>

    <div class="form-group">    
    
    <label for="password">Password</label>
    <input class="bg-white text-danger p-2 form-control form-control-sm"  type="text" name="password" placeholder="Edit Password" value="{{$post->Password}}" ><br></br>
    {!! $errors->first('Password', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="form-group">
        <label for="email">Email</label>
    <input class="bg-white text-danger p-2 form-control form-control-sm"  type="text" name="email" placeholder="Edit email" value="{{ $post->email}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}

    </div>
    <input class="btn btn-danger btn-lg px-5" type="submit" name="submit">
    
    
    

</form>
            

</body>
@endsection