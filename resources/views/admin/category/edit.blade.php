@extends('admin.layout.app')
@section('body')

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="box-body">
                    {!! Form::open(['action' => ['CategoryController@update',$categories->category_id],'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
                    <div class="form-group">
                        {{Form::label('category_name', 'Category Name')}}
                        {{Form::text('category_name',$categories->category_name, ['class' => 'form-control', 'placeholder' => 'Category name'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('category_description', 'Category Description')}}
                        {{Form::textarea('category_description', $categories->category_description, ['class' => 'form-control', 'placeholder' => 'Category Description'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('status', 'Status')}}
                        {{Form::select('status',
                        [
                        'active'=>'Active',
                        'deactive'=>'De-Active',
                       ],
                         $categories->status,
                         ['class' => 'form-control', 'placeholder' => 'Select Status'])}}
                    </div>
                    <div class="form-group">
                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection

