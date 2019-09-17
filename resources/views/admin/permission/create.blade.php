@extends('admin.layouts.app')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Create Permission
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">

                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Permission</h3>
                        </div>

                    @include('includes.messages')

                        <!-- form start -->
                        <form role="form" action="{{ route('permission.store') }}" method="post">
                            {{ csrf_field() }}

                            <div class="box-body">
                                <div class="col-lg-offset-4 col-lg-4">

                                    <div class="form-group">
                                        <label for="name">Permission name</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Permission name">
                                    </div>

                                    <div class="form-group">
                                        <label for="for_permission">Permission for</label>
                                        <select name="for_permission" id="for_permission" class="form-control">

                                            <option selected disabled>Permission for</option>

                                                <option>Post</option>
                                                <option>User</option>
                                                <option>Category</option>
                                                <option>Tag</option>
                                                <option>Permission</option>
                                                <option>Roles</option>

                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>

                                        <a href="{{ route('permission.index') }}" class="btn btn-default">Go back</a>
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