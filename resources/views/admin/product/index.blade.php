@extends('admin.layout.app')
@section('body')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-10">
                <div class="box-body">
                    <div class="box-header">
                        <h3 class="box-title">Category List</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Category Name</th>
                                <th>Brand Name</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product qyt</th>
                                 <th>Product Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i=1
                            ?>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$product->category_name}}</td>
                                    <td>{{$product->brand_name}}</td>
                                    <td>{{$product->product_name}}</td>
                                    <td>{{$product->product_price}}</td>
                                    <td>{{$product->product_qty}}</td>
                                     <td><img src="{{$product->product_image}}" alt="Product images" height="100px" width="100px"></td>
                                    <td>{{$product->status}}</td>
                                    <td>
                                        <a href="/product/{{$product->category_id}}" class="btn btn-info btn-sm">Details</a>
                                        <a href="/product/{{$product->product_id}}/edit" class="btn btn-success btn-sm">Edit</a>

{{--                                        {!!Form::open(['action' => ['CategoryCtrl@destroy', $product->id], 'method' => 'POST','class' => 'pull-right'])!!}--}}
{{--                                        {{Form::hidden('_method', 'delete')}}--}}
{{--                                        {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}--}}
{{--                                        {!!Form::close()!!}--}}

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>SL No</th>
                                <th>Category Name</th>
                                <th>Brand Name</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product qyt</th>
                                <th>Short Description</th>
                                <th>Long Description</th>
                                <th>Product Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>

            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

