@extends('admin.components.app')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Page Content -->
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Roles</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Roles</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_role"><i
                                class="fa fa-plus"></i> Add Role</a>
                    </div>
                </div>
            </div>
            @include('components.messages')
            <!-- /Page Header -->
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <table class="table table-striped custom-table mb-0 datatable">
                            <thead>
                                <tr>
                                    <th style="width: 30px;">#</th>
                                    <th>Role Name</th>
                                    <th class="text-right">Permissions</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($roles->count() > 0)
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td class="text-right"
                                                style="display: flex; justify-content: flex-end; align-items: center;">
                                                <a href="{{ route('permissions.show', $role->id) }}"
                                                    class="btn btn-primary btn-sm">Permissions</a>

                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="{{route('roles.edit', $role->id)}}"><i
                                                                class="fa fa-pencil m-r-5"></i>
                                                            Edit</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="3" class="text-center">No role found</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Add Role Modal -->
        <div id="add_role" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Role</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('roles.store') }}" name="rolesform" class="rolesform"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Role Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" value="{{ old('name') }}" name="name"
                                    id="name">
                                <p class="text-danger"></p>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Role Modal -->
    </div>
    <!-- /Page Wrapper -->
@endsection

@section('CustomJS')
    <script type="text/javascript">
        $(document).ready(function() {
            $(".rolesform").submit(function(e) {
                e.preventDefault();
                var form = $(this);
                $.ajax({
                    url: form.attr('action'),
                    method: 'POST',
                    dataType: 'json',
                    data: $(this).serialize(),
                    success: function(response) {
                        // Clear previous error messages
                        $('.text-danger').html('');
                        window.location.reload();
                    },
                    error: function(xhr) {
                        var errors = xhr.responseJSON.errors;
                        // Display error messages
                        $.each(errors, function(key, value) {
                            $('#' + key).next('.text-danger').text(value[0]);
                        });
                    }
                });
            });
        });
    </script>
@endsection
