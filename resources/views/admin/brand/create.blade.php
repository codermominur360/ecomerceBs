@extends('admin.layout.app')
@section('body')

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="box-body">
                {!! Form::open(['url' => 'brand','method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
                <div class="form-group">
                    {{Form::label('brand_name', 'brand Name')}}
                    {{Form::text('brand_name', '', ['class' => 'form-control', 'placeholder' => 'brand name'])}}
                </div>
                 <div class="form-group">
                    {{Form::label('brand_description', 'brand Description')}}
                    {{Form::textarea('brand_description', '', ['class' => 'form-control', 'placeholder' => 'brand Description'])}}
                </div>
                 <div class="form-group">
                     {{Form::label('status', 'Status')}}
                     {{Form::select('status',
                     [
                     'active'=>'Active',
                     'deactive'=>'De-Active',
                    ],
                      null,
                      ['class' => 'form-control', 'placeholder' => 'Select Status'])}}
                </div>
                 <div class="form-group">
                     {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                 </div>
                {{ Form::close() }}
            </div>
        </div>
        <div class="col-lg-4 text-right" >
            <div class="box-body">
                <div class="card-header">
                    <h1>brand</h1>
                </div>
                <div class="card-body">
                    <li>brand Name</li>
                    <li>brand Description</li>
                    <li>brand Status</li>
                </div>
                <div class="card-footer">
                    <p> this is a brand create </p>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
