@extends('layouts.app')

@section('content')
<h1>!!! Department Informations!!!</h1>
<!-- department -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Department here</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{url('add-department')}}" method="POST">
        @csrf

     
      <div class="modal-body">
       <div class="form-group mb-3">
        <label for="">Department Initial</label>
        <input type="text" name="department_initial" class="control">
       </div>
       <div class="form-group mb-3">
        <label for="">Department Name</label>
        <input type="text" name="department_name" class="control">
       </div>
       <div class="form-group mb-3">
        <label for="">No of Students</label>
        <input type="text" name="no_of_students" class="control">
       </div>
       <div class="form-group mb-3">
        <label for="">No of Faculties</label>
        <input type="text" name="no_of_faculties" class="control">
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
                    <button type="button" class='btn btn-primary float-end'  data-bs-toggle="modal" data-bs-target="#exampleModal1">Add Department</a>
                    </h4>

                </div>
                <div class="card-body">
                <div class="col-md-10">
            <table class="table">
            <thead>
                <tr>
                    <td>Department Initial</td>
                    <td>Department Name</td>
                    <td>No of Students</td>
                    <td>No of Faculties</td>         
                </tr>
            </thead>
            <tbody>
              @foreach( $dpt as $d )
              <tr>
                    <td>{{$d->department_initial}}</td>
                    <td>{{$d->department_name}}</td>
                    <td>{{$d->no_of_students}}</td>
                    <td>{{$d->no_of_faculties}}</td>
                           
                    
                </tr>
              @endforeach
            </tbody>
        </table>
            </div>
                </div>   '
                 </div>
                 <a href="home" class='btn btn-secondary float-end'> Go Back </a>
   </div>
@endsection