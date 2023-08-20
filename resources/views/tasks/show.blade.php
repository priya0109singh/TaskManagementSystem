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
                <h2> Show Task</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tasks.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $task->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $task->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Due Date:</strong>
                {{ $task->duedate }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                {{ $task->status }}
            </div>
        </div>
    </div>
</div>
</div>
@endsection