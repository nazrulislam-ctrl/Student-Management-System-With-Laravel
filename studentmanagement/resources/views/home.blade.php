<!DOCTYPE html>
<html lang="en">
<head>
  <title>SMS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/cstudents/bootstrap.min.cstudents">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
@extends('layouts.app')

@section('content')
<div class="container-fluid">
</div>
	<span id="top_span"><marquee>Note:- Welcome to The Portal of BRAC University Student Management System.</marquee></span>
	<div id="left_side">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                        
                </div>
            </div>
        </div>

        <div class="row">
         
          <div class="col-2">
            <div class="list-group">
             <a href="/teachers" class="list-group-item list-group-item-action">Teachers</a>
             <a href="/student" class="list-group-item list-group-item-action">Students</a>
             <a href="/department" class="list-group-item list-group-item-action">Departments</a>
             <a href="/exam" class="list-group-item list-group-item-action">Exam</a>
             <a href="/courses" class="list-group-item list-group-item-action">Courses</a>
            </div>  
            <img src={{asset('images/Student-Management-System-Guide-min.png')}} alt="" >              
            </div>
        </div>
            
    </div>
</div>
@endsection
</html>
