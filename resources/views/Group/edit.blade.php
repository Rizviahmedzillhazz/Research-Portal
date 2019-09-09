@extends('layouts.admin')
@section('content')
<h2 class="display-3 text-center my-4">Create Group</h2>
<form class="text-center bg-primary " method="post" action="{{route('group.update' ,$post->id)}}">
    @method('PUT')
    @csrf
    {{csrf_field()}}
    
    <br>
    Edit Status:
    <select class="bg-info text-danger p-2"  name="Status">
        <option value="Official" name="Status">Official</option>
        <option value="UnOfficial" name="Status">UnOfficial</option>

    </select>
    <br>
    Enter Deadline:
    <input class="bg-info text-danger p-2"  type="text" name="Deadline" placeholder="Enter Deadline" ><br>
    JudgementalView:
    <select class="bg-info text-danger p-2"  name="JudgementalView">
        <option value="Ongoing" name="JudgementalView">On going</option>
        <option value="Registered" name="JudgementalView">Registered</option>
        <option value="Completed" name="JudgementalView">Completed</option>

    </select>
    <br>
    <input class= "btn btn-danger px-5" type="submit" name="submit">

</form>

@endsection
