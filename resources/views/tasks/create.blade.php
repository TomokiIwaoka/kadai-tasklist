@extends('layouts.app')
@section('content')

    <h1>タスク新規登録ページ</h1>
    
    {!! Form::model($task,['route'=>'tasks.store']) !!}
        
        <div class="form-group">
            {!! Form::label('status','ステータス：') !!}
            {!! Form::text('status', null, ['class'=>'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('content','タスク内容：') !!}
            {!! Form::text('content', null, ['class'=>'form-control']) !!}
        </div>
        {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}
    
    {!! Form::close() !!}
    
    @include('commons.error_messages')
    
@endsection