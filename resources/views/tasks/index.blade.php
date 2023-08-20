@extends('layout')
 
@section('content')


<div class="main-container">
        <div class="navcontainer">
            <nav class="nav d-flex flex-column justify-content-between">
                <div class="nav-upper-options">
                    <div class="section-side-nav position-relative">
                        <ul class="top-0 start-0 ps-0 w-100">
                            <li class="position-relative w-100 list-unstyled">
                                <a href="{{ route('dashboard') }}" class="position-relative d-flex text-white text-decoration-none w-100">
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
            <div class="pull-left py-5">
                <h2> TaskList</h2>
            </div>
            <div class="mb-2">
            <form class="form-inline"action="">
                <label for="catagory-filter"><b>Filter </b>&nbsp;</label>
                <select class="form-control"name="catagory" id="catagory-filter">
                <option value=""> Sort By TaskList </option>
                <option value="">Title</option>

                <option value="">Due Date</option>
                <option value="">Status</option>

                </select>
                <label for="keyword"></label>
                <input type="text" class="form-control" name="keyword" placeholder="Enter Keyword" id="keyword">
                <span>&nbsp;</span>
                <button class="btn btn-info" type="search">Search</button>
                <button class="btn btn-info" type="search">clear</button>            </form></div>
        </div>
    </div>
 </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   <div class="container py-4">
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Due Date</th>
            <th>Status</th>
            <th width="280px">Details</th>
        </tr>
        @foreach ($tasks as $task)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $task->title }}</td>
            <td>{{ $task->duedate }}</td>
            <!-- <td><a href="task/ {{$task->id}}" class="btn btn-sm btn-{{ $task->status ? 'success' : 'danger'}}">{{ $task->status ? 'Enable' : 'Disable'}}</a></td> -->
          <td>  @if ($task->status === 'pending')
            <form action="{{ route('tasks.markAsCompleted', $task) }}" method="POST">
                @method('PUT')
                @csrf
                <button class="btn btn-danger" type="submit"> Pending</button>
            </form>
        @else
            <form action="{{ route('tasks.markAsPending', $task) }}" method="POST">
                @method('PUT')
                @csrf
                <button class="btn btn-success" type="submit"> Completed</button>
            </form>
        @endif</td>
            
            <td>
                
                <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('tasks.show',$task->id) }}">View More</a>
    
   
                    @csrf
      
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
