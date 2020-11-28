@extends('backend.layouts.master')
@section('title','edit-user')
@push('CSS_PUST')
<link rel="stylesheet" href="{{ asset('backend/plugins/mohithg-switchery/dist/switchery.min.css') }} ">
<link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }} ">
<link rel="stylesheet" href="{{ asset('backend/plugins/summernote/dist/summernote-bs4.css') }} ">
<link rel="stylesheet" href="{{ asset('backend/plugins/select2/dist/css/select2.min.css') }} ">
<link rel="stylesheet" href="{{ asset('backend/plugins/jquery-toast-plugin/dist/jquery.toast.min.css') }} ">
@endpush
@section('content')
    <div class="container-fuild">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="card" style="min-height: 484px;">
                        <div class="card-header"><h3>Horizontal Form</h3></div>
                        <div class="card-body">
                            <form class="forms-sample">
                                <div class="form-group row">
                                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="exampleInputMobile" placeholder="Mobile number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Re Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="exampleInputConfirmPassword2" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input">
                                        <span class="custom-control-label">&nbsp;Remember me</span>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('JS_PLUGIN_REGION')
<script src="{{ asset('backend/plugins/mohithg-switchery/dist/switchery.min.js') }} "></script>

<script src="{{ asset('backend/plugins/summernote/dist/summernote-bs4.min.js') }} "></script>
<script src="{{ asset('backend/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }} "></script>
<script src="{{ asset('backend/plugins/jquery.repeater/jquery.repeater.min.js') }} "></script>
<script src="{{ asset('backend/plugins/select2/dist/js/select2.min.js') }} "></script>
<script src="{{ asset('backend/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js') }} "></script>
<script src="{{ asset('backend/plugins/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>
@endpush

@section('JS_REGION')
<script>
        @if(session('user-status'))
            $.toast({
            heading: 'Success',
            text: '{{ session('user-status') }}',
            showHideTransition: 'slide',
            icon: 'success',
            loaderBg: '#2dce89',
            bgColor : '#2dce89',
            textColor : '#eee', 
            position: 'top-right'
            })
        @endif
        @if(session('status-school'))
            $.toast({
            heading: 'Success',
            text: '{{ session('status-school') }}',
            showHideTransition: 'slide',
            icon: 'success',
            loaderBg: '#2dce89',
            bgColor : '#2dce89',
            textColor : '#eee', 
            position: 'top-right'
            })
        @endif
</script>
@endsection