@extends('layouts.admin')



@section('content')

<body class="bg-primary">
        
	

            <h1>User</h1>
            <table class="table table-primary table-striped table-bordered " border="2" cellpadding='10' cellspacing="10">
               <thread class="table-danger">
                <tr class="table-danger">
                    <th>
                        Id
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Student ID
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        User Type
                    </th>
                </tr>
                </thread>
                <tbody>
                @foreach($info as $post)

                <tr>
                    <td>{{$post->user_id}}</td>

                    <td>{{$post->name}}</td>

                    <td>{{$post->studentID}}</td>
                    <td>{{$post->email}}</td>
                    <td>
                        @if($post->user_id == 1)
                   Admin

                    @else
                   User
                   @endif
                    </td>


                    <td>

                        <form action="{{ route('info.destroy', $post->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>

                    </td>

                    <td >

                        <form action="{{route('info.edit' ,$post->id)}}" method="post">
                            @csrf
                            @method('GET')
                            <button class="btn btn-danger" type="submit">Update</button>
                        </form>



                    </td>

                    <td>

                  


                    </td>
                </tr>
                @endforeach

                <form action="{{route('info.create' ,$post->id)}}" method="post">
                    @csrf
                    @method('GET')
                    <button class="btn btn-danger" type="submit">Create</button>
                </form>
                <tbody>
            </table>

            

</body>



@endsection