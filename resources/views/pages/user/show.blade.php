@extends('layouts.app')

@section('content')
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
		
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Dashboard-->
								<!--begin::Row-->
								<div class="row mt-0 mt-lg-8">
                                <div class="flex-row-fluid ml-lg-8">
										<!--begin::Card-->
										<div class="card card-custom card-stretch">
											<!--begin::Header-->
											<div class="card-header py-3">
												<div class="card-title align-items-start flex-column">
													<h3 class="card-label font-weight-bolder text-dark">Personal Information</h3>
													<span class="text-muted font-weight-bold font-size-sm mt-1">See your personal informaiton</span>
												</div>
									
											</div>
											<!--end::Header-->
											<!--begin::Form-->
											<form class="form">
												<!--begin::Body-->
												<div class="card-body">
													<div class="row">
														<label class="col-xl-3"></label>
												
													</div>
									
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Name</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-lg form-control-solid" disabled type="text" value="{{Auth::user()->name}}">
														</div>
													</div>
											
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Your Role</label>
														<div class="col-lg-9 col-xl-6">
															<input class="form-control form-control-lg form-control-solid" type="text" value="{{Auth::user()->roles->pluck('name')->first()}}">
														</div>
                                                    </div>
										
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
														<div class="col-lg-9 col-xl-6">
															<div class="input-group input-group-lg input-group-solid">
															
																<input type="text" class="form-control form-control-lg form-control-solid" value="{{Auth::user()->email}}" placeholder="Email">
															</div>
														</div>
													</div>
											
												</div>
												<!--end::Body-->
											</form>
											<!--end::Form-->
										</div>
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
