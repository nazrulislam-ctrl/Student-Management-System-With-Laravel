@extends('layouts.app')

@section('content')
<h1>!!!Student Info!!!</h1>
<!-- exam -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="{{url('update-students'.$students->id)}}" method="POST">
       @csrf
       @method('PUT')
      <div class="modal-body">
       <div class="form-group mb-3">
        <label for="">Student ID</label>
        <input type="text" name="id" value="{{$students->id}}" class="control">
       </div>
       <div class="form-group mb-3">
        <label for="">Name</label>
        <input type="text" name="name" value="{{$students->name}}" class="control">
       </div>
       <div class="form-group mb-3">
        <label for="">Department</label>
        <input type="text" name="department" value="{{$students->department}}" class="control">
       </div>
       <div class="form-group mb-3">
        <label for="">Phone</label>
        <input type="text" name="phone" value="{{$students->phone}}" class="control">
       </div>
       <div class="form-group mb-3">
        <label for="">Email</label>
        <input type="text" name="email" value="{{$students->email}}"class="control">
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>

