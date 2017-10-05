@extends('layouts.app')
@section('content')
    
    <h1>タスク一覧</h1>
    
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
    
    {!! Form::model (	
        $task,	
        ['route'=>['tasks.create'], 	
        'method' => 'get']) 	
    !!}	
    {!! Form::submit('create', ['class'=>'btn btn-primary']) !!}	
    {!! Form::close() !!}	


@endsection