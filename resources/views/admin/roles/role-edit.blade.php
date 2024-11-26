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
                            <li class="breadcrumb-item active">Edit Role</li>
                        </ul>
                    </div>
                </div>
            </div>
            @include('components.messages')
            <!-- /Page Header -->
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('roles.update', $role->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label>Role Name</label>
                                        <input class="form-control" type="text" name="name" value="{{ $role->name }}">
                                        <p class="text-danger">{{ $errors->first('name') }}</p>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label>Permissions</label>
                                        <select class="select" multiple name="permissions[]">
                                            @foreach ($permissions as $permission)
                                                <option value="{{ $permission->id }}"
                                                    {{ in_array($permission->id, $role_permissions) ? 'selected' : '' }}>
                                                    {{ $permission->name }}</option>
                                            @endforeach
                                        </select>
                                    </div> --}}
                                    <div class="submit-section">
                                        <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>                                        
            </div>
        </div>
        <!-- /Page Content -->
    </div>
    <!-- /Page Wrapper -->
@endsection