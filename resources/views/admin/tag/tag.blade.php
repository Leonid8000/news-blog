@extends('admin.layouts.app')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Create Tag
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">

                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Tag</h3>
                        </div>

                    @include('includes.messages')

                        <!-- form start -->
                        <form role="form" action="{{ route('tag.store') }}" method="post">
                            {{ csrf_field() }}

                            <div class="box-body">
                                <div class="col-lg-offset-4 col-lg-4">

                                    <div class="form-group">
                                        <label for="name">Tag Title</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="tag title">
                                    </div>


                                    <div class="form-group">
                                        <label for="slug">Tag slug</label>
                                        <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>

                                        <a href="{{ route('tag.index') }}" class="btn btn-default">Go back</a>
                                    </div>
                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </section>

    </div>

@endsection