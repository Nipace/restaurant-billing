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
                                <span class="card-label font-weight-bolder text-dark">Table Management</span>
                                <span
                                    class="text-muted mt-3 font-weight-bold font-size-sm">{{ isset($table) ? 'Edit' : 'Create'}}
                                    tables</span>
                            </h3>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-0">
                            <form
                                action="{{ isset($table) ? route('tables.update', $table->id) : route('tables.store') }}"
                                method="POST">
                                @csrf
                                @if( isset($table))
                                @method('PUT')
                                @endif
                                <div class="form-group">
                                    <label for="name">Table Name</label>
                                    <input type="text" class="form-control" name="table_name"
                                        value="{{ isset($table) ? $table->table_name : '' }}">
                                    {{-- {{ $errors->first('name') }} --}}
                                    @error('table_name')
                                    <div class="alert-danger">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success">
                                        {{ isset($table) ? 'Update Table' : 'Add Table' }}

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