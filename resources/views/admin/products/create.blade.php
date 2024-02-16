<div class="modal fade" id="modalCreateProduct">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header" style="border: none">
                <h4 class="modal-title">@lang('Thêm hàng')</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-primary card-outline card-outline-tabs">
                    <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-info" data-toggle="pill" href="#tab1"
                                    role="tab" aria-controls="tab1" aria-selected="true">Thông tin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-description-tab" data-toggle="pill"
                                    href="#custom-tabs-four-description" role="tab"
                                    aria-controls="custom-tabs-four-description" aria-selected="false">Mô tả chi
                                    tiết</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-component-tab" data-toggle="pill"
                                    href="#custom-tabs-four-component" role="tab"
                                    aria-controls="custom-tabs-four-component" aria-selected="false">Thành phần</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                                aria-labelledby="custom-tabs-info">
                                {{--

                            gia von
                            gia ban
                            ton kho
                            trong luong
                            thuoc tinh
                            don vi tinh --}}
                                <div class="form-horizontal">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group row">
                                                    <label for="product_id"
                                                        class="col-sm-4 col-form-label">@lang('ma_hang')</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="product_id"
                                                            placeholder="@lang('code_auto')">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="product_name"
                                                        class="col-sm-4 col-form-label">@lang('ten_hang')</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="product_name"
                                                            placeholder="@lang('ten_hang')">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">@lang('nhom_hang')</label>
                                                    <div class="col-sm-8">
                                                        @include('admin.inc.categories_dropdown', ['list' => $Categories, 'max_level' => 4])
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-5">
                                                <div class="form-group row">
                                                    <label for=""
                                                        class="col-sm-4 col-form-label">@lang('gia_von')</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for=""
                                                        class="col-sm-4 col-form-label">@lang('gia_ban')</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for=""
                                                        class="col-sm-4 col-form-label">@lang('ton_kho')</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for=""
                                                        class="col-sm-4 col-form-label">@lang('trong_luong')</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-four-description" role="tabpanel"
                                aria-labelledby="custom-tabs-four-description-tab">
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-four-component" role="tabpanel"
                                aria-labelledby="custom-tabs-four-component-tab">
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                {{-- </div> --}}
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">@lang('skip')</button>
                    <button type="submit" class="btn btn-primary">@lang('save')</button>
                </div>
            </div>
        </div>
    </div>
</div>
