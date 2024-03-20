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
                    <div class="card card-custom card-stretch card-shadowless gutter-b pb-5">
                        <!--begin::Header-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bolder text-dark">{{ Auth::user()->name }} Todays
                                    Collection</span>
                                <span class="text-muted mt-3 font-weight-bold font-size-sm">View todays
                                    collection</span>
                            </h3>
                            <div class="card-toolbar">
                                <a href="{{route('report.historyCurrentUser')}}"
                                    class="btn btn-sm btn-icon btn-light-primary">
                                    <i class="flaticon2-time"></i>
                                </a>
                            </div>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-0">
                            <!--begin::Table-->
                            <div class="table-responsive">
                                <table class="table table-head-custom table-vertical-center"
                                    id="kt_advance_table_widget_1">
                                    <thead>
                                        <!-- <th style="width:15%">Token Number</th> -->
                                        <th style="width:30%">Grand Total</th>
                                        <th style="width:30%">View Bill</th>
                                        <th style="width:25%">Status</th>

                                    </thead>

                                    <tbody>
                                        @foreach($orders as $key => $order)
                                        <tr>
                                            <!-- <th>{{ $order->token_no }}</th> -->
                                            <td>{{ $order->grand_total }}</td>

                                            <td class="pr-0 text-left">
                                                <a href="#" data-toggle="modal"
                                                    data-target={{"#detailModal".$order->id}}
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dollar  py-2"></i> Show Bill
                                                </a>
                                                <div class="modal fade" id={{"detailModal".$order->id}} tabindex="-1"
                                                    role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="detailModalLabel">Checkout
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table class="table table-bordered">
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Quantity</th>
                                                                        <th>Price</th>
                                                                        <th>Total</th>
                                                                        <th>Scheme</th>
                                                                    </tr>
                                                                    @foreach($order->foods as $key => $food)
                                                                    <tr>
                                                                        <td>{{ $food->name }}</td>
                                                                        <td>{{ $food->pivot->price }}</td>
                                                                        <td>{{ $food->pivot->quantity }}</td>
                                                                        <td>{{ $food->price*$food->pivot->quantity }}
                                                                        </td>
                                                                        <td>{{ $food->pivot->scheme }}</td>
                                                                    </tr>
                                                                    @endforeach
                                                                    <tr>
                                                                        <td colspan="5"><b>Grand Total</b>: Rs
                                                                            {{$order->grand_total}}</td>
                                                                    </tr>
                                                                </table>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                    class="btn btn-light-primary font-weight-bold "
                                                                    data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            @if($order->status==0)
                                            <td><a href="{{ route('order.cancel',$order->id) }}"
                                                    class="btn btn-danger btn-sm">Cancel Order</a></td>
                                            @else
                                            <td><span class="text-danger">Cancelled</span></td>
                                            @endif
                                        </tr>

                                        @endforeach
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