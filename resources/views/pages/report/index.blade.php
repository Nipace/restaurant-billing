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
                                <span class="card-label font-weight-bolder text-dark">Report Management</span>
                                <span class="text-muted mt-3 font-weight-bold font-size-sm">View your reports</span>
                            </h3>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-0 pb-5">
                            <!--begin::Table-->
                            <div class="table-responsive">
                                <table class="table table-head-custom table-vertical-center"
                                    id="kt_advance_table_widget_1">
                                    <thead>
                                        <th>Title</th>
                                        <th>Start Date</th>
                                        <th>End Date </th>
                                        <th>Submit</th>
                                    </thead>

                                    <tbody>
                                        {{-- <tr>
                                            <th>Stocks Report</th>
                                            <form action="{{ route('report.stocks') }}" method="GET">
                                        <td><input type="date" name="start_date"></td>
                                        <td><input type="date" name="end_date"></td>
                                        <th><input type="submit" class="btn btn-primary"></th>
                                        </form>
                                        </tr> --}}
                                        <tr>
                                            <th>Orders Report</th>
                                            <form action="{{ route('report.orders') }}" method="GET">
                                                <td><input type="date" name="start_date"></td>
                                                <td><input type="date" name="end_date"></td>
                                                <th><input type="submit" class="btn btn-primary"></th>
                                            </form>
                                        </tr>
                                        <tr>
                                            <th>User Wise Report</th>
                                            <form action="{{ route('report.users') }}" method="GET">
                                                <td><input type="date" name="start_date"></td>
                                                <td><input type="date" name="end_date"></td>
                                                <th class="d-flex flex-row">
                                                    <select class="form-control mr-2" id="user_id" name="user_id">

                                                        @foreach($users as $key => $user)
                                                        <option value="{{$key}}">
                                                            {{$user}}</option>
                                                        @endforeach
                                                    </select>
                                                    <input type="submit" class="btn btn-primary btn-sm"></th>
                                            </form>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!--end::Table-->
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