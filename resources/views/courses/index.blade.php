@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header p-6">
                    <h4 class="" >Laravel 8 IMAGE CRUD
                        <button ><a href="{{url('add-course')}}" calss="float-end btn btn-primary" >Add Course </a></button>
                    </h4>
                </div>
                <div class="card-body">
                    <div class=" table-striped">
                    <table class="table " style="border-radius:5px;border:1px solid black;border-collapse: separate;">
                        <thead style="background-color:aqua">
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
                        <tbody style="background-color: rgba(65, 71, 66, 0.842);color:white;">
                            @foreach($courses as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->CourseName}}</td>
                                <td>{{$item->Credits}}</td>
                                <td>{{$item->Semester}}</td>
                                <td>{{$item->CourseDisc}}</td>
                                <td>
                                    <img src="{{ asset('uploads/courses/'.$item->Image) }}" width ="70px" height="70px" alt="Image">
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

@endsection
