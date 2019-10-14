@extends('admin.layout.app')
@section('body')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-10">
                <h2 class="btn btn-primary">{{Session::get('message')}}</h2>
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
                                <th>Name</th>
                                <th>Label</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($brands as $brand)
                                <tr>
                                    <td>{{$brand->brand_id}}</td>
                                    <td>{{$brand->brand_name}}</td>
                                    <td>{{$brand->brand_description}}</td>
                                    <td>{{$brand->status}}</td>
                                    <td>
                                        @if($brand->status == 'active')
                                        <a href="deactiveAction/{{$brand->brand_id}}" class="btn btn-dark btn-sm">Action</a>
                                        @else
                                            <a href="activeAction/{{$brand->brand_id}}" class="btn btn-warning btn-sm">Action</a>
                                        @endif
                                        <a href="/destroy/{{$brand->brand_id}}" class="btn btn-danger btn-sm">Delete</a>
                                        <a href="/brand/{{$brand->brand_id}}/edit" class="btn btn-success btn-sm">Edit</a>

{{--                                        {!!Form::open(['action' => ['CategoryCtrl@destroy', $brand->id], 'method' => 'POST','class' => 'pull-right'])!!}--}}
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
                                <th>Name</th>
                                <th>Label</th>
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

