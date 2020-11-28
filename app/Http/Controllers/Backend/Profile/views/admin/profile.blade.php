@extends('backend.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-file-text bg-blue"></i>
                    <div class="d-inline">
                        <h5>Profile</h5>
                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Pages</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div> --}}
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-5">
            <div class="card">
                <div class="card-body">
                    <div class="text-center"> 
                        <img src="{{ asset('backend/img/user.jpg') }} " class="rounded-circle" width="150" />
                        <h4 class="card-title mt-10">{{ Auth::guard('admin')->user()->name }} </h4>
                        <p class="card-subtitle">Front End Developer</p>
                    </div>
                </div>
                <hr class="mb-0"> 
                <div class="card-body"> 
                    <small class="text-muted d-block">Email address </small>
                    <h6>{{ $admin->email }} </h6> 
                    <small class="text-muted d-block pt-10">Role</small>
                    <h6>
                       {{ ($admin->role == 1) ? 'administrator' : 'ctv' }}    
                    </h6>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-7">
            <div class="card">
                <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="false">Setting</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                        <div class="card-body">
                            <form action="{{ route('admin.profile.update',$admin->name) }} " method="POST" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="example-name">Full Name</label>
                                    <input type="text" placeholder="Johnathan Doe" class="form-control" name="name" id="example-name" value="{{ $admin->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="example-email">Email</label>
                                    <input type="email" placeholder="johnathan@admin.com" class="form-control" name="email" id="example-email" value="{{ $admin->email }} ">
                                </div>
                                <div class="form-group">
                                    <label for="example-password">Password</label>
                                    <input type="password" value="" class="form-control" name="password" id="example-password">
                                </div>
                                <div class="form-group">
                                    <label for="example-country">Select Roles</label>
                                    <select name="role" id="example-message" class="form-control">
                                        <option value="1">administrator</option>
                                        <option value="2">ctv</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>File upload</label>
                                    <input type="file" name="img[]" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="file" class="form-control file-upload-info"  placeholder="Upload Image">
                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                        </span>
                                    </div>
                                </div>
                                <button class="btn btn-success" type="submit">Update Profile</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection