@extends('backend.layouts.master')
@section('title','user')
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
              <div class="card table-card">
                <div class="card-header">
                    <h3>Danh sách các User</h3>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="ik ik-chevron-left action-toggle"></i></li>
                            <li><i class="ik ik-minus minimize-card"></i></li>
                            <li><i class="ik ik-x close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>status</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>time</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $key => $val)
                                <tr>
                                    <td>
                                        <div style="width: 10px;height: 10px;border-radius: 50%;" class="p-status bg-{{ ($val->status == 1 )? 'green' : 'dark' }}"></div>
                                    </td>
                                    <td>{{ @$val->fullName }} </td>
                                    <td>{{ @$val->email }} </td>
                                    <td>{{ @$val->created_at->format('Y-m-d') }} </td>
                                    <td>
                                        <a href="{{ admin_link('user/input?id='.$val->id) }}"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                        <a id="delete-user" data-id="{{ @$val->id }}" href="{{ route('MngUser',['action' => '_delete', 'id' => @$val->id]) }}"><i class="ik ik-trash-2 f-16 text-red"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @include('backend.include.pagination',['data' => $user, 'appended' => ['search' => Request::get('search')]])
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