<div class="modal fade full-window-modal modal-preview" id="fullwindowModal" tabindex="-1" role="dialog" aria-labelledby="fullwindowModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fullwindowModalLabel">{{ $obj->source }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header d-block">
                        <h3>Complex Headers</h3>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="complex-dt"
                                   class="table table-striped table-bordered nowrap">
                                <thead>
                                <tr>
                                    <th rowspan="2">trạng thái</th>
                                    <th rowspan="2">enName</th>
                                    <th rowspan="2">jpName</th>
                                    <th rowspan="2">address</th>
                                    <th rowspan="2">conditions</th>
                                    <th colspan="5">tuitionFee</th>
                                    <th colspan="10">accommodation</th>
                                    {{-- <th colspan="3">Contact</th> --}}
                                </tr>
                                <tr>
                                    <th>enrollment</th>
                                    <th>admission</th>
                                    <th>tuitionYear</th>
                                    <th>other</th>
                                    <th>total</th>

                                    <th>introduce</th>
                                    <th>priceFrom</th>
                                    <th>priceTo</th>
                                    <th>mandatory</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <span class="badge badge-pill badge-{{($obj->status == 1 )? 'primary' : 'secondary'}}">
                                            {{ ($obj->status == 1 )? 'hoạt động' : 'chưa hoạt động' }}
                                        </span>
                                    </td>
                                    <td>{{ @$obj->enName }} </td>
                                    <td>{{ @$obj->jpName }} </td>
                                    <td>{{ @$obj->address }} </td>
                                    <td>{{ @$obj->conditions }} </td>
                                    {{-- tuitionFee --}}
                                    <td>{{ @$obj->tuitionFee->enrollment }} </td>
                                    <td>{{ @$obj->tuitionFee->admission }} </td>
                                    <td>{{ @$obj->tuitionFee->tuitionYear }} </td>
                                    <td>{{ @$obj->tuitionFee->other }} </td>
                                    <td>{{ @$obj->tuitionFee->total }} </td>
                                    {{-- accommodation --}}
                                    <td>{{ @$obj->accommodation->dormitory->priceFrom }} </td>
                                    <td>{{ @$obj->accommodation->dormitory->priceTo }} </td>
                                    <td>{{ @$obj->accommodation->dormitory->mandatory }} </td>
                                    <td>{{ @$obj->accommodation->introduce }} </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>