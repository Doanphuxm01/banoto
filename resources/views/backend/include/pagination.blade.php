<div class="col-md-12" style="margin-top: 17px;">
    <div class="row" >
        <div class="col-sm-12 col-md-5">
            <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite"> Đang hiển thị <strong>{!! ($data->total() > $data->perPage()) ? $data->perPage() : $data->total()  !!}</strong> trên tổng số <strong>{!! $data->total() !!}</strong> bản ghi</div>
        </div>
        <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate" style="float: right;">
                <nav aria-label="Page navigation example">
                    {!! $data->appends($appended)->render() !!}
                </nav>
            </div>
        </div>
    </div>
</div>
