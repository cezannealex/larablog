@extends('admin.layouts.app') @section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <!-- Main content -->
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
            <th>Feature Image</th>
            <th>Title</th>
            <th>Category</th>
            <th>Edit</th>
            <th>Delete</th>
          </thead>
          <tbody>

            @foreach( $articles as $article )
              <tr>
                <td><img src="/uploads/articles/{{$article->image}}" style="width: 200px"></td>
                <td><a href="{{ route('admin.article.show', ['id' => $article->id]) }}">{{$article->title}}</a></td>
                <td>{{$article->category_id}}</td>
                <td><a href="{{ route('admin.article.edit', ['id' => $article->id]) }}" class="btn btn-xs btn-primary">Edit</a></td>
                <td><a href="{{ route('admin.article.delete', ['id' => $article->id]) }}" class="btn btn-xs btn-danger">Delete</a></td>
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
  <!-- /.content -->
</div>

@endsection