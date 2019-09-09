@extends('layouts.admin')



@section('content')
<body class="bg-primary">
    <h1>Groups</h1>
    <table class="table table-primary table-striped table-bordered " border="2" cellpadding='10' cellspacing="10">
        <tr class="table-danger">
            <th>
            GroupID
            </th>
            <th>
            Member
            </th>
            <th>
            Status
            </th>
            <th>
            Deadline
            </th>
            <th>
            JudgementalView
            </th>
            <th>
                    Notice
                    </th>
           
        </tr>
        @foreach($info as $post)

            <tr>
                <td>{{$post->GroupID}}</td>

                <td>{{$post->Member}}</td>
                

                <td>{{$post->Status}}</td>
                <td>{{$post->Deadline}}</td>
                <td>{{$post->JudgementalView}}</td>
                <td>{{ $post->Notice }}</td>
                

                


                <td>

                    <form action="{{ route('group.destroy', $post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>



                </td>

                <td>

                    <form action="{{route('group.edit' ,$post->id)}}" method="post">
                        @csrf
                        @method('GET')
                        <button class="btn btn-danger" type="submit">Change Step</button>
                    </form>



                </td>
            </tr>
        @endforeach

        <form action="{{route('group.create' ,$post->id)}}" method="post">
            @csrf
            @method('GET')
            <button class="btn btn-danger" type="submit">Create</button>
            <button class="btn btn-danger" type="submit">Ongoing Research</button>
            <button class="btn btn-danger" type="submit">Enrolling groups</button>
        </form>

        <form action="{{route('notice.create' ,$post->id)}}" method="post">
            @csrf
            @method('GET')
            <button class="btn btn-danger" type="submit">Post notice</button>
        </form>

    </table>


</body>




@endsection