@extends('admin.layout.v1', [
    'pageTitle' => 'Hàng hóa',
    'breadcrumb' => [['text' => 'Home', 'link' => '/'], ['text' => 'Dashboard', 'link' => '/admin'], ['text' => 'Products', 'link' => null]],
])

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card section-category">
                    <div class="card-header">
                        <h3 class="card-title">@lang('nhom_hang')</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm">
                                <div class="input-group-append ">
                                    <button type="submit" class="btn" data-toggle="modal"
                                        data-target="#modalCreateCategory">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        {{ showNavCategories($Categories) }}
                    </div>
                </div>

                <div class="card section-quantity">
                    <div class="card-header">
                        <h3 class="card-title">@lang('ton_kho')</h3>
                    </div>
                    <div class="card-body"></div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">@lang('Hàng hóa')</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 300px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="@lang('search')">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>

                                <div class="input-group-append ">
                                    <button type="button" class="btn btn-default ml-5" data-toggle="modal"
                                        data-target="#modalCreateProduct">
                                        <i class="fas fa-plus mr-2"></i>@lang('new')
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 350px;">
                        <table class="table table-head-fixed table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>supplier_ids</th>
                                    <th>product_code</th>
                                    <th>product_name</th>
                                    <th>description</th>
                                    <th>standard_cost</th>
                                    <th>list_price</th>
                                    <th>reorder_level</th>
                                    <th>target_level</th>
                                    <th>quantity_per_unit</th>
                                    <th>discontinued</th>
                                    <th>minimum_reorder_quantity</th>
                                    <th>category</th>
                                    <th>attachment</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $item)
                                    <tr data-widget="expandable-table" aria-expanded="false">
                                        <td> {{ $item->supplier_ids }} </td>
                                        <td> {{ $item->product_code }} </td>
                                        <td> {{ $item->product_name }} </td>
                                        <td> {{ $item->description }} </td>
                                        <td> {{ $item->standard_cost }} </td>
                                        <td> {{ $item->list_price }} </td>
                                        <td> {{ $item->reorder_level }} </td>
                                        <td> {{ $item->target_level }} </td>
                                        <td> {{ $item->quantity_per_unit }} </td>
                                        <td> {{ $item->discontinued }} </td>
                                        <td> {{ $item->minimum_reorder_quantity }} </td>
                                        <td> {{ $item->category }} </td>
                                        <td> {{ $item->attachment }} </td>
                                    </tr>
                                    <tr class="expandable-body">
                                        <td colspan="13">
                                            <div>

                                                <form action="" method="post">
                                                    <div class="row" style="max-width: 830px">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Date:</label>
                                                                <div class="input-group date" id="reservationdate"
                                                                    data-target-input="nearest">
                                                                    <input type="text"
                                                                        class="form-control datetimepicker-input"
                                                                        data-target="#reservationdate" />
                                                                    <div class="input-group-append"
                                                                        data-target="#reservationdate"
                                                                        data-toggle="datetimepicker">
                                                                        <div class="input-group-text"><i
                                                                                class="fa fa-calendar"></i></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

    @include('admin.products.create')
    @include('admin.categories.create')
@endsection
