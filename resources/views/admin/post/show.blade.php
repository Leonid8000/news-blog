@extends('admin.layouts.app')

@section('headSection')

    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">

@endsection

@section('main-content')

    <!-- Content Wrapper. Contains page content -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <a href="{{route('post.index')}}">Posts</a>
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">

                    @can('posts.create', Auth::user())
                        <a href="{{ route('post.create') }}" class="col-lg-offset-5 btn btn-success">Create new Post</a>
                    @endcan



                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Post Ttile</th>
                            <th>Subtitle</th>
                            <th>Slug</th>
                            <th>Body</th>
                            <th>Created</th>
                            @can('posts.update', Auth::user())
                                <th>Edit</th>
                            @endcan
                            @can('posts.delete', Auth::user())
                                <th>Delete</th>
                            @endcan
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)

                            <tr>
                                <td>{{ $loop->index +1 }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->subtitle }}</td>
                                <td>{{ $post->slug }}</td>
                                <td>{{ $post->body }}</td>
                                <td>{{ $post->created_at }}</td>

                                @can('posts.update', Auth::user())
                                <td><a href="{{ route('post.edit',$post->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                                @endcan

                                @can('posts.delete', Auth::user())
                                <td>
                                    <form id="delete-form-{{ $post->id }}" method="post" action="{{ route('post.destroy',$post->id) }}" style="display: none">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    </form>
                                    <a href="" onclick="
                                    if(confirm('Delete?')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $post->id }}').submit();
                                    }else{
                                         event.preventDefault();
                                            }">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                                @endcan

                            </tr>

                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>S.No.</th>
                            <th>Post Ttile</th>
                            <th>Subtitle</th>
                            <th>Slug</th>
                            <th>Body</th>
                            <th>Created</th>
                            @can('posts.update', Auth::user())
                                <th>Edit</th>
                            @endcan
                            @can('posts.delete', Auth::user())
                                <th>Delete</th>
                            @endcan
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    Footer
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>

@endsection

@section('footerSection')

    <!-- DataTables -->
    <script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

    <script>
        $(function () {
            $('#example1').DataTable();
        })

    </script>
@endsection