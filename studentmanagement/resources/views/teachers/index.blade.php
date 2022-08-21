@extends('layouts.app')

@section('content')
<h1>!!!Teachers Informations!!!</h1>\
<!-- student -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Teachers Here</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{url('add-teacher')}}" method="POST">
        @csrf

     
      <div class="modal-body">
       <div class="form-group mb-3">
        <label for="">ID</label>
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
       <a href="teachers" class='btn btn-secondary'> Reset </a>
      </form>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                    <button type="button" class='btn btn-primary float-end'  data-bs-toggle="modal" data-bs-target="#exampleModa">Add Teachers</a>
                    </h4>

                </div>
                <div class="card-body">
                <div class="col-md-10">
            <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Department</td>
                    <td>Phone</td>
                    <td>Email</td>
                   
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
              @foreach($teachers as $t )
              <tr>
                    <td>{{$t->id}}</td>
                    <td>{{$t->name}}</td>
                    <td>{{$t->department}}</td>
                    <td>{{$t->phone}}</td>
                    <td>{{$t->email}}</td>
                    
                    
                    <td>
                    <form action="{{ url('delete-teachers/'.$t->id) }}" method='POST'>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class='btn btn-danger float-end'>Delete</button>
                    </form>
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
            </div>
            <a href="home" class='btn btn-secondary float-end'> Go Back </a>
                </div>
@endsection