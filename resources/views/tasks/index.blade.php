@extends('layouts.app')
@section('content')
    
    <h1>タスク一覧</h1>
    
    <div class = "row">
        <div class = "col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 col-xs-12">
            @if(count($tasks)>0)
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>status</th>
                    <th>task</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($tasks as $task)
                    <tr>
                      <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                      <td>{{ $task->status }}</td>
                      <td>{{ $task->content }}</td>
                    <tr>
                  @endforeach
                </tbody>
              </table>
            @endif

	
        </div>
    </div>


@endsection