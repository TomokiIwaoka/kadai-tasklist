@extends('layouts.app')
@section('content')
    <h1>id : {{$task->id}}のタスク詳細</h1>
    
    <table class="table  table-bordered table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>{{$task->id}}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ステータス：</td>
                <td>{{ $task->status }}</td>
            </tr>
                <td>タスク内容：</td>
                <td>{{ $task->content }}</td>
            </tr>
            
        </tbody>
    </table>
    
    <ul class="list-inline">
        <li>
            {!! Form::model (
                $task,
                ['route'=>['tasks.edit',$task->id], 
                'method' => 'get']) 
            !!}
            {!! Form::submit('編集', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </li>
        
        <li>
            {!! Form::model (
                $task,
                ['route'=>['tasks.destroy',$task->id], 
                'method' => 'delete']) 
            !!}
            {!! Form::submit('削除', ['class'=>'btn btn-warning']) !!}
            {!! Form::close() !!}
        </li>
    </ul>

@endsection