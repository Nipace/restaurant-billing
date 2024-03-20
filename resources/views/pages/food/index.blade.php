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
								<span class="card-label font-weight-bolder text-dark">Food Management</span>
								<span class="text-muted mt-3 font-weight-bold font-size-sm">Manage your food
									items</span>
							</h3>
							<div class="card-toolbar">
								<a href="{{route('category.index')}}"
									class="btn btn-success font-weight-bolder font-size-sm mx-3">
									<span class="svg-icon svg-icon-md svg-icon-white  ">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path
													d="M12.5,19 C8.91014913,19 6,16.0898509 6,12.5 C6,8.91014913 8.91014913,6 12.5,6 C16.0898509,6 19,8.91014913 19,12.5 C19,16.0898509 16.0898509,19 12.5,19 Z M12.5,16.4 C14.6539105,16.4 16.4,14.6539105 16.4,12.5 C16.4,10.3460895 14.6539105,8.6 12.5,8.6 C10.3460895,8.6 8.6,10.3460895 8.6,12.5 C8.6,14.6539105 10.3460895,16.4 12.5,16.4 Z M12.5,15.1 C11.0640597,15.1 9.9,13.9359403 9.9,12.5 C9.9,11.0640597 11.0640597,9.9 12.5,9.9 C13.9359403,9.9 15.1,11.0640597 15.1,12.5 C15.1,13.9359403 13.9359403,15.1 12.5,15.1 Z"
													fill="#000000" opacity="0.3" />
												<path
													d="M22,13.5 L22,13.5 C22.2864451,13.5 22.5288541,13.7115967 22.5675566,13.9954151 L23.0979976,17.8853161 C23.1712756,18.4226878 22.7950533,18.9177172 22.2576815,18.9909952 C22.2137086,18.9969915 22.1693798,19 22.125,19 L22.125,19 C21.5576012,19 21.0976335,18.5400324 21.0976335,17.9726335 C21.0976335,17.9415812 21.0990414,17.9105449 21.1018527,17.8796201 L21.4547321,13.9979466 C21.4803698,13.7159323 21.7168228,13.5 22,13.5 Z"
													fill="#000000" opacity="0.3" />
												<path d="M24,5 L24,12 L21,12 L21,8 C21,6.34314575 22.3431458,5 24,5 Z"
													fill="#000000"
													transform="translate(22.500000, 8.500000) scale(-1, 1) translate(-22.500000, -8.500000) " />
												<path
													d="M0.714285714,5 L1.03696911,8.32873399 C1.05651593,8.5303749 1.22598532,8.68421053 1.42857143,8.68421053 C1.63115754,8.68421053 1.80062692,8.5303749 1.82017375,8.32873399 L2.14285714,5 L2.85714286,5 L3.17982625,8.32873399 C3.19937308,8.5303749 3.36884246,8.68421053 3.57142857,8.68421053 C3.77401468,8.68421053 3.94348407,8.5303749 3.96303089,8.32873399 L4.28571429,5 L5,5 L5,8.39473684 C5,9.77544872 3.88071187,10.8947368 2.5,10.8947368 C1.11928813,10.8947368 -7.19089982e-16,9.77544872 -8.8817842e-16,8.39473684 L0,5 L0.714285714,5 Z"
													fill="#000000" />
												<path
													d="M2.5,12.3684211 L2.5,12.3684211 C2.90055463,12.3684211 3.23115721,12.6816982 3.25269782,13.0816732 L3.51381042,17.9301218 C3.54396441,18.4900338 3.11451066,18.9683769 2.55459863,18.9985309 C2.53641556,18.9995101 2.51820943,19 2.5,19 L2.5,19 C1.93927659,19 1.48472045,18.5454439 1.48472045,17.9847204 C1.48472045,17.966511 1.48521034,17.9483049 1.48618958,17.9301218 L1.74730218,13.0816732 C1.76884279,12.6816982 2.09944537,12.3684211 2.5,12.3684211 Z"
													fill="#000000" opacity="0.3" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>Manage Category</a>
								<a href="{{ route('foods.create') }}"
									class="btn btn-primary font-weight-bolder font-size-sm">
									<span class="svg-icon svg-icon-md svg-icon-white">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
										<svg xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
											viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path
													d="M15,15 L15.9974233,16.1399123 C16.3611054,16.555549 16.992868,16.5976665 17.4085046,16.2339844 C17.4419154,16.20475 17.4733423,16.1733231 17.5025767,16.1399123 L18.5,15 L21,15 C20.4185426,17.9072868 17.865843,20 14.9009805,20 L9.09901951,20 C6.13415704,20 3.58145737,17.9072868 3,15 L15,15 Z"
													fill="#000000" />
												<path
													d="M21,9 L3,9 L3,9 C3.58145737,6.09271316 6.13415704,4 9.09901951,4 L14.9009805,4 C17.865843,4 20.4185426,6.09271316 21,9 Z"
													fill="#000000" />
												<rect fill="#000000" opacity="0.3" x="2" y="11" width="20" height="2" rx="1" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>Add Food Item</a>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pb-5">
							<!--begin::Table-->
							<div class="table-responsive">
								<table class="table" id="kt_advance_table_widget_1">
									<thead>
										<tr class="text-left">

											<th style="width:10%">#</th>
											<th style="width:40%">Food Name</th>
											<th style="width:15%">Category</th>
											<th style="width:15%">Price</th>
											<th style="width:20%;text-align:right">Actions</th>
										</tr>
									</thead>

									<tbody>
										@if($foods->count()>0)
										@foreach($foods as $food)
										<tr>

											<td class="pr-0">
												<div class="symbol symbol-50 symbol-light mt-1">
													<span class="symbol-label">
														<img src="{{ asset('storage/'. $food->food_image) }}"
															class="h-75 align-self-end" alt="" />
													</span>
												</div>
											</td>
											<td class="pl-0">
												<a href="#"
													class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{$food->name}}</a>
												{{-- <span class="text-muted font-weight-bold text-muted d-block">HTML, JS, ReactJS</span> --}}
											</td>
											<td>
												<span
													class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $food->category->name }}</span>
												{{-- <span class="text-muted font-weight-bold">Web, UI/UX Design</span> --}}
											</td>
											<td>
												<span class="text-dark-75 font-weight-bolder d-block font-size-lg">Rs
													{{ $food->price}}</span>
											</td>
											<td class="pr-0 ">
												<!-- <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
													<span class="svg-icon svg-icon-md svg-icon-primary"> -->
												<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
												<!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
																<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
															</g>
														</svg> -->
												<!--end::Svg Icon-->
												<!-- </span>
												</a> -->
												{!! Form::open(['route' => ['foods.destroy',$food->id], 'method' => 'delete','class'=>'float-right px-2']) !!}
                                                {!! Form::button(' <span class="svg-icon svg-icon-md svg-icon-primary">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>', ['type' => 'submit', 'class' => 'btn btn-icon btn-light btn-hover-primary btn-sm ','onclick' => "return confirm('Confirm Delete?')"]) !!}

                                                {!! Form::close() !!}	
												<a href="{{ route('foods.edit',$food->id) }}"
													class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3 float-right">
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
					
											</td>
										</tr>

										<div id="{{"edit".$food->id}}" class="modal fade" role="dialog"
											aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered modal-xl">
												<div class="modal-content" style="min-height: 180px;">
													<div class="modal-header py-5">
														<h5 class="modal-title">Edit a Food Item
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

																	<form action="{{ route('foods.update',$food->id)}}"
																		method="POST" enctype="multipart/form-data">
																		@csrf
																		@method('PUT')
																		<div class="form-group">
																			<label for="name">Title</label>
																			<input type="text" class="form-control"
																				id="" name="name"
																				value="{{ $food->name }}">
																			@error('name')
																			<div class="alert-danger">{{ $message }}
																			</div>
																			@enderror
																		</div>
																		<div class="form-group">
																			<label for="price">Price</label>
																			<input type="number" class="form-control"
																				id="price" name='price'
																				value="{{ $food->price }}">
																			@error('price')
																			<div class="alert-danger">{{ $message }}
																			</div>
																			@enderror
																		</div>
																		{{-- <div class="form-group">
																			<label for="image">image</label>
																			<input type="{{ isset($food) ? 'hidden' : 'file'}}" class="form-control" id="image" name="image">
																</div> --}}


																<div class="form-group">
																	<label for="category">Category</label>
																	<select name="category" id="category"
																		class="form-control">
																		<option value="">
																			@foreach($categories as $category)
																		<option value="{{ $category->id }}"
																			@if(isset($food)) @if($category->id ===
																			$food->category_id)
																			selected
																			@endif
																			@endif
																			>
																			{{$category->name}}
																		</option>
																		@endforeach
																		</option>
																	</select>
																	@error('category_id')
																	<div class="alert-danger">{{ $message }}</div>
																	@enderror
																</div>



																<div class="form-group">
																	<button class="btn btn-success" type="submit">
																		Update Food Item
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
							<p>no food to show</p>
							@endif

							</tbody>
							</table>
						</div>
						<!--end::Table-->
					</div>
					<div id="add_food_modal" class="modal fade" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-xl">
							<div class="modal-content" style="min-height: 180px;">
								<div class="modal-header py-5">
									<h5 class="modal-title">Add a Food Item
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

												<form action="{{ route('foods.store') }}" method="POST"
													enctype="multipart/form-data">
													@csrf

													<div class="form-group">
														<label for="name">Food Name</label>
														<input type="text" class="form-control" id="" name="name"
															value="">
														@error('name')
														<div class="alert-danger">{{ $message }}</div>
														@enderror
													</div>
													<div class="form-group">
														<label for="price">Price</label>
														<div class="input-group">
															<div class="input-group-prepend">
																<span class="input-group-text">Rs</span>
																<span class="input-group-text">0.00</span>
															</div>
															<input type="number" class="form-control" name='price'
																aria-label="Amount (to the nearest rupee)" min="0" />
															@error('price')
															<div class="alert-danger">{{ $message }}</div>
															@enderror
														</div>
													</div>

													<div class="form-group">
														<label for="image">Upload food image</label>
														<input type="file" class="form-control" id="image" name="image">
													</div>


													<div class="form-group">
														<label for="category">Category</label>
														<select name="category" id="category" class="form-control">
															<option value="">
																@foreach($categories as $category)
															<option value="{{ $category->id }}">
																{{$category->name}}
															</option>
															@endforeach
															</option>
														</select>
														@error('category_id')
														<div class="alert-danger">{{ $message }}</div>
														@enderror
													</div>



													<div class="form-group">
														<button class="btn btn-success" type="submit">
															Create Food
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