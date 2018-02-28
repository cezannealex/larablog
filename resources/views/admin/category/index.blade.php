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
                @if(isset($category))
                    <form action="{{route('admin.category.update', ['id'=> $category->id])}}" method="post" >

                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="name">Category Name</label>
                        <input type="text" name="name" class="form-control" value="{{$category->name}}">
                        </div>

                        <div class="form-group">
                            <div class="pull-right">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </div>

                    </form>
                @else
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
                @endif

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
                    <td><a href="{{route('admin.category.show', ['id'=>$category->id] )}}">{{$category->name}}</a></td>
                        <td><a  class="btn btn-primary btn-xs" href="{{route('admin.category.edit', ["id" => $category->id])}}">Edit</a></td>
                    <td><a href="{{route('admin.category.delete', ["id" => $category->id])}}" class="btn btn-danger btn-xs">Delete</a></td>
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

