@extends('layouts.admin')



@section('content')
<body class="bg-primary">
        <h1>post notice</h1>
        <table class="table table-primary table-striped table-bordered " border="2" cellpadding='10' cellspacing="10">
                <tr class="table-danger">
                        <th>
                        GroupID
                        </th>
                        <th>
                        Notice
                        </th>
                    </tr>
                    @foreach($info as $post)

                    <tr>
                        <td>{{$post->GroupID}}</td>
        
                        <td>{{$post->Notice}}</td>    
                        <td>

                                <form action="{{ route('notice.destroy', $post->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
            
            
            
                            </td>
            
                            <td>
            
                                <form action="{{route('notice.edit' ,$post->id)}}" method="post">
                                    @csrf
                                    @method('GET')
                                    <button class="btn btn-danger" type="submit">Update</button>
                                </form>
            
            
            
                            </td>
                        </tr>
                    @endforeach
            
                    <form action="{{route('notice.create' ,$post->id)}}" method="post">
                        @csrf
                        @method('GET')
                        <button class="btn btn-danger" type="submit">Create</button>
                    </form>
            
                   
            
                </table>
            
            
            </body>
            
            
            
            
            @endsection