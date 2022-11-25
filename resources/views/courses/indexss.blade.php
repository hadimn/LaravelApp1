@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>course we choose with discreption: 
                        <a href="{{url('add-course')}}"><button class="btn btn-primary float-end">Add Course</button></a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class=" table-striped">
                    <table class="table table-bordered table-primary">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Course Name</th>
                                <th>Credits</th>
                                <th>Semester</th>
                                <th>Course Discreption</th>
                                <th>Image</th>
                                <th>editing</th>
                                <th>deleting</th>
                            </tr>
                        </thead>
                        <br>
                        <tbody>
                            <tr>
                                <td>{{$courses->id}}</td>
                                <td>{{$courses->CourseName}}</td>
                                <td>{{$courses->Credits}}</td>
                                <td>{{$courses->Semester}}</td>
                                <td>{{$courses->CourseDisc}}</td>
                                <td>
                                    <img src="{{ asset('uploads/courses/'.$courses->Image) }}" width ="100px" height="100px" alt="Image">
                                </td>
                                <td>
                                    <a href="{{ url('edit-course/'.$courses->id) }}" class ="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="{{url('delete-course/'.$courses->id)}}" class ="btn btn-danger btn-sm">delete</a>
                                </td>
                            </tr>
                            <br>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection