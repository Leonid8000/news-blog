@extends('admin.layouts.app')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit User
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">

                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">User</h3>
                        </div>

                    @include('includes.messages')

                    <!-- form start -->
                        <form role="form" action="{{ route('user.store') }}" method="post">
                            {{ csrf_field() }}

                            <div class="box-body">
                                <div class="col-lg-offset-4 col-lg-4">

                                    <div class="form-group">
                                        <label for="name">User Name</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="User name" value="{{ old('name') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">User Email</label>
                                        <input type="text" name="email" class="form-control" id="email" placeholder="User email" value="{{ old('email') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">User Phone</label>
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="User phone" value="{{ old('phone') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="password" value="{{ old('password') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm password</label>
                                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm_password">
                                    </div>

                                    <div class="form-group">
                                        <label for="status">Status</label>
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="status"

                                                @if(old('status') == 1)
                                                    checked
                                                @endif value="1"></label>
                                    </div>
                                    </div>

                                    <div class="form-group col-lg-12">
                                            <label>Assign Role:</label>
                                           @foreach($roles as $role)
                                            <div class="checkbox">
                                                <div class="col-lg-3">
                                                    <label><input type="checkbox" name="role[]" value="{{ $role->id }}">{{ $role->name }}</label>
                                                </div>
                                            </div>
                                            @endforeach

                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>

                                        <a href="{{ route('user.index') }}" class="btn btn-default">Go back</a>
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