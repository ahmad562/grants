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
                            <li class="breadcrumb-item active">Permissions</li>
                        </ul>
                    </div>
                </div>
            </div>
            @include('components.messages')

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <form method="post" action="{{ route('updatePermissions', $role_id) }}">
                            @csrf
                            @method('PUT')
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th>Module Permission</th>
                                        <th class="text-center">View</th>
                                        <th class="text-center">Add</th>
                                        <th class="text-center">Edit</th>
                                        <th class="text-center">Delete</th>
                                        <th class="text-center">Export</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($modules as $module)
                                        <tr>
                                            <td>{{ $module->name }}</td>
                                            @foreach ($module->permission as $permission)
                                                <td class="text-center">
                                                    <input type="checkbox" name="permissions[]"
                                                        value="{{ $permission->name }}"
                                                        {{ in_array($permission->id, $role_permissions) ? 'checked' : '' }}>
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
    </div>
    <!-- /Page Wrapper -->
@endsection