@extends('admin.layouts.app')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Create Category</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <form action="{{route('admin.category.store')}}" method="post" >

                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <div class="pull-right">
                            <button class="btn btn-success" type="submit">Create</button>
                        </div>
                    </div>

                </form>
            </div>
            <!-- /.box-body -->

            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->

    {{--  show all category  --}}

    <section class="content">

        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">List All Articles</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="box-body">
            <table class="table table-hover">
              <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>

              </thead>
              <tbody>

                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td><a href="#" class="btn btn-primary btn-xs">Edit</a></td>
                        <td><a href="#" class="btn btn-danger btn-xs">Delete</a></td>
                    </tr>

                @endforeach

              </tbody>
            </table>
          </div>
          <!-- /.box-body -->

          <!-- /.box-footer-->
        </div>
        <!-- /.box -->

      </section>

</div>


@endsection