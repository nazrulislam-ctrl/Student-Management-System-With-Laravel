@extends('layouts.app')

@section('content')
<h1>!!!Exam Info!!!</h1>
<!-- exam -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add exam here</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="{{url('add-exam')}}" method="POST">
       @csrf
     
      <div class="modal-body">
       <div class="form-group mb-3">
        <label for="">Exam title</label>
        <input type="text" name="exam_title" class="control">
       </div>
       <div class="form-group mb-3">
        <label for="">Exam type</label>
        <input type="text" name="exam_type" class="control">
       </div>
       <div class="form-group mb-3">
        <label for="">Marks</label>
        <input type="text" name="marks" class="control">
       </div>
       <div class="form-group mb-3">
        <label for="">Duration</label>
        <input type="text" name="duration" class="control">
       </div>
       <div class="form-group mb-3">
        <label for="">Exam date</label>
        <input type="text" name="exam_date" class="control">
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
        <input type="search" name="search" id="" class="form-control" placeholder="Search by Exam title or Exam type or Exam date" value="{{$search}}">
       </div>
       <button class="btn btn-primary">Search</button>
       <a href="exam" class='btn btn-secondary'> Reset </a>
      </form>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                    <button type="button" class='btn btn-primary float-end'  data-bs-toggle="modal" data-bs-target="#exampleModal3">Add Exam</a>
                    </h4>

                </div>
                <div class="card-body">
                <div class="col-md-10">
            <table class="table">
            <thead>
                <tr>
                    <td>Exam Title</td>
                    <td>Exam Type</td>
                    <td>Marks</td>
                    <td>Duration</td>
                    <td>Exam Date</td>
                    <td>Delete</td>
                    
                    
                </tr>
            </thead>
            <tbody>
              @foreach($exam as $e )
              <tr>
                    <td>{{$e->exam_title}}</td>
                    <td>{{$e->exam_type}}</td>
                    <td>{{$e->marks}}</td>
                    <td>{{$e->duration}}</td>
                    <td>{{$e->exam_date}}</td>
                    
                    <td>
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
                </div>
            </div>
            <a href="home" class='btn btn-secondary float-end'> Go Back </a>
        </div>
    </div>
</div>
@endsection

