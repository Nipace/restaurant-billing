@extends('layouts.app')
@section('content')


<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Dashboard-->
            <!--begin::Row-->
            <div class="row mt-0 mt-lg-8">

                <div class="col-xl-12">
                    <!--begin::Advance Table Widget 1-->
                    <div class="card card-custom card-stretch card-shadowless gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bolder text-dark">Settings</span>
                                <span class="text-muted mt-3 font-weight-bold font-size-sm">Update Settings</span>
                            </h3>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-0">
                            <form action="{{ route('settings.update',1)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="app_name">App name : </label>
                                    @role('Super-Admin')
                                    <input type="text" class="form-control" id="" name="app_name" value="{{ $setting->app_name  }}">
                                    @endrole
                                    @role('Admin|Cashier|Tester')
                                    <h4>{{ $setting->app_name  }}</h4>
                                    @endrole
                                    @error('app_name')
                                    <div class="alert-danger">{{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="restaurant_name">Restaurant name</label>
                                    <input type="text" class="form-control" id="" name="restaurant_name" value="{{ $setting->restaurant_name  }}">
                                    @error('restaurant_name')
                                    <div class="alert-danger">{{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="restaurant_address">Restaurant Address</label>
                                    <input type="text" class="form-control" id="" name="restaurant_address" value="{{ $setting->restaurant_address  }}">
                                    @error('restaurant_address')
                                    <div class="alert-danger">{{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="contact_number">Contact Number</label>
                                    <input type="text" class="form-control" id="" name="contact_number" value="{{ $setting->contact_number  }}">
                                    @error('contact_number')
                                    <div class="alert-danger">{{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="image">Logo</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                                @if(isset($setting->restaurant_logo))
                                <div class="form-group">
                                    <img src="{{ asset('storage/'.$setting->restaurant_logo) }}" alt="" style="width:60px;height:60px;">
                                </div>
                                @endif
                                <div class="form-group">
                                    <label for="table">Table</label>
                                    <input type="number" class="form-control" name="table" value="{{ $setting->table? $setting->table : ''  }}" required min="1">
                                    @error('table')
                                    <div class="alert-danger">{{ $message }}
                                    </div>
                                    @enderror


                                </div>



                                <div class="form-group">
                                    <button class="btn btn-success" type="submit">
                                        Update Setting
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Advance Table Widget 1-->
            </div>
        </div>
        <!--end::Row-->
        <!--begin::Row-->

        <!--end::Row-->



        <!--end::Dashboard-->
        <!--end::Container-->
    </div>
</div>
@endsection
