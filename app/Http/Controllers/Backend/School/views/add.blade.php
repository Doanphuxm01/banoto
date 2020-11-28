@extends('backend.layouts.master')
@section('title','edit')
@push('CSS_PUST')
<link rel="stylesheet" href="{{ asset('backend/plugins/mohithg-switchery/dist/switchery.min.css') }} ">
<link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }} ">
<link rel="stylesheet" href="{{ asset('backend/plugins/summernote/dist/summernote-bs4.css') }} ">
<link rel="stylesheet" href="{{ asset('backend/plugins/select2/dist/css/select2.min.css') }} ">
@endpush
@section('content')
    <div class="container-fuild">
        <div class="row">
            {{-- <form action="{{ route('MngSchool',['action' => '_save', 'id' => @$obj->id])}}" method="POST" class="col-md-12"> --}}
            <form  class="col-md-12" id="submit_form">
            @csrf
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        {{-- <form class="forms-sample"> --}}
                            <div class="form-group">
                                <label >source</label>
                                <input  name="obj[source]" type="text" class="form-control" placeholder="source">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="obj[status]">
                                    <option checked value="1" >on</option>
                                    <option value="0" >off</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >enName</label>
                                <input  name="obj[enName]" type="text" class="form-control"  placeholder="enName">
                            </div>
                            <div class="form-group">
                                <label >jpName</label>
                                <input  name="obj[jpName]" type="text" class="form-control"  placeholder="jpName">
                            </div>
                            <div class="form-group">
                                <label>type</label>
                                <input  name="obj[type]" type="text" class="form-control"  placeholder="type">
                            </div>
                            
                            <div class="form-group">
                                <label>address</label> <a href="javascript:void(0);" class="badge badge-primary mb-1" id="addressBox">thêm</a>
                                <div class="box-group">
                                    <div class="form-group">
                                        <input  name="obj[address][]" type="text" class="form-control"  placeholder="address">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>website</label> <a href="javascript:v oid(0);" class="badge badge-primary mb-1" id="wb-box">thêm</a>
                                <div class="wb-box-group">
                                    <div class="form-group">
                                        <input  name="obj[website][]" type="text" class="form-control"  placeholder="website">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header"><h3>conditions</h3></div>
                                        <div class="card-body" >
                                            <textarea name="obj[conditions]"class="form-control" rows="6" ></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 offset-5"><b>tuitionFee</b></label>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>enrollment</label>
                                                <input name="obj[tuitionFee][enrollment]" type="number"  class="form-control" id="exampleInputEmail3" placeholder="enrollment">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>admission</label>
                                                <input name="obj[tuitionFee][admission]" type="number"  class="form-control" id="exampleInputEmail3" placeholder="admission">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>tuitionYear</label>
                                                <input name="obj[tuitionFee][tuitionYear]" type="number"  class="form-control" id="exampleInputEmail3" placeholder="tuitionYear">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>other</label>
                                                <input name="obj[tuitionFee][other]" type="number"  class="form-control" id="exampleInputEmail3" placeholder="other">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>total</label>
                                                <input name="obj[tuitionFee][total]" type="number"  class="form-control" id="exampleInputEmail3" placeholder="total">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 offset-5"><h5>accommodation</h5></label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label  class="col-md-3 offset-4"><b>dormitory</b></label>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>priceFrom</label>
                                                <input name="obj[accommodation][dormitory][priceFrom]" type="number"  class="form-control" id="exampleInputEmail3" placeholder="enrollment">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>priceTo</label>
                                                <input name="obj[accommodation][dormitory][priceTo]" type="number"  class="form-control" id="exampleInputEmail3" placeholder="enrollment">
                                            </div>
                                        </div>
                                       <div class="row">
                                        <div class="col-md-3">
                                            <label>mandatory</label>
                                            <input type="checkbox" name="obj[accommodation][dormitory][mandatory]"    class="js-single"  />
                                        </div>
                                        <div class="col-md-3">
                                            <label>introduce</label>
                                        <input type="checkbox" name="obj[accommodation][introduce]"  class="js-switch"/>
                                        </div>
                                        <div class="col-md-3">
                                            <label>job</label>
                                        <input type="checkbox" name="obj[job][introduce]"  class="js-switch"/>
                                        </div>
                                       </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 offset-5"><h5>cover</h5></label>
                                <div class="row">
                                    <div class="col-md-12">
                                            <div class="form-group">
                                                <input  name="obj[cover][]" type="text" class="form-control" >
                                            </div>
                                    </div>
                                    
                                </div>
                            </div>
                            {{-- @dd($obj->iMap) --}}
                            <label>iMap</label><a href="javascript:void(0);" class="badge badge-primary mb-1" id="imap-box">thêm</a>
                            <div class="imap-box-group">
                            <div class="form-group">
                                <input  name="obj[iMap][]" type="text" class="form-control" >
                            </div>
                            </div>
                            {{-- @endif --}}
                            
                            <button type="button" id="submit" class="btn btn-primary mr-2 edit-school">Submit</button>
                            <button class="btn btn-light"><a href="{{ route('MngSchool',['action' => 'school'])}}">Cancel</a></button>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection
@push('JS_PLUGIN_REGION')
{{-- <script src="{{ asset('backend/js/form-advanced.js') }}"></script> --}}
<script src="{{ asset('backend/plugins/mohithg-switchery/dist/switchery.min.js') }} "></script>


<script src="{{ asset('backend/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }} "></script>
<script src="{{ asset('backend/plugins/jquery.repeater/jquery.repeater.min.js') }} "></script>
<script src="{{ asset('backend/plugins/select2/dist/js/select2.min.js') }} "></script>
<script src="{{ asset('backend/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js') }} "></script>
<script src="{{ asset('backend/dist/js/school.js') }} "></script>
<script src="{{ asset('backend/plugins/summernote/dist/summernote-bs4.min.js') }} "></script>
@endpush

@section('JS_REGION')
    <script type="text/javascript">
    $(document).ready(function() {
        $('.switchery').on('click', function() {
            let $ele = $(this).siblings('input[data-switchery="true"]');
            $ele.attr('value', $ele.prop("checked"));
            console.log($(this),$ele.data('id'), $ele.prop("checked"));
        })

        $('#submit').click(function() {
            return _POST_FORM('#submit_form', '{{ admin_link('school/_save') }}')
        });
        $('#addressBox').on('click', function() {
            let $container = $(this).siblings('.box-group');
            $container.append('<div class="form-group"><input name="obj[address][]" type="text" class="form-control"  placeholder="address"></div>')
        });
        $('#wb-box').on('click', function() {
            let $container = $(this).siblings('.wb-box-group');
            $container.append('<div class="form-group"><input name="obj[website][]" type="text" class="form-control"  placeholder="website"></div>')
        })
        $('#imap-box').on('click', function() {
            let $container = $(this).siblings('.imap-box-group');
            $container.append('<div class="form-group"><input name="obj[iMap][]" type="text" class="form-control"  placeholder="iMap"></div>')
        })
    });
    </script>
    <script>
        $('#summernote').summernote({
          placeholder: 'Hello stand alone ui',
          tabsize: 2,
          height: 120,
          toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
          ]
        });
      </script>
@endsection