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
                        <h3 class="page-title">Permissions</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Permissions</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_permission"><i
                                class="fa fa-plus"></i> Add Permission</a>
                    </div>
                </div>
            </div>
            @include('admin.components.messages')
            <!-- /Page Header -->

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table mb-0">
                            <thead>
                                <tr>
                                    <th style="width: 30px;">#</th>
                                    <th>Module</th>
                                    <th>Permission Name</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $permission)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        @foreach ($modules as $module)
                                            @if ($module->id == $permission->module_id)
                                                <td>{{ $module->name }}</td>
                                            @endif
                                        @endforeach
                                        <td>{{ $permission->name }}</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{ route('permissions.edit', $permission->id) }}"><i
                                                            class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <form method="post" action="{{ route('permissions.destroy', $permission->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item"><i
                                                                class="fa fa-trash-o m-r-5"></i> Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!--Add Permission Modal -->
        <div id="add_permission" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Permission</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <form method="post" action="{{ route('permissions.store') }}" class="permissionsform" name="permissionsform">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Permission Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="name" id="name">
                                <p class="text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label>Permission For <span class="text-danger">*</span></label>
                                <select class="select" name="module_id" id="module_id">
                                    <option value="">Select Module</option>
                                    @foreach ($modules as $module)
                                        <option value="{{ $module->id }}">{{ $module->name }}</option>
                                    @endforeach
                                    <p class="text-danger"></p>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection
@section('CustomJS')
    <script type="text/javascript">
        $(document).ready(function() {
            $(".permissionsform").submit(function(e) {
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