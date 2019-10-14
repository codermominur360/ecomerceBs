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
                                <th>Name</th>
                                <th>Label</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($category as $categories)
                                <tr>
                                    <td>{{$categories->category_id}}</td>
                                    <td>{{$categories->category_name}}</td>
                                    <td>{{$categories->category_description}}</td>
                                    <td>{{$categories->status}}</td>
                                    <td>
                                        @if($categories->status  = 'active')
                                            <a href="deactiveAction/{{$categories->category_id}}" class="btn btn-dark btn-sm">Action</a>
                                            @else
                                            <a href="/active/{{$categories->category_id}}" class="btn btn-warning btn-sm">Action</a>
                                        @endif
                                        <a href="/category/{{$categories->category_id}}" class="btn btn-info btn-sm">Details</a>
                                        <a href="/category/{{$categories->category_id}}/edit" class="btn btn-success btn-sm">Edit</a>

{{--                                        {!!Form::open(['action' => ['CategoryCtrl@destroy', $categories->id], 'method' => 'POST','class' => 'pull-right'])!!}--}}
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

