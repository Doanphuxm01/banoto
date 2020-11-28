@extends('backend.layouts.master')
@section('title','school')
@push('CSS_PUST')
<link rel="stylesheet" href="{{ asset('backend/plugins/mohithg-switchery/dist/switchery.min.css') }} ">
<link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }} ">
<link rel="stylesheet" href="{{ asset('backend/plugins/summernote/dist/summernote-bs4.css') }} ">
<link rel="stylesheet" href="{{ asset('backend/plugins/select2/dist/css/select2.min.css') }} ">
<link rel="stylesheet" href="{{ asset('backend/dist/css/theme.min.css') }} ">
<link rel="stylesheet" href="{{ asset('backend/dist/css/toastr.min.css') }} ">
<link rel="stylesheet" href="{{ asset('backend/dist/css/toastr.css') }} ">
<link rel="stylesheet" href="{{ asset('backend/plugins/jquery-toast-plugin/dist/jquery.toast.min.css') }} ">
@endpush
@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h3>Danh sách các trường học</h3>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="ik ik-chevron-left action-toggle"></i></li>
                            <li><i class="ik ik-minus minimize-card"></i></li>
                            <li><i class="ik ik-x close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix col-md-6 offset-11">
                    <a href="{{ admin_link('school/input') }}" class="badge badge-primary mb-1">thêm  mới</a>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>status</th>
                                    <th>source</th>
                                    <th>jpName</th>
                                    <th>enName</th>
                                    <th>jobs</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($school as $key => $val)
                                <tr>
                                    <td>
                                        <div style="width: 10px;height: 10px;border-radius: 50%;" class="p-status bg-{{ ($val->status == 1 )? 'green' : 'dark' }}"></div>
                                    </td>
                                    <td><a href="{{ admin_link('school/input?id='.$val->id) }}">{{@$val->source }}</a> </td>
                                    <td>{{ @$val->jpName }} </td>
                                    <td>{{ @$val->enName }} </td>
                                    <td>
                                        {{-- <label class="badge badge-primary">Sketch</label>
                                        <label class="badge badge-primary">Ui</label> --}}
                                        <label class="badge badge-{{ (@$val->job == '{"introduce":true}') ? 'success' : 'warning' }}">{{ (@$val->job == '{"introduce":true}') ? 'true' : 'flase' }} </label>
                                    </td>
                                    <td>
                                        {{-- <button type="button" class=" badge badge-dark mb-1" onclick="SHOW_POPUP({{ $val->id }})">xem chi tiết</button> --}}
                                        <a href="{{ admin_link('school/input?id='.$val->id) }}"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                        <a id="delete-school" data-id="{{ @$val->id }}" href="{{ route('MngSchool',['action' => '_delete', 'id' => @$val->id]) }}"><i class="ik ik-trash-2 f-16 text-red"></i></a>
                                        <button type="button" class="btn btn-light"  onclick="SHOW_POPUP({{ $val->id }})"><i class="ik ik-heart"></i>detail</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                    @include('backend.include.pagination',['data' => $school, 'appended' => ['search' => Request::get('search')]])
                </div>
            </div>
        </div>
        <div class="preview">

        </div>
    </div>
@endsection
@push('JS_PLUGIN_REGION')
<script src="{{ asset('backend/plugins/mohithg-switchery/dist/switchery.min.js') }}"></script>
<script src="{{ asset('backend/js/form-advanced.js') }} "></script>
<script src="{{ asset('backend/plugins/summernote/dist/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}} "></script>
<script src="{{ asset('backend/plugins/jquery.repeater/jquery.repeater.min.js') }}"></script>
<script src="{{ asset('backend/plugins/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>
{{-- <script src="{{ asset('backend/dist/js/toastr.min.js') }}"></script> --}}
{{-- <script src="{{ asset('backend/dist/js/theme.min.js') }}"></script> --}}
@endpush

@section('JS_REGION')
    <script>
        function SHOW_POPUP(id, bidx) {
            shop.ajax_popup('admin/school/popup-preview', 'POST', {
                    id: id
                }, function (response) {
                    $('.preview').empty().html(response);
                    $('.modal-preview').modal({backdrop: 'static'});
                    // $('.switchery-popup').each(function (idx, obj) {
                    //     new Switchery($(this)[0], $(this).data());
                    // });
                },
                'html');
        }
            @if(session('status'))
                $.toast({
                heading: 'Success',
                text: '{{ session('status') }}',
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
    