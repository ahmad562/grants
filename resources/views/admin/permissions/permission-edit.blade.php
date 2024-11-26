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
                            <li class="breadcrumb-item active">Edit Permission</li>
                        </ul>
                    </div>
                </div>
            </div>
            @include('components.messages')
            <!-- /Page Header -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('permissions.update', $permission->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Module</label>
                                            <select class="select" name="module_id">
                                                @foreach ($modules as $module)
                                                    <option value="{{ $module->id }}"
                                                        @if ($module->id == $permission->module_id) selected @endif>
                                                        {{ $module->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Permission Name</label>
                                            <input class="form-control" type="text" name="name"
                                                value="{{ $permission->name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary submit-btn">Save</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
    </div>
    <!-- /Page Wrapper -->
@endsection
