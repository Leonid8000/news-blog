@extends('admin.layouts.app')

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Edit Role
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">

                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Role</h3>
                        </div>

                    @include('includes.messages')

                    <!-- form start -->
                        <form role="form" action="{{ route('role.update', $role->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            <div class="box-body">
                                <div class="col-lg-offset-4 col-lg-4">

                                    <div class="form-group">
                                        <label for="name">Role</label>
                                        <input type="text" name="name" class="form-control" id="name" value="{{ $role->name }}">
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="name">Post Permissions</label>
                                        @foreach($permissions as $permission)

                                            @if($permission->for_permission == 'Post')
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="permission[]"

                                                      @foreach($role->permissions as $role_permission)
                                                              @if($role_permission->id == $permission->id)
                                                                checked
                                                              @endif
                                                      @endforeach

                                                    value="{{$permission->id}}">{{ $permission->name }}</label>
                                                </div>
                                            @endif

                                        @endforeach
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="name">User Permissions</label>

                                        @foreach($permissions as $permission)

                                            @if($permission->for_permission == 'User')
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="permission[]"

                                                    @foreach($role->permissions as $role_permission)
                                                       @if($role_permission->id == $permission->id)
                                                             checked
                                                        @endif
                                                    @endforeach

                                                     value="{{$permission->id}}">{{ $permission->name }}</label>
                                                </div>
                                            @endif

                                        @endforeach

                                    </div>

                                    <div class="col-lg-4">
                                        <label for="name">Others Permissions</label>

                                        @foreach($permissions as $permission)

                                            @if($permission->for_permission == 'Tag')
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="permission[]"

                                                     @foreach($role->permissions as $role_permission)
                                                           @if($role_permission->id == $permission->id)
                                                                  checked
                                                           @endif
                                                     @endforeach

                                                     value="{{$permission->id}}">{{ $permission->name }}</label>
                                                </div>
                                            @endif

                                        @endforeach

                                        @foreach($permissions as $permission)

                                            @if($permission->for_permission == 'Category')
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="permission[]"

                                                    @foreach($role->permissions as $role_permission)
                                                    @if($role_permission->id == $permission->id)
                                                        checked
                                                    @endif
                                                    @endforeach

                                                    value="{{$permission->id}}">{{ $permission->name }}</label>
                                                </div>
                                            @endif

                                        @endforeach

                                        @foreach($permissions as $permission)

                                            @if($permission->for_permission == 'Permission')
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="permission[]"

                                                    @foreach($role->permissions as $role_permission)
                                                    @if($role_permission->id == $permission->id)
                                                          checked
                                                    @endif
                                                    @endforeach

                                                    value="{{$permission->id}}">{{ $permission->name }}</label>
                                                </div>
                                            @endif

                                        @endforeach

                                        @foreach($permissions as $permission)

                                            @if($permission->for_permission == 'Roles')
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="permission[]" value="{{$permission->id}}">{{ $permission->name }}</label>
                                                </div>
                                            @endif

                                        @endforeach

                                    </div>


                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>

                                        <a href="{{ route('role.index') }}" class="btn btn-default">Go back</a>
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