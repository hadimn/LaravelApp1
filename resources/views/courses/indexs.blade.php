@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Courses with links
                    <a href="{{url('add-course')}}"><button class="btn btn-primary float-end">Add Course</button></a>
                </h4>
            </div>
        <div class="card-body">
            <div class=" table-striped">
                <h3>Student courses:</h3>
                <table class="table table-bordered table-primary">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Course Name</th>
                            <th>Image</th>
                            <th>editing</th>
                            <th>deleting</th>
                        </tr>
                    </thead>
                    <br>
                    
                    <tbody>
                        @foreach($courses as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td><a href = "{{ url('goto-course/'.$item->id)}}" >{{$item->CourseName}}</a></td>
                            <td>
                                <img src="{{ asset('uploads/courses/'.$item->Image) }}" width ="150px" height="150px" alt="Image">
                            </td>
                            <td>
                                <a href="{{ url('edit-course/'.$item->id) }}" class ="btn btn-primary btn-sm">Edit</a>
                            </td>
                            <td>
                                <a href="{{url('delete-course/'.$item->id)}}" class ="btn btn-danger btn-sm">delete</a>
                            </td>
                        </tr>
                        <br>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>
</div>

@endsection