@extends('layout.app')

@section('title')
    My Tasks manager    
@endsection

@section('form-content')
    <div class="card text-left">
      {{--  Display Validation Errors  --}}
      <div class="card-body">
       

        <form action="/tasks" method="post">
            @csrf

            <div class="form-group">
                <label for="task">Task</label>
                <input id="task" class="form-control" type="text" name="name">
            </div>

            <div class="form-group">
                <button class="btn btn-success btn-sm">
                   <i class="fa fa-plus"></i> Add Task</button>
            </div>
        </form>
      </div>
    </div>
@endsection

@section('show-content')
    {{--  Current tasks  --}}
    @if(count($tasks)>0)
        <div class="card">
            <div class="card-header">
                Current Tasks
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Task</th>
                            <th>&nbsp;</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    
                                    <td>
                                        {{ $task->name }}
                                    </td>
                                    <td>
                                       <form action="/tasks/{{ $task->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger float-right">
                                                    Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                </table>
            </div>
        </div>
    @else
        <h2>No Task Yet now....</h2>
    @endif
@endsection


