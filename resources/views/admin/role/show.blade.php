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
                <a href="{{'role'}}">Roles</a>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">

                    <a href="{{ route('role.create') }}" class="col-lg-offset-5 btn btn-success">Create new Role</a>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Role Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $role)

                                    <tr>
                                        <td>{{ $loop->index +1 }}</td>
                                        <td>{{ $role->name }}</td>

                                        <td><a href="{{ route('role.edit',$role->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                                        <td>
                                            <form id="delete-form-{{ $role->id }}" method="post" action="{{ route('role.destroy',$role->id) }}" style="display: none">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                            </form>
                                            <a href="" onclick="
                                                    if(confirm('Delete?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $role->id }}').submit();
                                                    }else{
                                                    event.preventDefault();
                                                    }">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Role Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    Footer
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
        </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

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