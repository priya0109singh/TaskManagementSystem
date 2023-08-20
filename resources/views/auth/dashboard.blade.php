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
                                <a href="{{ route('tasks.index') }}" class="position-relative d-flex text-white text-decoration-none w-100">
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
        <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left py-4">
                <h2>Dashboard</h2>
            </div>
            <div class="pull-right py-3">
                <a class="btn btn-success" href="{{ route('tasks.create') }}"> Add New Task</a>
            </div>
        </div>
    </div>
 </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   <div class="container">
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>title</th>
            <th>description</th>
            <th>duedate</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($tasks as $task)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $task->title }}</td>
            <td>{{ $task->description}}</td>
            <td>{{ $task->duedate }}</td>
            <td>
                <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('tasks.show',$task->id) }}">View More</a>
    
                    <a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
  
    {!! $tasks->links() !!}
      
@endsection

        </div>
    </div>
