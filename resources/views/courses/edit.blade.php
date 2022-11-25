@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if(session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>edit Course with image: 
                        <a href="{{url('courses1')}}"><button class="btn btn-primary float-end">View Courses</button></a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{url('update-course/'.$courses->id)}}" method = 'POST' enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="">Course Name:</label>
                            <input type="text" name="CourseName" value="{{ $courses->CourseName }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Credits</label>
                            <input type="text" name="Credits" value="{{ $courses->Credits }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Semester:</label>
                            <input type="text" name="Semester" value="{{ $courses->Semester }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Course Discreption:</label>
                            <input type="text" name="CourseDisc" value="{{ $courses->CourseDisc }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Course Image:</label>
                            <input type="file" name="Image" class="form-control">
                            <img src="{{ asset('uploads/courses/'.$courses->Image) }}" width ="70px" height="70px" alt="Image">
                        </div>
                        <div class="form-group mb-3">
                            <button type = "submit" class = "btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection