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
								<span class="card-label font-weight-bolder text-dark">Scheme Management</span>
								<span class="text-muted mt-3 font-weight-bold font-size-sm">Manage your schemes</span>
							</h3>
							<div class="card-toolbar">
								<a data-target="#add_coupon_modal" data-toggle="modal"
									class="btn btn-success font-weight-bolder font-size-sm mx-3">
									<span class="svg-icon svg-icon-md svg-icon-white  ">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path
													d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
													fill="#000000" fill-rule="nonzero" opacity="0.3" />
												<path
													d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
													fill="#000000" fill-rule="nonzero" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>Create Schemes</a>

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
										<tr class="text-left">
											<th class="pl-0" style="width: 20px">

											</th>
											<th class="pr-0" style="width: 30px"></th>
											<th style="min-width: 200px"> Name</th>
											<th style="min-width: 150px"> Code</th>
											<th style="min-width: 150px"> Type</th>
											<th style="min-width: 150px"> Value</th>
											<th style="min-width: 150px"> Active</th>
											<th class="pr-0 text-right" style="min-width: 150px">action</th>
										</tr>
									</thead>

									<tbody>
										@if($coupons->count()>0)
										@foreach($coupons as $coupon)
										<tr>
											<th class="pl-0" style="width: 20px">

											</th>
											<td class="pr-0">

											</td>
											<td class="pl-0">
												<a href="#"
													class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{$coupon->name}}</a>
												{{-- <span class="text-muted font-weight-bold text-muted d-block">HTML, JS, ReactJS</span> --}}
											</td>
											<td>
												<span
													class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $coupon->code }}</span>
												{{-- <span class="text-muted font-weight-bold">Web, UI/UX Design</span> --}}
											</td>
											<td>
												<span
													class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $coupon->type}}</span>
											</td>
											<td>
												<span
													class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $coupon->value}}</span>
											</td>
											<td>
												<span
													class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $coupon->status===0 ? 'Inactive' : 'Active' }}</span>
											</td>
											<td class="pr-0 text-right">
												<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
													<span class="svg-icon svg-icon-md svg-icon-primary">
														<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
														<svg xmlns="http://www.w3.org/2000/svg"
															xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
															height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none"
																fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path
																	d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
																	fill="#000000" />
																<path
																	d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
																	fill="#000000" opacity="0.3" />
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
												</a>
												<a href="#" data-toggle="modal" data-target="#{{"edit".$coupon->id}}"
													class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
													<span class="svg-icon svg-icon-md svg-icon-primary">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
														<svg xmlns="http://www.w3.org/2000/svg"
															xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
															height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none"
																fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path
																	d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
																	fill="#000000" fill-rule="nonzero"
																	transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
																<path
																	d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
																	fill="#000000" fill-rule="nonzero" opacity="0.3" />
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
												</a>
												<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
													<span class="svg-icon svg-icon-md svg-icon-primary">
														<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
														<svg xmlns="http://www.w3.org/2000/svg"
															xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
															height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none"
																fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path
																	d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
																	fill="#000000" fill-rule="nonzero" />
																<path
																	d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
																	fill="#000000" opacity="0.3" />
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
												</a>
											</td>
										</tr>

										<div id="{{"edit".$coupon->id}}" class="modal fade" role="dialog"
											aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered modal-xl">
												<div class="modal-content" style="min-height: 180px;">
													<div class="modal-header py-5">
														<h5 class="modal-title">Edit a Coupon
															<span class="d-block text-muted font-size-sm"></span></h5>
														<button type="button" class="close" data-dismiss="modal"
															aria-label="Close">
															<i aria-hidden="true" class="ki ki-close"></i>
														</button>
													</div>
													<div class="modal-body">
														<!--begin: Search Form-->
														<!--begin::Search Form-->
														<div class="mb-5">
															<div class="row align-items-center">
																<div class="col-lg-9 col-xl-8">

																	<form
																		action="{{ route('coupons.update',$coupon->id)}}"
																		method="POST">
																		@csrf
																		@method('PUT')
																		<div class="form-group">
																			<label for="name">Name</label>
																			<input type="text" class="form-control"
																				id="" name="name"
																				value="{{ $coupon->name }}">
																			@error('name')
																			<div class="alert-danger">{{ $message }}
																			</div>
																			@enderror
																		</div>
																		<div class="form-group">
																			<label for="code">Code</label>
																			<input type="text" class="form-control"
																				id="" name="code"
																				value="{{ $coupon->code }}">
																			@error('code')
																			<div class="alert-danger">{{ $message }}
																			</div>
																			@enderror
																		</div>
																		<div class="form-group">
																			<label for="type">Type</label>
																			<input type="text" class="form-control"
																				id="" name="type"
																				value="{{ $coupon->type }}">
																			@error('type')
																			<div class="alert-danger">{{ $message }}
																			</div>
																			@enderror
																		</div>
																		<div class="form-group">
																			<label for="value">Value</label>
																			<input type="text" class="form-control"
																				id="" name="value"
																				value="{{ $coupon->value }}">
																			@error('value')
																			<div class="alert-danger">{{ $message }}
																			</div>
																			@enderror
																		</div>
																		<div class="form-group">
																			<label for="value">Description</label>
																			<input type="text-area" class="form-control"
																				id="" name="description"
																				value="{{ $coupon->description }}">
																			@error('description')
																			<div class="alert-danger">{{ $message }}
																			</div>
																			@enderror
																		</div>
																		<div class="form-group">
																			<label for="value">Status</label>
																			<input type="checkbox" class="form-control"
																				id="" name="status" @if($coupon->status
																			=== 1)
																			checked
																			@endif
																			value="{{ $coupon->status }}">
																			@error('status')
																			<div class="alert-danger">{{ $message }}
																			</div>
																			@enderror
																		</div>






																		<div class="form-group">
																			<button class="btn btn-success"
																				type="submit">
																				Update Scheme
																			</button>
																		</div>
																	</form>
																</div>

															</div>
														</div>

													</div>
												</div>
											</div>
										</div>

										@endforeach
										@else
										<p>no scheme to show</p>
										@endif

									</tbody>
								</table>
							</div>
							<!--end::Table-->
						</div>
						<div id="add_coupon_modal" class="modal fade" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-xl">
								<div class="modal-content" style="min-height: 180px;">
									<div class="modal-header py-5">
										<h5 class="modal-title">Add a Coupon
											<span class="d-block text-muted font-size-sm"></span></h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<i aria-hidden="true" class="ki ki-close"></i>
										</button>
									</div>
									<div class="modal-body">
										<!--begin: Search Form-->
										<!--begin::Search Form-->
										<div class="mb-5">
											<div class="row align-items-center">
												<div class="col-lg-9 col-xl-8">

													<form action="{{ route('coupons.store')}}" method="POST">
														@csrf
														<div class="form-group">
															<label for="name">Name</label>
															<input type="text" class="form-control" id="" name="name">
															@error('name')
															<div class="alert-danger">{{ $message }}</div>
															@enderror
														</div>
														<div class="form-group">
															<label for="code">Code</label>
															<input type="text" class="form-control" id="" name="code">
															@error('code')
															<div class="alert-danger">{{ $message }}</div>
															@enderror
														</div>
														<div class="form-group">
															<label for="type">Type</label>
															<input type="text" class="form-control" id="" name="type">

															@error('type')
															<div class="alert-danger">{{ $message }}</div>
															@enderror
														</div>
														<div class="form-group">
															<label for="value">Value</label>
															<input type="text" class="form-control" id="" name="value">
															@error('value')
															<div class="alert-danger">{{ $message }}</div>
															@enderror
														</div>
														<div class="form-group">
															<label for="description">Description</label>
															<input type="text-area" class="form-control" id=""
																name="description">
															@error('description')
															<div class="alert-danger">{{ $message }}</div>
															@enderror
														</div>

														<div class="form-group">
															<label for="status">Status</label>
															<input type="checkbox" class="form-control" id=""
																name="status">
															@error('status')
															<div class="alert-danger">{{ $message }}</div>
															@enderror
														</div>





														<div class="form-group">
															<button class="btn btn-success" type="submit">
																Create Scheme
															</button>
														</div>
													</form>
												</div>

											</div>
										</div>
										<!--end::Search Form-->
										<!--end: Search Form-->
										<!--begin: Datatable-->
										<!--end: Datatable-->
									</div>
								</div>
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
</div>


@endsection