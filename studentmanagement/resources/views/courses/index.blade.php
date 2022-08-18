@extends('layouts.app')

@section('content')
<h1>!!!Course Informations!!!</h1>
<!-- course -->

  <!-- Modal -->
  <div class="modal fade" id="coursepleModal3" tabindex="-1" aria-labelledby="coursepleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="coursepleModalLabel">Add course here</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="{{url('add-course')}}" method="POST">
       @csrf
     
      <div class="modal-body">
       <div class="form-group mb-3">
        <label for="">Department</label>
        <input type="text" name="department" class="control">
       </div>
       <div class="form-group mb-3">
        <label for="">Course Name</label>
        <input type="text" name="course_name" class="control">
       </div>
       <div class="form-group mb-3">
        <label for="">Course code</label>
        <input type="text" name="course_code" class="control">
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                    <button type="button" class='btn btn-primary float-end'  data-bs-toggle="modal" data-bs-target="#coursepleModal3">Add Course</a>
                    </h4>

                </div>
                <div class="card-body">
                <div class="col-md-10">
            <table class="table">
            <thead>
                <tr>
                    <td>Department</td>
                    <td>Course Name</td>
                    <td>Course Code</td>
                    
                </tr>
            </thead>
            <tbody>
              @foreach($course as $c )
              <tr>
                    <td>{{$c->department}}</td>
                    <td>{{$c->course_name}}</td>
                    <td>{{$c->course_code}}</td>
                    
                    
              @endforeach
            </tbody>
        </table>
            </div>
                </div>
            </div>
            <a href="home" class='btn btn-secondary float-end'> Go Back </a>
        </div>
    </div>
</div>
@endsection

