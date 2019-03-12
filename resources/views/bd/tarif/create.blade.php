@extends('layouts.admin')

@section('content')
    <h1>Create Tariffs</h1>
    @if(session('message'))
        <div class="alert alert-info">
            {{ session('message') }}
        </div>
    @endif

    {!! Form::open(['method' => 'POST','action'=>'TarifController@store','files'=>true]) !!}
    {{csrf_field()}}
    <div class="form-group">

        {!! Form::label('class', 'Class:') !!}
        {!! Form::text('class', null , ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('sub_text', 'Sub Text:') !!}
        {!! Form::textarea('sub_text', null , ['class' => 'form-control','rows'=>5]) !!}

    </div>

    <div class="form-group">

        {!! Form::label('image', 'Image:') !!}
        {!! Form::file('image', null , ['class' => 'form-control']) !!}

    </div>
    <div class="form-group">

        {!! Form::label('distance', 'Distance:') !!}
        {!! Form::text('distance', null , ['class' => 'form-control']) !!}

    </div>



    <div class="form-group">

        {!! Form::submit('Create Tariffs', ['class' => 'btn btn-primary']) !!}

    </div>

    {!! Form::close() !!}

@stop