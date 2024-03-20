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
								<span class="card-label font-weight-bolder text-dark">Inventory Management</span>
								<span class="text-muted mt-3 font-weight-bold font-size-sm">Manage your Stocks</span>
							</h3>
							<div class="card-toolbar">

								<a href="{{ route('stocks.create') }}"
									class="btn btn-primary font-weight-bolder font-size-sm">
									<span class="svg-icon svg-icon-md svg-icon-white">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path
													d="M22,13.9146471 L22,19 C22,20.1045695 21.1045695,21 20,21 L14,21 C14,19.8954305 13.1045695,19 12,19 C10.8954305,19 10,19.8954305 10,21 L4,21 C2.8954305,21 2,20.1045695 2,19 L2,7 L22,7 L22,11.0853529 C21.8436105,11.0300771 21.6753177,11 21.5,11 C20.6715729,11 20,11.6715729 20,12.5 C20,13.3284271 20.6715729,14 21.5,14 C21.6753177,14 21.8436105,13.9699229 22,13.9146471 Z M9,17 C11.209139,17 13,15.209139 13,13 C13,10.790861 11.209139,9 9,9 C6.790861,9 5,10.790861 5,13 C5,15.209139 6.790861,17 9,17 Z M18,18 C18.5522847,18 19,17.5522847 19,17 C19,16.4477153 18.5522847,16 18,16 C17.4477153,16 17,16.4477153 17,17 C17,17.5522847 17.4477153,18 18,18 Z M5,21 C5.55228475,21 6,20.5522847 6,20 C6,19.4477153 5.55228475,19 5,19 C4.44771525,19 4,19.4477153 4,20 C4,20.5522847 4.44771525,21 5,21 Z"
													fill="#000000" />
												<path
													d="M19.5954729,5.83476152 L4.60883918,4.07162814 C4.23525261,4.02767678 3.86860536,4.19709197 3.65994764,4.51007855 L2,7 C15.3333333,7 22,7 22,7 C22,7 22,7 22,7 L22,7 C21.352294,6.35229396 20.5051936,5.94178748 19.5954729,5.83476152 Z"
													fill="#000000" opacity="0.3" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>Add new Stock</a>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pb-5">
							<!--begin::Table-->
							<div class="table-responsive">
								@if($stocks->count()>0)
								<table class="table " id="kt_advance_table_widget_1">
									<thead>
										<th style="width:10%">#</th>
										<th style="width:30%">Food</th>
										<th style="width:20%">Quantity</th>
										<th style="width:20%">Stock Date</th>
										<th style="width:20%;">Actions</th>

									</thead>
									<tbody>





										@foreach($stocks as $stock)
										<tr>

											<td class="pr-0">
												<div class="symbol symbol-50 symbol-light mt-1">
													<span class="symbol-label">
														<img src="{{ asset('storage/'. $stock->food->food_image) }}"
															class="h-75 align-self-end" alt="" />
													</span>
												</div>
											</td>
											<td>
												<span class="text-dark-75 font-weight-bolder d-block font-size-lg">
													{{ $stock->food->name }}</span>

											</td>
											<td>
												<span class="text-dark-75 font-weight-bolder d-block font-size-lg">
													{{$stock->total_quantity - $stock->remaining_quantity}}/{{$stock->total_quantity}}
													items</span>
											</td>

											<td>
												<span class="text-dark-75 font-weight-bolder d-block font-size-lg">
													{{ $stock->from_date }}</span>
											</td>


											<td>
												<a href="{{ route('stocks.edit',$stock->id) }}"
													class="btn btn-info btn-sm">Update Stock</a>
											</td>
										</tr>







										{{-- <td>
                            <form action="{{ route('stocks.destroy',$stock->id) }}" method="POST">

										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger btn-sm">
											Delete
										</button>
										</form>
										</td> --}}

										@endforeach
									</tbody>
								</table>
								@else
								<tr>
									<td>No stocks to display. <a href="{{route('stocks.create')}}">Click here</a> to add
										a stock.</td>
								</tr>
								@endif

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
	</div>
	<!--end::Container-->
</div>

@endsection