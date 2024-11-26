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
                        <h3 class="page-title">Corporates</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Corporates</li>
                        </ul>
                    </div>
                    @can('Add Corporate')
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_corporate"><i
                                class="fa fa-plus"></i> Add Corporate</a>
                    </div>
                    @endcan
                </div>
            </div>
            <!-- /Page Header -->
            @include('admin.components.messages')

            <!-- Search Filter -->
            <form action="{{ route('corporate.index') }}" method="GET">
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-2">
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating" name="name"
                                value="{{ request()->name }}">
                            <label class="focus-label">Name</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating" name="email"
                                value="{{ request()->email }}">
                            <label class="focus-label">Email</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating" name="city"
                                value="{{ request()->city }}">
                            <label class="focus-label">City</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2 mb-2">
                        <button type="submit" class="btn btn-success btn-block"> Search </button>
                    </div>
                    <div class="col-sm-6 col-md-2 mb-2">
                        <a href="{{ route('corporate.index') }}" class="btn btn-danger btn-block"> Reset </a>
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
                                    <th>Corporate Name</th>
                                    <th>City</th>
                                    <th>Zip Code</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($corporates->count() > 0)
                                    @foreach ($corporates as $corporate)
                                        <tr>
                                            <td>{{ $corporate->id }}</td>
                                            <td>{{ $corporate->name }}</td>
                                            <td>{{ $corporate->city }}</td>
                                            <td>{{ $corporate->zip_code }}</td>
                                            <td>{{ $corporate->phone }}</td>
                                            <td>{{ $corporate->email }}</td>
                                            <td>
                                                @can('View Corporate')
                                                <a href="{{ route('corporate.show', $corporate->id) }}"
                                                    class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                                                @endcan
                                                @can('Edit Corporate')
                                                <a href="{{ route('corporate.edit', $corporate->id) }}" 
                                                    class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>
                                                </a>
                                                @endcan
                                                @can('Delete Corporate')
                                                <form action="{{ route('corporate.destroy', $corporate->id) }}"
                                                    method="POST" class="d-inline userform">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-trash"></i></button>
                                                </form>
                                                @endcan
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
                        {{ $corporates->links() }}
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Add Corporate Modal -->
        <div id="add_corporate" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Corporate</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('corporate.store') }}" method="POST" class="corporateform">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="name" id="name">
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Address 1</label>
                                        <input class="form-control" type="text" name="address1" id="address1">
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Address 2</label>
                                        <input class="form-control" type="text" name="address2" id="address2">
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">City</label>
                                        <input class="form-control" type="text" name="city" id="city">
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Zip Code</label>
                                        <input class="form-control" type="text" name="zip_code" id="zip_code">
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">State</label>
                                        <input class="form-control" type="text" name="state" id="state">
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Phone Number</label>
                                        <input class="form-control" type="text" name="phone" id="phone">
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Fax</label>
                                        <input class="form-control" type="text" name="fax" id="fax">
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Website</label>
                                        <input class="form-control" type="text" name="website" id="website">
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Email</label>
                                        <input class="form-control" type="email" name="email" id="email">
                                        <span class="text-danger"></span>
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
            $(".corporateform").submit(function(e) {
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
                            $('#' + key).next().html(value);
                        });
                    }
                });
            });
        });
    </script>
@endsection
