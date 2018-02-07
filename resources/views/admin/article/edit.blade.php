@extends('admin.layouts.app') @section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Update New Article</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <form action="{{ route('admin.article.update', ['id' => $article->id]) }}" method="post" enctype="multipart/form-data">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" value="{{$article->title}}">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <div class="row">
                            <div class="col-md-5 text-center">
                                <img src="/uploads/articles/{{$article->image}}" style="width: 200px">
                            </div>
                            <div class="col-md-7">
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category">Select a Category</label>
                        <input type="number" name="category_id" id="category" class="form-control" value="{{$article->category_id}}">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" id="content" cols="5" rows="5" class="form-control">
                            {{$article->content}}
                        </textarea>
                    </div>
                    <div class="form-group">
                        <div class="pull-right">
                            <button class="btn btn-success" type="submit">Update</button>
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
</div>

@endsection