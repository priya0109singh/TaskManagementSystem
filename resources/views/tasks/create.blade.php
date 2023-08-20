@extends('layout')
  
@section('content')

<div class="main-container">
        <div class="navcontainer">
            <nav class="nav d-flex flex-column justify-content-between">
                <div class="nav-upper-options">
                    <div class="section-side-nav position-relative">
                    <ul class="top-0 start-0 ps-0 w-100">
                            <li class="position-relative w-100 list-unstyled">
                                <a href="#" class="position-relative d-flex text-white text-decoration-none w-100">
                                    <span class="icon position-relative d-block text-center"><i
                                            class=" d-inline w-0 fa fa-home"></i></span>
                                    <span class="title position-relative d-block text-dark">Dashboard</span>
                                </a>
                            </li>
                            <li class="position-relative w-100 list-unstyled colored-list">
                                <a href="#" class="position-relative d-flex text-white text-decoration-none w-100">
                                    <span class="icon position-relative d-block text-center"><i
                                            class=" d-inline w-0 fa fa-wallet"></i></span>
                                    <span class="title position-relative d-block text-dark">Task List
                                    </span>
                                </a>
                            </li>
                          
                        </ul>
                    </div>
                   
                </div>
            </nav>
        </div>
    <div class="main">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Task Management System</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('tasks.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <input type="text" name="description" class="form-control" placeholder="description">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Due Date:</strong>
                <input class="form-control" style="" type="date" name="duedate" placeholder="Due Date">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
</div>
    </div>
@endsection

