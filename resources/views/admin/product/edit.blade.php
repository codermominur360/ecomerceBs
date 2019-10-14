@extends('admin.layout.app')
@section('body')

    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="box-body">
                    {!! Form::open(['url' => 'product','method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
                    <div class="form-group">
                        {{Form::label('category_id', 'Category Name')}}
                        {{Form::select('category_id',$select,  $product->category_id, ['class' => 'form-control', 'placeholder' => 'Category Name   '])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('brand_id', 'Brand Name')}}
                        {{Form::select('brand_id', $brand_value,  $product->brand_id, ['class' => 'form-control', 'placeholder' => 'Brand name','required'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('product_name', 'Product Name')}}
                        {{Form::text('product_name', $product->product_name, ['class' => 'form-control', 'placeholder' => 'Product name'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('product_price', 'Product price')}}
                        {{Form::number('product_price', $product->product_name, ['class' => 'form-control', 'placeholder' => 'product_price  '])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('product_qty', 'Product qty')}}
                        {{Form::number('product_qty', $product->product_qty, ['class' => 'form-control', 'placeholder' => 'Product qty'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('product_short_description', 'Product short description')}}
                        {{Form::text('product_short_description', $product->product_short_description, ['class' => 'form-control', 'placeholder' => 'Product short description'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('product_long_description', 'Product Long description')}}
                        {{Form::textarea('product_long_description', $product->product_long_description, ['class' => 'form-control', 'id'=>'editor', 'placeholder' => 'Product Long description'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('product_image', 'Product Image')}}
                        {{Form::file('product_image',['class' => 'form-control', 'placeholder' => 'Product Image'])}}
                        <img src="{{asset($product->product_image)}}" alt="" height="100px" width="100px" >
                    </div>
                    <div class="form-group">
                        {{Form::label('status', 'Status')}}
                        {{Form::select('status',
                        [
                        'active'=>'Active',
                        'deactive'=>'De-Active',
                       ],
                         $product->status,
                         ['class' => 'form-control', 'placeholder' => 'Select Status'])}}
                    </div>
                    <div class="form-group">
                        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
