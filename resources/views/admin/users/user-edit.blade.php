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
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Profile Detail</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- <h4 class="card-title text-center">Edit User</h4> --}}
                            <form action="{{ route('users.update', $user->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" name="first_name"
                                                value="{{ $user->first_name }}">
                                                <p class="text-danger">{{$errors->first('first_name')}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" name="last_name"
                                                value="{{ $user->last_name }}">
                                                <p class="text-danger">{{$errors->first('last_name')}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                                            <p class="text-danger">{{$errors->first('email')}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" name="username"
                                                value="{{ $user->username }}">
                                                <p class="text-danger">{{$errors->first('username')}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select class="form-control" name="role" id="role">
                                                <option value="">Select Role</option>
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->name }}"
                                                        {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                                                        {{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                            <p class="text-danger">{{$errors->first('role')}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" name="phone_number"
                                                value="{{ $user->phone_number }}">
                                                <p class="text-danger">{{$errors->first('phone_number')}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Address 1</label>
                                            <input type="text" class="form-control" name="address1"
                                                value="{{ $user->address1 }}">
                                                <p class="text-danger">{{$errors->first('address1')}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Address 2</label>
                                            <input type="text" class="form-control" name="address2"
                                                value="{{ $user->address2 }}">
                                                <p class="text-danger">{{$errors->first('address2')}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control" name="city" value="{{ $user->city }}">
                                            <p class="text-danger">{{$errors->first('city')}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>State</label>
                                            <input type="text" class="form-control" name="state" value="{{ $user->state }}">
                                            <p class="text-danger">{{$errors->first('state')}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Zip Code</label>
                                            <input type="text" class="form-control" name="zip_code"
                                                value="{{ $user->zip_code }}">
                                                <p class="text-danger">{{$errors->first('zip_code')}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-custom">Update Profile</button>
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
