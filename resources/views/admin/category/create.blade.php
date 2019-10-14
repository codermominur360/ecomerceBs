@extends('admin.layout.app')
@section('body')

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="box-body">
                {!! Form::open(['url' => 'category','method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
                <div class="form-group">
                    {{Form::label('category_name', 'Category Name')}}
                    {{Form::text('category_name', '', ['class' => 'form-control', 'placeholder' => 'Category name'])}}
                </div>
                 <div class="form-group">
                    {{Form::label('category_description', 'Category Description')}}
                    {{Form::textarea('category_description', '', ['class' => 'form-control', 'placeholder' => 'Category Description'])}}
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
                    <h1>Category</h1>
                </div>
                <div class="card-body">
                    <li>Category Name</li>
                    <li>Category Description</li>
                    <li>Category Status</li>
                </div>
                <div class="card-footer">
                    <p> this is a category create </p>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
