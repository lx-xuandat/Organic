@extends('admin.layout.v1')


@section('page-content')
    <div class="content-wrapper">
        @include('admin.ui.page_header')

        {{-- Main content --}}
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Header Top </h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('admin.setup.update', ['setup' => 1]) }}" method="post">
                                {{ method_field('PUT') }}
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Logo</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">
                                                    Choose file
                                                </label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="facebook">Facebook</label>
                                        <input type="text" class="form-control" id="facebook" name="socials[facebook]"
                                            value="{{ $setup->socials['facebook'] }}" placeholder="Facebook">
                                    </div>
                                    <div class="form-group">
                                        <label for="twitter">Twitter</label>
                                        <input type="text" class="form-control" id="twitter" name="socials[twitter]"
                                            value="{{ $setup->socials['twitter'] }}" placeholder="twitter">
                                    </div>
                                    <div class="form-group">
                                        <label for="instagram">Instagram</label>
                                        <input type="text" class="form-control" id="instagram" name="socials[instagram]"
                                            value="{{ $setup->socials['instagram'] }}" placeholder="Instagram">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->

                    <!-- right column -->
                    <div class="col-md-6">
                        <!-- Form Element sizes -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Contact</h3>
                            </div>
                            <form action="{{ route('admin.setup.update', ['setup' => 1]) }}" method="post">
                                {{ method_field('PUT') }}
                                @csrf
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input class="form-control" id="email" name="email"
                                            value="{{ $setup->email }}" placeholder="hello@colorlib.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="meassage">Mail Slogan</label>
                                        <input type="text" class="form-control" name="msg_email" id="msg_email"
                                            value="{{ $setup->msg_email }}"
                                            placeholder="Free Shipping for all Order of $99">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone number</label>
                                        <input class="form-control" id="phone" name="phone"
                                            value="{{ $setup->phone }}" placeholder="+65 11.188.888">
                                    </div>
                                    <div class="form-group">
                                        <label for="msg_phone">Phone Message</label>
                                        <input type="text" class="form-control" name="msg_phone" id="msg_phone"
                                            value="{{ $setup->msg_phone }}" placeholder="support 24/7 time">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            value="{{ $setup->address }}" placeholder="60-49 Road 11378 New York">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
