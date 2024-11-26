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
                        <h3 class="page-title">Modules</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Modules</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_module"><i
                                class="fa fa-plus"></i> Add Module</a>
                    </div>
                </div>
            </div>
            @include('admin.components.messages')
            <!-- /Page Header -->
            <div class="row">
                <div class="col-md-12">
                    <h6 class="card-title m-b-20">Module Access</h6>
                    <div class="m-b-30">
                        @foreach ($modules as $module)
                            <ul class="list-group notification-list">
                                <li class="list-group-item">
                                    {{$module->id. '.'}}
                                    {{ $module->name }}
                                    <div class="status-toggle">
                                        <input type="checkbox" id="module_{{ $module->id }}" class="check" {{ $module->status == 'Active' ? 'checked' : '' }}>
                                        <label for="module_{{ $module->id }}" class="checktoggle">checkbox</label>
                                    </div>
                                </li>
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Add Modules Modal -->
        <div id="add_module" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Module</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('modules.store') }}" class="modulesform" name="modulesform" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Module Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" value="{{old('name')}}" name="name" id="name">
                                <p class="text-danger">{{ $errors->first('name') }}</p>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Modules Modal -->
    </div>
    <!-- /Page Wrapper -->
@endsection
@section('CustomJS')
    <script type="text/javascript">
            $(document).ready(function() {
                $(".modulesform").submit(function(e) {
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