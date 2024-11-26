@extends('admin.components.app')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Profile</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
            @include('admin.components.messages')
            <!-- /Page Header -->
            <div class="card mb-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        {{-- pluck user role --}}
                                        @if (@$user->image)
                                            <img alt="{{ @$user->name }}"
                                                src="{{ asset('public/uploads/profile_images/' . @$user->image) }}">
                                        @else
                                            <img alt="{{ @$user->name }}"
                                                src="{{ asset('public/assets/img/profiles/avatar-05.jpg') }}">
                                        @endif
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        {{-- <div class="col-md-4">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0">{{ @$user->name }}</h3>
                                                <small class="text-muted">{{ @$user->email }}</small>
                                                <div class="staff-id">Employee ID : {{ @$user->employee_id }}</div>
                                                <div class="staff-msg"><a class="btn btn-custom" href="{{ route('users.edit', $user->id) }}">Edit Profile</a></div>
                                            </div>
                                        </div> --}}
                                        <div class="col-md-12">
                                            <ul class="personal-info">
                                                <li>
                                                    <div class="title">First Name</div>
                                                    <div class="text">{{ @$user->first_name }}</div>
                                                </li>
                                                <li>
                                                    <div class="title">Last Name</div>
                                                    <div class="text">{{ @$user->last_name }}</div>
                                                </li>
                                                <li>
                                                    <div class="title">Email</div>
                                                    <div class="text"><a href="#">{{ @$user->email }}</a></div>
                                                </li>
                                                <li>
                                                    <div class="title">Username</div>
                                                    <div class="text">{{ @$user->username }}</div>
                                                </li>
                                                <li>
                                                    <div class="title">Phone</div>
                                                    <div class="text">{{ @$user->phone_number }}</div>
                                                </li>
                                                <li>
                                                    <div class="title">Role</div>
                                                    <div class="text">{{ @$user->roles->pluck('name')->first() }}</div>
                                                </li>
                                                <li>
                                                    <div class="title">Address 1</div>
                                                    <div class="text">{{ @$user->address1 }}</div>
                                                </li>
                                                <li>
                                                    <div class="title">Address 2</div>
                                                    <div class="text">{{ @$user->address2 }}</div>
                                                </li>
                                                <li>
                                                    <div class="title">City</div>
                                                    <div class="text">{{ @$user->city }}</div>
                                                </li>
                                                <li>
                                                    <div class="title">State</div>
                                                    <div class="text">{{ @$user->state }}</div>
                                                </li>
                                                <li>
                                                    <div class="title">Zip Code</div>
                                                    <div class="text">{{ @$user->zip_code }}</div>
                                                </li>
                                                <li>
                                                    <div class="staff-msg"><a class="btn btn-custom" href="{{ route('users.edit', $user->id) }}">Edit Profile</a></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Page Content -->

        <!-- Profile Modal -->
        {{-- <div id="profile_info" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Profile Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('employeecard', $employe_details->id) }}"
                            name="employeform" class="employeform" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="profile-img-wrap edit-img">
                                        @if ($employe_details->image)
                                            <img id="profileImage" class="inline-block"
                                                src="{{ asset('public/uploads/employee_images/' . $employe_details->image) }}"
                                                alt="{{ $employe_details->name }}">
                                        @else
                                            <img id="profileImage" class="inline-block"
                                                src="{{ asset('public/assets/img/profiles/avatar-05.jpg') }}"
                                                alt="{{ $employe_details->name }}">
                                        @endif
                                        <div class="fileupload btn">
                                            <span class="btn-text">Edit</span>
                                            <input class="upload" type="file" name="image" id="imageInput"
                                                accept="image/*">
                                        </div>
                                    </div>
                                    <p class="text-danger text-center" id="img-error"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="left-bar">Personal Information</h3>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control"
                                            value="{{ old('father_name', $employe_details->name) }}" id="name"
                                            name="name">
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Father Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control"
                                            value="{{ old('father_name', $employe_details->father_name) }}"
                                            id="father_name" name="father_name">
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>CNIC <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" id="cnic" name="cnic"
                                            value="{{ old('cnic', $employe_details->cnic) }}" readonly>
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            value="{{ old('email', $employe_details->email) }}">
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Contact No <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            value="{{ old('phone', $employe_details->phone) }}">
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Gender <span class="text-danger">*</span></label>
                                        <select class="select form-control" name="gender" id="gender">
                                            <option value="">Select Gender</option>
                                            <option value="Male"
                                                {{ old('gender', $employe_details->gender) == 'Male' ? 'selected' : '' }}>
                                                Male</option>
                                            <option value="Female"
                                                {{ old('gender', $employe_details->gender) == 'Female' ? 'selected' : '' }}>
                                                Female</option>
                                        </select>
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Date of Birth <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="dob" name="dob"
                                            value="{{ old('dob', $employe_details->dob) }}">
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Blood Group <span class="text-danger">*</span></label>
                                        <select class="select form-control" name="blood_group" id="blood_group">
                                            <option value="">Select Blood Group</option>
                                            <option value="A+"
                                                {{ old('blood_group', $employe_details->blood_group) == 'A+' ? 'selected' : '' }}>
                                                A+</option>
                                            <option value="A-"
                                                {{ old('blood_group', $employe_details->blood_group) == 'A-' ? 'selected' : '' }}>
                                                A-</option>
                                            <option value="B+"
                                                {{ old('blood_group', $employe_details->blood_group) == 'B+' ? 'selected' : '' }}>
                                                B+</option>
                                            <option value="B-"
                                                {{ old('blood_group', $employe_details->blood_group) == 'B-' ? 'selected' : '' }}>
                                                B-</option>
                                            <option value="AB+"
                                                {{ old('blood_group', $employe_details->blood_group) == 'AB+' ? 'selected' : '' }}>
                                                AB+</option>
                                            <option value="AB-"
                                                {{ old('blood_group', $employe_details->blood_group) == 'AB-' ? 'selected' : '' }}>
                                                AB-</option>
                                            <option value="O+"
                                                {{ old('blood_group', $employe_details->blood_group) == 'O+' ? 'selected' : '' }}>
                                                O+</option>
                                            <option value="O-"
                                                {{ old('blood_group', $employe_details->blood_group) == 'O-' ? 'selected' : '' }}>
                                                O-</option>
                                        </select>
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Mariatal Status <span class="text-danger">*</span></label>
                                        <select class="select form-control" name="marital_status" id="marital_status">
                                            <option value="">Select Marital Status</option>
                                            <option value="Single"
                                                {{ old('marital_status', $employe_details->marital_status) == 'Single' ? 'selected' : '' }}>
                                                Single</option>
                                            <option value="Married"
                                                {{ old('marital_status', $employe_details->marital_status) == 'Married' ? 'selected' : '' }}>
                                                Married</option>
                                            <option value="Widow"
                                                {{ old('marital_status', $employe_details->marital_status) == 'Widow' ? 'selected' : '' }}>
                                                Widow</option>
                                            <option value="Divorced"
                                                {{ old('marital_status', $employe_details->marital_status) == 'Divorced' ? 'selected' : '' }}>
                                                Divorced</option>
                                        </select>
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Domicile District <span class="text-danger">*</span></label>
                                        <select class="form-control select" name="district" id="district">
                                            <option value="">Select District</option>
                                            @foreach ($districts as $district)
                                                <option value="{{ $district->id }}"
                                                    {{ old('district', $employe_details->district_id) == $district->id ? 'selected' : '' }}>
                                                    {{ $district->name }}</option>
                                            @endforeach
                                        </select>
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Permanent Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            value="{{ old('address', $employe_details->address) }}">
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="left-bar">Employment Details</h3>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Duty Station <span class="text-danger">*</span></label>
                                        <select class="select form-control" name="duty_station" id="duty_station">
                                            <option value="">Select Duty Station</option>
                                            <option value="Head Office" {{ old('duty_station', $employe_details->duty_station) == 'Head Office' ? 'selected' : '' }}>Head Office</option>
                                            <option value="District" {{ old('duty_station', $employe_details->duty_station) == 'District' ? 'selected' : '' }}>District</option>
                                            <p class="text-danger text-error"></p>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4" id="show-hide-section">
                                    <div class="form-group">
                                        <label>Section</label>
                                        <select class="select form-control" name="department" id="department">
                                            <option value="">Select Section/District</option>
                                            @foreach ($departments as $department)
                                                <option value="{{ $department->id }}"
                                                    {{ old('department', $employe_details->department_id) == $department->id ? 'selected' : '' }}>
                                                    {{ $department->name }}</option>
                                            @endforeach
                                        </select>
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-md-4" id="show-hide-duty-district">
                                    <div class="form-group">
                                        <label>Duty District</label>
                                        <select class="form-control select" name="duty_district" id="duty_district">
                                            <option value="">Select Duty District</option>
                                            @foreach ($districts as $district)
                                                <option value="{{ $district->id }}"
                                                    {{ old('duty_district', $employe_details->duty_district_id) == $district->id ? 'selected' : '' }}>
                                                    {{ $district->name }}</option>
                                            @endforeach
                                        </select>
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Designation <span class="text-danger">*</span></label>
                                        <select class="select form-control" name="designation" id="designation">
                                            <option value="">Select Department</option>
                                            @foreach ($designations as $designation)
                                                <option value="{{ $designation->id }}"
                                                    {{ old('designation', $employe_details->designation_id) == $designation->id ? 'selected' : '' }}>
                                                    {{ $designation->name }}</option>
                                            @endforeach
                                        </select>
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>BPS <span class="text-danger">*</span></label>
                                        <select class="select form-control" name="bps" id="bps">
                                            <option value="">Select BPS</option>
                                            @foreach ($bps as $each_bps)
                                                <option value="{{ $each_bps->id }}"
                                                    {{ old('bps', $employe_details->bps_id) == $each_bps->id ? 'selected' : '' }}>
                                                    {{ $each_bps->name }}</option>
                                            @endforeach
                                        </select>
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Posting Type <span class="text-danger">*</span></label>
                                        <select class="select form-control" name="posting_type" id="posting_type">
                                            <option value="">Select Posting Type</option>
                                            <option value="Regular"
                                                {{ old('posting_type', $employe_details->posting_type) == 'Regular' ? 'selected' : '' }}>
                                                Regular</option>
                                            <option value="Contract"
                                                {{ old('posting_type', $employe_details->posting_type) == 'Contract' ? 'selected' : '' }}>
                                                Contract</option>
                                            <option value="Contingent"
                                                {{ old('posting_type', $employe_details->posting_type) == 'Contingent' ? 'selected' : '' }}>
                                                Contingent</option>
                                            <option value="Deputation"
                                                {{ old('posting_type', $employe_details->posting_type) == 'Deputation' ? 'selected' : '' }}>
                                                Deputation</option>
                                        </select>
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Date of Joining <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="doj" name="doj"
                                            value="{{ old('doj', $employe_details->doj) }}">
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-md-4" id="show-hide-regularization-date">
                                    <div class="form-group">
                                        <label>Regularization Date </label>
                                        <input type="date" class="form-control" id="regularization_date"
                                            name="regularization_date"
                                            value="{{ old('regularization_date', $employe_details->regularization_date) }}">
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                <div class="col-md-4" id="show-hide-contract-date">
                                    <div class="form-group">
                                        <label>Contract End Date </label>
                                        <input type="date" class="form-control" id="contract_end_date"
                                            name="contract_end_date"
                                            value="{{ old('contract_end_date', $employe_details->contract_end_date) }}">
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                @if(!Auth::user()->hasAnyRole(['Director', 'Deputy Director']))
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Reports to <span class="text-danger">*</span></label>
                                        <select class="select form-control" name="reports_to" id="reports_to">
                                            <option value="">Select Reporting Officer</option>
                                            @foreach ($reporting_officers as $each_reporting_officer)
                                                <option value="{{ $each_reporting_officer->id }}"
                                                    {{ old('reports_to', $employe_details->reports_to) == $each_reporting_officer->id ? 'selected' : '' }}>
                                                    {{ $each_reporting_officer->name }}</option>
                                            @endforeach
                                        </select>
                                        <p class="text-danger text-error"></p>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- /Profile Modal -->

    </div>
    <!-- /Main Wrapper -->
@endsection

@section('CustomJS')
    <script type="text/javascript">
        $(document).ready(function() {
            $(".employeform").submit(function(e) {
                e.preventDefault();
                var form = $(this);
                var formData = new FormData(this);
                $.ajax({
                    url: form.attr('action'),
                    type: form.attr('method'),
                    // dataType: 'json',
                    processData: false,
                    contentType: false,
                    data: formData,
                    success: function(response) {
                        // Clear previous error messages
                        $('.text-danger').html('');
                        window.location.reload();
                    },
                    error: function(xhr) {
                        var errors = xhr.responseJSON.errors;
                        // Display error messages
                        $.each(errors, function(key, value) {
                            if (form.hasClass('editform')) {
                                $('#edit_' + key).parent().find('.text-error').text(
                                    value);
                            } else {
                                $('#' + key).parent().find('.text-error').text(value);
                            }
                        });
                        $('#img-error').text(errors.image);
                    }
                });
            });
        });

        document.getElementById('imageInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('profileImage').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection