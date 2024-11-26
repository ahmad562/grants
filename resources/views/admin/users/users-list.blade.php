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
                        <h3 class="page-title">Users</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_user"><i
                                class="fa fa-plus"></i> Add User</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            @include('admin.components.messages')

            <!-- Search Filter -->
            <form action="{{ route('users.index') }}" method="GET">
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating" name="name"
                                value="{{ request()->name }}">
                            <label class="focus-label">Name</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus select-focus">
                            <select class="select floating" name="role" value="{{ request()->role }}">
                                <option value="">Select Role</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}"
                                        {{ request()->role == $role->name ? 'selected' : '' }}>
                                        {{ $role->name }}</option>
                                @endforeach
                            </select>
                            <label class="focus-label">Role</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-3">
                        <button type="submit" class="btn btn-success btn-block"> Search </button>
                    </div>
                    <div class="col-sm-6 col-md-3 mb-3">
                        <a href="{{ route('users.index') }}" class="btn btn-danger btn-block"> Reset </a>
                    </div>
                </div>
            </form>
            <!-- /Search Filter -->

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                            <thead>
                                <tr>
                                    <th style="width: 30px;">#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Phone Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($users->count() > 0)
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->first_name }}</td>
                                            <td>{{ $user->last_name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>
                                                @foreach ($user->roles as $role)
                                                    <span class="badge bg-inverse-primary">{{ $role->name }}</span>
                                                @endforeach
                                            </td>
                                            <td>{{ $user->phone_number }}</td>
                                            <td>
                                                <a href="{{ route('users.edit', $user->id) }}"
                                                    class="btn btn-primary btn-sm">Edit</a>
                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                                    class="d-inline userform">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="7" class="text-center">No data found</td>
                                    </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Add User Modal -->
        <div id="add_user" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('users.store') }}" method="POST" class="userform">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>First Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="first_name" id="first_name">
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="last_name" id="last_name">
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input class="form-control" type="email" name="email" id="email">
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Username <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="username" id="username">
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Password <span class="text-danger">*</span></label>
                                        <input class="form-control" type="password" name="password" id="password">
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Role <span class="text-danger">*</span></label>
                                        <select class="form-control" name="role" id="role">
                                            <option value="">Select Role</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone Number <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="phone_number"
                                            id="phone_number">
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Address 1 <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="address1" id="address1">
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Address 2 <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="address2" id="address2">
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>City <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="city" id="city">
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>State <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="state" id="state">
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Zip Code <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="zip_code" id="zip_code">
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="submit-section">
                                        <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add User Modal -->

    </div>
    <!-- /Page Wrapper -->
@endsection
@section('CustomJS')
    <script type="text/javascript">
        $(document).ready(function() {
            $(".userform").submit(function(e) {
                e.preventDefault();
                var form = $(this);
                $.ajax({
                    url: form.attr('action'),
                    type: 'POST',
                    dataType: 'json',
                    data: $(this).serialize(),
                    success: function(response) {
                        // Clear previous error messages
                        $('.text-danger').html('');
                        window.location.reload();
                    },
                    error: function(xhr) {
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            $('#' + key).parent().find('.text-error').text(value);
                        });
                    }
                });
            });
        });
    </script>
@endsection
