@extends('admin.layouts.app')

@section('headSection')
    <link rel="stylesheet" href="{{ asset('admin/bower_components/select2/dist/css/select2.min.css') }}">
@endsection()

    @section('main-content')

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Create Post
                </h1>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">

                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Post</h3>
                            </div>

                        @include('includes.messages')

                            {{-- Form start --}}
                            <form role="form" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="box-body">
                                    <div class="col-lg-6">

                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
                                        </div>

                                        <div class="form-group">
                                            <label for="subtitle">Post subtitle</label>
                                            <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Enter subtitle">
                                        </div>

                                        <div class="form-group">
                                            <label for="slug">Post slug</label>
                                            <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug">
                                        </div>

                                    </div>

                                    <div class="col-lg-6">

                                        <div class="form-group">
                                            <label for="image">File input</label>
                                            <input type="file" id="image" name="image">

                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="status" value="1"> Publish
                                            </label>
                                        </div>

                                        {{-- Select Tags --}}
                                        <div class="form-group">
                                            <label>Select Tags</label>
                                            <select class="form-control select2 select2-hidden-accessible" name="tags[]" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true">

                                                @foreach($tags as $tag)
                                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        {{-- / Select Tags --}}

                                        {{-- Select Category --}}
                                        <div class="form-group">
                                            <label>Select Category</label>
                                            <select class="form-control select2 select2-hidden-accessible" name="categories[]" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true">

                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        {{-- / Select Category --}}

                                    </div>

                                </div>
                                <!-- /.box-body -->

                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Write post body here
                                            <small>Simple and fast</small>
                                        </h3>
                                        <!-- tools box -->
                                        <div class="pull-right box-tools">
                                            <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                    title="Collapse">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <!-- /. tools -->
                                    </div>

                                    <div class="box-body pad">
                                        <textarea  name="body" id="editor1"
                                                style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                        </textarea>
                                    </div>

                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>

                                    <a href="{{ route('post.index') }}" class="btn btn-default">Go back</a>
                                </div>

                            </form>
                        {{-- /form--}}
                        </div>

                    </div>
                    <!-- /.col-->
                </div>
                <!-- ./row -->
            </section>
            <!-- /.content -->
        </div>

    @endsection

@section('footerSection')

    <!-- CK Editor -->
    <script src="{{ asset('admin/bower_components/ckeditor/ckeditor.js') }}"></script>
    {{--<script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>--}}
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>

    <script src="{{ asset('admin/bower_components/select2/dist/js/select2.full.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('.select2').select2();
        });
    </script>

@endsection