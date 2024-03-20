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
					<div class="card card-custom card-stretch card-shadowless gutter-b pb-3">
						<!--begin::Header-->
						<div class="card-header border-0 py-5">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label font-weight-bolder text-dark">Table</span>
								<span class="text-muted mt-3 font-weight-bold font-size-sm">Manage your table
									</span>
							</h3>
							<div class="card-toolbar">
							
								<a href="{{ route('tables.create') }}"
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
												<rect fill="#000000" opacity="0.3" x="2" y="11" width="20" height="2"
													rx="1" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>Add Tables</a>
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
											<th class="pr-0" style="width: 100px">Table Name</th>
											
											<th class="pr-0" style="min-width: 150px;text-align:right;">action</th>
										</tr>
									</thead>
									<tbody>

										@if($tables->count()>0)
										@foreach($tables as $table)

										<tr>

											<th class="pl-0" style="width: 20px">

											</th>
											
											<td class="pl-0">
												<a href="#"
													class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{ $table->table_name }}</a>

											</td>
									
											<td class="pr-0 ">


												{!! Form::open(['route' => ['tables.destroy',$table->id], 'method' => 'delete','class'=>'float-right px-2']) !!}
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
												<a href="{{ route('tables.edit',$table->id) }}"
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
										{{-- edit food modal --}}
										<div id="{{"edit".$table->id}}" class="modal fade" role="dialog"
											aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered modal-xl">
												<div class="modal-content" style="min-height: 180px;">
													<div class="modal-header py-5">
														<h5 class="modal-title">Edit a Food Category
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
																		action="{{ route('category.update',$table->id) }}"
																		method="POST" enctype="multipart/form-data">
																		@method('put')
																		@csrf

																		<div class="form-group">
																			<label for="name">Food Category</label>
																			<input type="text" class="form-control"
																				name="name"
																				value="{{ $table->name }}">
																			{{-- {{ $errors->first('name') }} --}}
																			@error('name')
																			<div class="alert-danger">{{ $message }}
																			</div>
																			@enderror


																		</div>
																		{{-- @if(isset($table))
                        <div class="form-group">
                <img src="{{ asset('storage/'.$table->image) }}" alt="" style="width:100%">
																</div>
																@endif --}}


																<div class="form-group">
																	<button class="btn btn-success">
																		Edit Category

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
							<tr>
								<th class="pl-0" style="width: 20px">

								</th>
								No tables
							</tr>
							@endif

							</tbody>
							</table>
						</div>
						<!--end::Table-->
					</div>
					<div id="add_category_modal" class="modal fade" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-xl">
							<div class="modal-content" style="min-height: 180px;">
								<div class="modal-header py-5">
									<h5 class="modal-title">Add a Food Category
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

												<form action="{{ route('category.store') }}" method="POST"
													enctype="multipart/form-data">
													@csrf

													<div class="form-group">
														<label for="name">Food Category</label>
														<input type="text" class="form-control" name="name" value="">
														{{-- {{ $errors->first('name') }} --}}
														@error('name')
														<div class="alert-danger">{{ $message }}</div>
														@enderror


													</div>
													{{-- @if(isset($table))
            <div class="form-group">
                <img src="{{ asset('storage/'.$table->image) }}" alt="" style="width:100%">
											</div>
											@endif --}}
											<div class="form-group">
												<label for="image">image</label>
												<input type="file" class="form-control" id="image" name="image">
											</div>

											<div class="form-group">
												<button class="btn btn-success">
													Add Category

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
