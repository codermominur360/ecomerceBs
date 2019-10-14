@extends('admin.layout.app')
@section('body')

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                 <div class="box-body">
                    {!! Form::open(['action' => ['BrandController@update',$brand->brand_id],'method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
                    <div class="form-group">
                        {{Form::label('brand_name', 'Category Name')}}
                        {{Form::text('brand_name',$brand->brand_name, ['class' => 'form-control', 'placeholder' => 'Category name'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('brand_description', 'Category Description')}}
                        {{Form::textarea('brand_description', $brand->brand_description, ['class' => 'form-control', 'placeholder' => 'Category Description'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('status', 'Status')}}
                        {{Form::select('status',
                        [
                        'active'=>'Active',
                        'deactive'=>'De-Active',
                       ],
                         $brand->status,
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

