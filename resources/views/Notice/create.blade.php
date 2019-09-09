@extends('layouts.admin')
@section('content')
<body class="bg-primary">
<h2 class="display-3 text-center my-4">Create Notice</h2>
<form  method="post" action="{{ route('notice.store') }}">
        {{ csrf_field() }}

    <div class="form-group">
    <label for="Select Group to Post  Notice">Select Group to Post  Notice </label>
    <select class="bg-white text-danger  form-control " name='GroupID[]' multiple> 
        @foreach ($users as $user)
            <option value="{{ $user->GroupID }}">{{ $user->GroupID }}</option>
            
        @endforeach
    </select>
    </div>
    <div class="form-group">
            <label for="Enter Notice">Enter Notice</label>
            <input class="bg-white text-danger p-2 form-control form-control-sm" type="text" name="Notice" placeholder="Enter Notice" >
            </div>
            <input class="btn btn-danger btn-lg px-5" type="submit" name="submit">

        </form>
    </body>
    
  @endsection