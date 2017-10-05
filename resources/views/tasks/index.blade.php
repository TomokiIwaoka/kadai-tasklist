@extends('layouts.app')
@section('content')
    <h1>タスク一覧</h1>
    
    @if(count($tasks)>0)
    <ul>
        @foreach($tasks as $task)
             <li>{!! link_to_route(
                 'tasks.show', 
                 $task->id, 
                 ['id' => $task->id]) 
                 !!} :
                【{{ $task->status }}】 
                {{ $task->content }}
             </li>
        @endforeach
    </ul>
    @endif
    
    {!! Form::model (	
        $task,	
        ['route'=>['tasks.create'], 	
        'method' => 'get']) 	
    !!}	
    {!! Form::submit('新規作成') !!}	
    {!! Form::close() !!}	


@endsection