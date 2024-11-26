@extends('admin.components.app')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-md-6 offset-md-3">

                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="page-title">Change Password</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    @include('admin.components.messages')

                    <form action="{{ route('change.password') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Old password</label>
                            <input type="password" class="form-control" name="old_password" id="old_password">
                            <p class="text-danger">{{ $errors->first('old_password') }}</p>
                        </div>
                        <div class="form-group">
                            <label>New password</label>
                            <input type="password" class="form-control" name="new_password" id="new_password">
                            <p class="text-danger">{{ $errors->first('new_password') }}</p>
                        </div>
                        <div class="form-group">
                            <label>Confirm password</label>
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password">
                            <p class="text-danger">{{ $errors->first('confirm_password') }}</p>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Update Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

    </div>
    <!-- /Page Wrapper -->
@endsection
