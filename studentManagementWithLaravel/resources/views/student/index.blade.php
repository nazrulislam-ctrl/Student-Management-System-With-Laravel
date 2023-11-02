@extends('layouts.app')

@section('content')
<h1>!!! Student Info!!!</h1>\
<!-- student -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add students here</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{url('add-student')}}" method="POST">
        @csrf

     
      <div class="modal-body">
       <div class="form-group mb-3">
        <label for="">Student ID</label>
        <input type="text" name="id" class="control">
       </div>
       <div class="form-group mb-3">
        <label for="">Name</label>
        <input type="text" name="name" class="control">
       </div>
       <div class="form-group mb-3">
        <label for="">Department</label>
        <input type="text" name="department" class="control">
       </div>
       <div class="form-group mb-3">
        <label for="">Phone</label>
        <input type="text" name="phone" class="control">
       </div>
       <div class="form-group mb-3">
        <label for="">Email</label>
        <input type="text" name="email" class="control">
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
    <form action="" >
      <div class="form-group">
        <input type="search" name="search" id="" class="form-control" placeholder="Search by Name, Id, Phone or Email" value="{{$search}}">
       </div>
       <button class="btn btn-primary">Search</button>
       <a href="student" class='btn btn-secondary'> Reset </a>
      </form>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                    <button type="button" class='btn btn-primary float-end'  data-bs-toggle="modal" data-bs-target="#exampleModal2">Add Students</a>
                    </h4>

                </div>
                <div class="card-body">
                <div class="col-md-10">
            <table class="table">
            <thead>
                <tr>
                    <td>Student ID</td>
                    <td>Name</td>
                    <td>Department</td>
                    <td>Phone</td>
                    <td>Email</td>
                  
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
              @foreach($students as $s )
              <tr>
                    <td>{{$s->id}}</td>
                    <td>{{$s->name}}</td>
                    <td>{{$s->department}}</td>
                    <td>{{$s->phone}}</td>
                    <td>{{$s->email}}</td>
                    
                    
                    <td>
                    <form action="{{ url('delete-students/'.$s->id) }}" method='POST'>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class='btn btn-danger float-end '>Delete</button>
                    </form>
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
            </div>
            <a href="home" class='btn btn-secondary float-end'> Go Back </a>
                </div>
                
</div>
</div>
</div>
@endsection