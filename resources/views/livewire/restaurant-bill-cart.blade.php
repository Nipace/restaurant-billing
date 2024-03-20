<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Page Layout-->
            <div class="row">

                <!--end::Aside-->
                <!--begin::Layout-->
                <div class="col-md-8">
                    <!--begin::Card-->
                    <div class="card card-custom card-stretch gutter-b">
                        <div class="card-body">
                            <!--begin::Engage Widget 15-->

                            <!--end::Engage Widget 15-->
                            <!--begin::Section-->
                            <div class="mb-11">
                                <!--begin::Heading-->
                                <div class="d-flex justify-content-between align-items-center mb-7">
                                    <h2 class="font-weight-bolder text-dark font-size-h3 mb-0">Foods</h2>
                                    <div class="form-group text-right">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" wire:model="searchTerm" placeholder="Search..." />
                                            <span><i class="flaticon2-search-1 icon-md"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <!--end::Heading-->
                                <!--begin::Products-->
                                @if($foods)

                                <div class="row">
                                    <!--begin::Product-->
                                    @foreach($foods as $key => $food)

                                    <div class="col-sm-6 col-lg-3">
                                        <!--begin::Card-->
                                        <div class="card card-custom card-shadowless">
                                            <div class="card-body p-0">
                                                <!--begin::Image-->
                                                <div class="overlay">
                                                    <div class="overlay-wrapper rounded bg-light text-center">
                                                        <img src="{{ asset('storage/'. $food->food_image) }}" alt="" class="mw-50 w-100px">
                                                    </div>
                                                    <div class="overlay-layer">

                                                        <a wire:click="addToCart({{$food->id}})" class="btn font-weight-bolder btn-sm btn-primary">Add To cart</a>

                                                    </div>
                                                </div>
                                                <!--end::Image-->
                                                <!--begin::Details-->
                                                <div class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
                                                    <a href="#" class="font-size-h5 text-capitalize font-weight-bolder text-dark-75 text-hover-primary mb-1">{{ $food->name }}</a>
                                                    {{--
                          <small><b> REMAINING STOCK: {{$stock->remaining_quantity}}</b></small>

                                                    <small><b> TOTAL STOCK: {{$stock->total_quantity}}</b></small> --}}

                                                    {{-- <div class="progress progress-xs mt-2 {{$color}}-o-60">

                                                    <div class="progress-bar {{$color}}" role="progressbar" style="width:{{(($stock->total_quantity-$stock->remaining_quantity)/$stock->total_quantity)*100 }}%;" aria-valuenow={{$stock->remaining_quantity}} aria-valuemin={{$stock->total_quantity - $stock->remaining_quantity}} aria-valuemax={{$stock->total_quantity}}></div>
                                                </div> --}}
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                                @endforeach
                                <!--end::Product-->


                            </div>
                            @else
                            <span class="text-dark-75 font-weight-bolder pl-4">Oops! No food items for today</span>

                            @endif

                            <!--end::Products-->
                        </div>
                        <!--end::Section-->

                    </div>
                </div>
                <!--end::Card-->
            </div>
            <div class="col-md-4" id="kt_profile_aside">

                <!--begin::List Widget 21-->
                <div class="card card-custom gutter-b ">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column mb-5">
                            <span class="card-label font-weight-bolder text-dark mb-1">View Items</span>
                        </h3>

                    </div>
                    <!--end::Header-->
                    @if($cartItems)
                    <!--begin::Body-->
                    <div class="card-body pt-2">
                        @foreach($cartItems as $key => $item)

                        <!--begin::Item-->
                        <div class="d-flex mb-1">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50 symbol-2by3 flex-shrink-0 mr-4">
                                <div class="d-flex flex-column">
                                    <div class="symbol-label mb-3" style="font-size:20px;">
                                        {{ $item['quantity']  }}
                                    </div>
                                    <div class="d-flex mb-8">
                                        <a wire:click="addToCart({{$item['id']}})" class="px-2 btn  btn-success mr-1"><i class="fas fa-plus py-2 "></i></a>
                                        <a wire:click="subToCart({{$item['id']}})" class="px-2 btn  btn-danger"><i class="fas fa-minus py-2"></i></a>

                                    </div>
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-2">{{$item['name']}}</a>

                                <span class="text-muted font-weight-bold font-size-lg">Price:
                                    <span class="text-dark-75 font-weight-bolder">Rs {{ $item['price'] }}</span></span>

                                <span class="text-muted font-weight-bold font-size-lg">Total:
                                    <span class="text-dark-75 font-weight-bolder">Rs
                                        {{\Cart::session(auth()->id())->get($item['id'])->getPriceSum()}}</span></span>

                            </div>
                            <!--end::Title-->
                            <div class="d-flex flex-column">
                                <a wire:click="removeCart({{$item['id']}})" class="font-weight-bolder btn py-2 font-size-sm">
                                    <img src="{{ asset('storage/icons/cancel.png') }}" alt="" width="20" height="20">
                                </a>
                            </div>
                        </div>
                        <!--end::Item-->
                        @endforeach

                        <hr />
                        <span class="text-muted font-weight-bold font-size-lg">Grand Total:
                            <span class="text-dark-75 font-weight-bolder">Rs
                                {{\Cart::session(auth()->id())->getTotal()}}</span></span>
                        <hr />
                        <a href="{{ route('billing.checkout') }}" class="btn btn-primary btn-block btn-lg rounded-0 " data-toggle="modal" data-target="#exampleModal">Proceed to Payment</a>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Checkout</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i aria-hidden="true" class="ki ki-close"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>Name</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                            </tr>
                                            @foreach($cartItems as $key => $item)
                                            <tr>
                                                <td>{{$item['name']}}</td>
                                                <td>{{ $item['quantity']  }}</td>
                                                <td>{{ $item['price'] }}</td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="3"><b>Grand Total</b>: Rs {{\Cart::session(auth()->id())->getTotal()}}</td>
                                            </tr>
                                        </table>

                                    </div>
                                    <div class="modal-footer">
                                        <form class="col-12" action="{{route('billing.checkout')}}" method="POST">
                                            @csrf
                                            <div class="form-group row">
                                                <div class="col-6 row">
                                                    <label class="col-6 text-right col-form-label">Scheme</label>
                                                    <div class="col-4">
                                                        <span class="switch switch-outline switch-icon switch-success">
                                                            <label>
                                                                <input type="checkbox" checked="checked" name="scheme" />
                                                                <span></span>
                                                            </label>
                                                        </span>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <label class="col-6 text-right col-form-label">Discount(%)</label>
                                                    <div class="col-6">
                                                        <input name="discount" type="number" class="form-control" min="0" max="100"> 
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-6">Choose Table</label>
                                                <div class="col-6">
                                                    <select name="table" class="form-control">

                                                        @foreach($tables as $table)
                                                        <option value="{{$table->table_name}}">{{$table->table_name}}</option>

                                                            @endforeach
                                                    </select>

                                                </div>
                                            </div>

                                            <button type="button" class="btn btn-light-primary font-weight-bold btn-lg" data-dismiss="modal">Edit Order</button>
                                            <button type="submit" class="btn btn-primary font-weight-bold btn-lg">Proceed</a>

                                        </form>
                                        <br>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @else
                    <div class="card-body">
                        <span class="text-dark-75 font-weight-bolder">No cart items</span>

                    </div>
                    @endif
                    <!--end::Body-->
                </div>
                <!--end::List Widget 21-->
            </div>
            <!--end::Layout-->
        </div>
        <!--end::Page Layout-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
</div>
</div>
</div>
<script>

</script>
