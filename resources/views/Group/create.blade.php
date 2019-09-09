@extends('layouts.admin')

@section('content')
<body class="bg-primary">
    <h2 class="display-3 text-center my-4">Create Group</h2>
    <form  method="post" action="{{ route('group.store') }}">
    
        {{csrf_field()}}
        <div class="form-group">
            <label for="Group Id">Group Id</label>
        <input class="bg-white text-danger p-2 form-control form-control-sm"  type="number" name="GroupID">
        </div>
        <div class="form-group">
        <label for="Select Id to Assign Into Group">Select Id to Assign Into Group </label>
        <select class="bg-white text-danger  form-control " name='member[]' multiple> 
            @foreach ($users as $user)
                <option value="{{ $user->name }}">{{ $user->studentID }}</option>
                
            @endforeach
        </select>
        </div>
        <div class="form-group">
        <label for="Enter Status">Enter Status</label>
        <select class="bg-white text-danger  form-control "  name="Status">
            <option value="Official" name="Status">Official</option>
            <option value="UnOfficial" name="Status">UnOfficial</option>
        </select>
        </div>
        <div class="form-group">
        <label for="Enter Deadline">Enter Deadline</label>
        <input class="bg-white text-danger p-2 form-control form-control-sm" type="text" name="Deadline" placeholder="Enter Deadline" >
        </div>
        <div class="form-group">
        <label for="Judgemental View">Judgemental View</label>
        <select class="bg-white text-danger  form-control "   name="JudgementalView">
            <option value="Ongoing" name="JudgementalView">On going</option>
            <option value="Registered" name="JudgementalView">Registered</option>
            <option value="Completed" name="JudgementalView">Completed</option>
    
        </select>
        </div>
        
        <input class="btn btn-danger btn-lg px-5" type="submit" name="submit">
    
    </form>
    </body>
@endsection
