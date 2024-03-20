@extends('layouts.cashier')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Dashboard-->
            <!--begin::Row-->
            <div class="row mt-0 mt-lg-8">


                @foreach($stocks as $stock)
                <div class="col-md-3">

                    <div class="card card-custom gutter-b">
                        <!--begin::Body-->
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-center py-1">
                                <!--begin:Pic-->
                                <div class="symbol symbol-80 symbol-light-primary mr-5">
                                    <span class="symbol-label">
                                        <img src="{{ asset('storage/'. $stock->food->food_image) }}" class="h-50 align-self-center" alt="">
                                    </span>
                                </div>
                                <!--end:Pic-->
                                <!--begin:Title-->
                                <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                    <a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-h5">{{$stock->food->name}}</a>
                                    <span class="text-muted font-weight-bold font-size-lg">Stock for: {{$stock->from_date}}</span>
                                </div>
                                <!--end:Title-->
                                <!--begin:Stats-->
                                <div class="d-flex flex-column w-100 mt-5">
                                    <div class="progress progress-xs w-100">
                                        <div class="progress-bar bg-success" role="progressbar" style="width:{{(($stock->total_quantity-$stock->remaining_quantity)/$stock->total_quantity)*100 }}%;" aria-valuenow={{$stock->remaining_quantity}} aria-valuemin={{$stock->total_quantity - $stock->remaining_quantity}} aria-valuemax={{$stock->total_quantity}}></div>
                                    </div>
                                </div>
                                <!--end:Stats-->
                                <!--begin:Team-->
                                <div class="d-flex flex-row align-items-center mt-5">
                                    <div class="text-dark mr-2 text-center font-size-md pb-2"><b>Total Stock:</b> {{$stock->total_quantity}}</div>
                                    <div class="text-dark mr-2 text-center font-size-md pb-2"><b>Remaining Stock:</b> {{$stock->remaining_quantity}}</div>
                                    <div class="text-dark mr-2 text-center font-size-md pb-2"><b>Quantity Sold :</b> {{$stock->total_quantity-$stock->remaining_quantity}}</div>

                                    <!--end:Team-->
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                    </div>
                    <!--end::Body-->
                </div>

                @endforeach

            </div>
            <!--end::Row-->
            <!--begin::Row-->

            <!--end::Row-->



            <!--end::Dashboard-->
        </div>
        <!--end::Container-->
    </div>

    @endsection