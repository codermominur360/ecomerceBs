@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {!! Form::open(['url' => 'contact/submit']) !!}
            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', 'Enter your name')}}
            </div>
            <div class="form-group">
                {{Form::label('email', 'E-Mail Address')}}
                {{Form::text('email', 'example yourgmail@gmail.com')}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
