@extends('layouts.app')
@section('content')
    <h1>id : {{$task->id}}のタスク詳細</h1>
    <p>ステータス：{{ $task->status }}</p> 
    <p>タスク内容：{{ $task->content }}</p>
    
    <!--{!! link_to_route('tasks.edit', 'タスク編集' ,['id'=>$task->id]) !!}-->

    {!! Form::model (
        $task,
        ['route'=>['tasks.edit',$task->id], 
        'method' => 'get']) 
    !!}
    {!! Form::submit('編集する') !!}
    {!! Form::close() !!}
    
    {!! Form::model (
        $task,
        ['route'=>['tasks.destroy',$task->id], 
        'method' => 'delete']) 
    !!}
    {!! Form::submit('削除する') !!}
    {!! Form::close() !!}


@endsection