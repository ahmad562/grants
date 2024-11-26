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
                            <li class="breadcrumb-item active">Corporate Details</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        {{-- pluck user role --}}
                                        @if (@$corporate->image)
                                            <img alt="{{ @$corporate->name }}"
                                                src="{{ asset('public/uploads/profile_images/' . @$corporate->image) }}">
                                        @else
                                            <img alt="{{ @$corporate->name }}"
                                                src="{{ asset('public/assets/img/profiles/avatar-05.jpg') }}">
                                        @endif
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3 class="left-bar">Corporate Details</h3>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="personal-info">
                                                <li>
                                                    <div class="title">Corporate Name</div>
                                                    <div class="text">{{ @$corporate->name }}</div>
                                                </li>
                                                <li>
                                                    <div class="title">Email</div>
                                                    <div class="text"><a href="#">{{ @$corporate->email }}</a></div>
                                                </li>
                                                <li>
                                                    <div class="title">Website</div>
                                                    <div class="text">{{ @$corporate->website }}</div>
                                                </li>
                                                <li>
                                                    <div class="title">Phone</div>
                                                    <div class="text">{{ @$corporate->phone }}</div>
                                                </li>
                                                <li>
                                                    <div class="title">Address 1</div>
                                                    <div class="text">{{ @$corporate->address1 }}</div>
                                                </li>
                                                <li>
                                                    <div class="title">Address 2</div>
                                                    <div class="text">{{ @$corporate->address2 }}</div>
                                                </li>
                                                <li>
                                                    <div class="title">City</div>
                                                    <div class="text">{{ @$corporate->city }}</div>
                                                </li>
                                                <li>
                                                    <div class="title">State</div>
                                                    <div class="text">{{ @$corporate->state }}</div>
                                                </li>
                                                <li>
                                                    <div class="title">Zip Code</div>
                                                    <div class="text">{{ @$corporate->zip_code }}</div>
                                                </li>
                                                <li>
                                                    <div class="title">Fax</div>
                                                    <div class="text">{{ @$corporate->fax }}</div>
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

    </div>
    <!-- /Page Wrapper -->
@endsection
