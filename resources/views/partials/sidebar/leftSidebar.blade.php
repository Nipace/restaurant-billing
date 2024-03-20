<div class="aside aside-left d-flex flex-column" id="kt_aside">
	<!--begin::Brand-->
	<div class="aside-brand d-flex flex-column align-items-center flex-column-auto pt-18 pb-10">
		<!--begin::Logo-->
		<div class="btn p-0 symbol symbol-60 symbol-light-primary" href="?page=index" id="kt_quick_user_toggle">
			<div class="symbol-label">
				<img alt="Logo" src="{{asset('assets/healthy-eating.png')}}" class="h-75 align-self-end" />
			</div>
		</div>
		<!--end::Logo-->
	</div>
	<div class="aside-nav d-flex flex-column align-items-center flex-column-fluid pb-10">
		<!--begin::Nav-->
		<ul class="nav flex-column">
			@role('Admin|Super-Admin|Tester')
			<!--begin::Item-->
			<li class="nav-item mb-2 " data-toggle="tooltip" data-placement="right" data-container="body"
				data-boundary="window" title="Dashboard">
				<a href="{{route('dashboard.index')}}"
					class="nav-link btn btn-icon btn-hover-text-primary btn-lg {{Route::is('dashboard.index')?'active':''}}">
					<span class="svg-icon svg-icon-xxl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
							height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<rect x="0" y="0" width="24" height="24" />
								<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
								<path
									d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
									fill="#000000" opacity="0.3" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</a>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body"
				data-boundary="window" title="User Management">
				<a href="{{route('users.index')}}"
					class="nav-link btn btn-icon btn-hover-text-primary btn-lg {{Route::is('users.index')?'active':''}}">
					<span class="svg-icon svg-icon-xxl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
							height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path
									d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
									fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path
									d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
									fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</a>
			</li>
			<!--end::Item-->
			@endrole

			@role('Admin|Super-Admin|Tester|User')
			<!--begin::Item-->
			<li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body"
				data-boundary="window" title="Table Management">
				<a href="{{route('tables.index')}}"
					class="nav-link btn btn-icon btn-hover-text-primary btn-lg  {{Route::is('tables.index')?'active':''}}">
					<span class="svg-icon svg-icon-xxl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/Shield-check.svg-->
						<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
							xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M6,8 L6,16 L18,16 L18,8 L6,8 Z M20,16 L21.381966,16 C21.7607381,16 22.1070012,16.2140024 22.2763932,16.5527864 L22.5,17 C22.6706654,17.3413307 22.5323138,17.7563856 22.190983,17.927051 C22.0950363,17.9750244 21.9892377,18 21.881966,18 L2.11803399,18 C1.73641461,18 1.42705098,17.6906364 1.42705098,17.309017 C1.42705098,17.2017453 1.45202663,17.0959467 1.5,17 L1.7236068,16.5527864 C1.89299881,16.2140024 2.23926193,16 2.61803399,16 L4,16 L4,8 C4,6.8954305 4.8954305,6 6,6 L18,6 C19.1045695,6 20,6.8954305 20,8 L20,16 Z" fill="#000000" fill-rule="nonzero"/>
        <polygon fill="#000000" opacity="0.3" points="6 8 6 16 18 16 18 8"/>
    </g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</a>
			</li>
			<!--begin::Item-->
			<li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body"
				data-boundary="window" title="Food Management">
				<a href="{{route('foods.index')}}"
					class="nav-link btn btn-icon btn-hover-text-primary btn-lg  {{Route::is('foods.index')?'active':''}}">
					<span class="svg-icon svg-icon-xxl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/Shield-check.svg-->
						<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
							xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

							<g id="Stockholm-icons-/-Food-/-Miso-soup" stroke="none" stroke-width="1" fill="none"
								fill-rule="evenodd">
								<rect id="bound" x="0" y="0" width="24" height="24"></rect>
								<path
									d="M2,14 L22,14 L22,14 C22,18.9705627 17.9705627,23 13,23 L11,23 C6.02943725,23 2,18.9705627 2,14 Z"
									id="Combined-Shape" fill="#000000"></path>
								<path
									d="M16.7233675,1.41763641 C17.1846056,1.68393238 17.3426375,2.27371529 17.0763415,2.73495343 C17.070507,2.74505905 17.0644896,2.75505793 17.0582922,2.76494514 L10.5379559,13.1673758 C10.3897629,13.4038004 10.08104,13.4805452 9.83939289,13.3410302 C9.59774579,13.2015152 9.50984729,12.8957809 9.64050046,12.6492297 L15.3891015,1.80123745 C15.6384827,1.33063867 16.2221417,1.15130634 16.6927405,1.40068748 C16.7030512,1.40615136 16.7132619,1.41180193 16.7233675,1.41763641 Z M21.8768598,4.21665558 C22.2332333,4.61244851 22.2012776,5.22219993 21.8054847,5.57857348 C21.796813,5.58638154 21.7880002,5.59403156 21.7790508,5.60151976 L12.3633147,13.4799245 C12.1493155,13.6589835 11.8319871,13.6365715 11.6452796,13.4292118 C11.458572,13.221852 11.4694527,12.9039193 11.6698998,12.7098092 L20.4893582,4.16917098 C20.8719568,3.79866796 21.4824663,3.80847334 21.8529693,4.19107192 C21.8610869,4.19945456 21.8690517,4.20798385 21.8768598,4.21665558 Z"
									id="Combined-Shape" fill="#000000" opacity="0.3"></path>
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</a>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			{{-- <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body"
				data-boundary="window" title="Inventory Management">
				<a href="{{route('stocks.index')}}"
			class="nav-link btn btn-icon btn-hover-text-primary btn-lg {{Route::is('stocks.index')?'active':''}}">
			<span class="svg-icon svg-icon-xxl">
				<!--begin::Svg Icon | path:assets/media/svg/icons/General/Shield-check.svg-->
				<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
					xmlns:xlink="http://www.w3.org/1999/xlink">

					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<rect x="0" y="0" width="24" height="24" />
						<path
							d="M5,2 L19,2 C20.1045695,2 21,2.8954305 21,4 L21,6 C21,7.1045695 20.1045695,8 19,8 L5,8 C3.8954305,8 3,7.1045695 3,6 L3,4 C3,2.8954305 3.8954305,2 5,2 Z M11,4 C10.4477153,4 10,4.44771525 10,5 C10,5.55228475 10.4477153,6 11,6 L16,6 C16.5522847,6 17,5.55228475 17,5 C17,4.44771525 16.5522847,4 16,4 L11,4 Z M7,6 C7.55228475,6 8,5.55228475 8,5 C8,4.44771525 7.55228475,4 7,4 C6.44771525,4 6,4.44771525 6,5 C6,5.55228475 6.44771525,6 7,6 Z"
							fill="#000000" opacity="0.3" />
						<path
							d="M5,9 L19,9 C20.1045695,9 21,9.8954305 21,11 L21,13 C21,14.1045695 20.1045695,15 19,15 L5,15 C3.8954305,15 3,14.1045695 3,13 L3,11 C3,9.8954305 3.8954305,9 5,9 Z M11,11 C10.4477153,11 10,11.4477153 10,12 C10,12.5522847 10.4477153,13 11,13 L16,13 C16.5522847,13 17,12.5522847 17,12 C17,11.4477153 16.5522847,11 16,11 L11,11 Z M7,13 C7.55228475,13 8,12.5522847 8,12 C8,11.4477153 7.55228475,11 7,11 C6.44771525,11 6,11.4477153 6,12 C6,12.5522847 6.44771525,13 7,13 Z"
							fill="#000000" />
						<path
							d="M5,16 L19,16 C20.1045695,16 21,16.8954305 21,18 L21,20 C21,21.1045695 20.1045695,22 19,22 L5,22 C3.8954305,22 3,21.1045695 3,20 L3,18 C3,16.8954305 3.8954305,16 5,16 Z M11,18 C10.4477153,18 10,18.4477153 10,19 C10,19.5522847 10.4477153,20 11,20 L16,20 C16.5522847,20 17,19.5522847 17,19 C17,18.4477153 16.5522847,18 16,18 L11,18 Z M7,20 C7.55228475,20 8,19.5522847 8,19 C8,18.4477153 7.55228475,18 7,18 C6.44771525,18 6,18.4477153 6,19 C6,19.5522847 6.44771525,20 7,20 Z"
							fill="#000000" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
			</a>
			</li> --}}
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body"
				data-boundary="window" title="Scheme Management">
				<a href="{{route('schemes.index')}}"
					class="nav-link btn btn-icon btn-hover-text-primary btn-lg  {{Route::is('schemes.index')?'active':''}}">
					<span class="svg-icon svg-icon-xxl">
						<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
							xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<rect x="0" y="0" width="24" height="24" />
								<path
									d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z"
									fill="#000000" opacity="0.3" />
								<path
									d="M13,5.06189375 C12.6724058,5.02104333 12.3386603,5 12,5 C11.6613397,5 11.3275942,5.02104333 11,5.06189375 L11,4 L10,4 C9.44771525,4 9,3.55228475 9,3 C9,2.44771525 9.44771525,2 10,2 L14,2 C14.5522847,2 15,2.44771525 15,3 C15,3.55228475 14.5522847,4 14,4 L13,4 L13,5.06189375 Z"
									fill="#000000" />
								<path
									d="M16.7099142,6.53272645 L17.5355339,5.70710678 C17.9260582,5.31658249 18.5592232,5.31658249 18.9497475,5.70710678 C19.3402718,6.09763107 19.3402718,6.73079605 18.9497475,7.12132034 L18.1671361,7.90393167 C17.7407802,7.38854954 17.251061,6.92750259 16.7099142,6.53272645 Z"
									fill="#000000" />
								<path
									d="M11.9630156,7.5 L12.0369844,7.5 C12.2982526,7.5 12.5154733,7.70115317 12.5355117,7.96165175 L12.9585886,13.4616518 C12.9797677,13.7369807 12.7737386,13.9773481 12.4984096,13.9985272 C12.4856504,13.9995087 12.4728582,14 12.4600614,14 L11.5399386,14 C11.2637963,14 11.0399386,13.7761424 11.0399386,13.5 C11.0399386,13.4872031 11.0404299,13.4744109 11.0414114,13.4616518 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z"
									fill="#000000" />
							</g>
						</svg>
					</span>
				</a>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body"
				data-boundary="window" title="Report Management">
				<a href="{{route('report.index')}}"
					class="nav-link btn btn-icon btn-hover-text-primary btn-lg  {{Route::is('report.index')?'active':''}}">
					<span class="svg-icon svg-icon-xxl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/Shield-check.svg-->
						<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
							xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<rect x="0" y="0" width="24" height="24" />
								<path
									d="M9,15 L7.5,15 C6.67157288,15 6,15.6715729 6,16.5 C6,17.3284271 6.67157288,18 7.5,18 C8.32842712,18 9,17.3284271 9,16.5 L9,15 Z M9,15 L9,9 L15,9 L15,15 L9,15 Z M15,16.5 C15,17.3284271 15.6715729,18 16.5,18 C17.3284271,18 18,17.3284271 18,16.5 C18,15.6715729 17.3284271,15 16.5,15 L15,15 L15,16.5 Z M16.5,9 C17.3284271,9 18,8.32842712 18,7.5 C18,6.67157288 17.3284271,6 16.5,6 C15.6715729,6 15,6.67157288 15,7.5 L15,9 L16.5,9 Z M9,7.5 C9,6.67157288 8.32842712,6 7.5,6 C6.67157288,6 6,6.67157288 6,7.5 C6,8.32842712 6.67157288,9 7.5,9 L9,9 L9,7.5 Z M11,13 L13,13 L13,11 L11,11 L11,13 Z M13,11 L13,7.5 C13,5.56700338 14.5670034,4 16.5,4 C18.4329966,4 20,5.56700338 20,7.5 C20,9.43299662 18.4329966,11 16.5,11 L13,11 Z M16.5,13 C18.4329966,13 20,14.5670034 20,16.5 C20,18.4329966 18.4329966,20 16.5,20 C14.5670034,20 13,18.4329966 13,16.5 L13,13 L16.5,13 Z M11,16.5 C11,18.4329966 9.43299662,20 7.5,20 C5.56700338,20 4,18.4329966 4,16.5 C4,14.5670034 5.56700338,13 7.5,13 L11,13 L11,16.5 Z M7.5,11 C5.56700338,11 4,9.43299662 4,7.5 C4,5.56700338 5.56700338,4 7.5,4 C9.43299662,4 11,5.56700338 11,7.5 L11,11 L7.5,11 Z"
									fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</a>
			</li>
			<!--end::Item-->
			<!--begin::Item-->
			<li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body"
				data-boundary="window" title="Bill Management">
				<a href="{{route('billing.index')}}"
					class="nav-link btn btn-icon btn-hover-text-primary btn-lg  {{Route::is('billing.index')?'active':''}}">
					<span class="svg-icon svg-icon-xxl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
							height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<rect x="0" y="0" width="24" height="24" />
								<path
									d="M2,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,17 C22,17.5522847 21.5522847,18 21,18 L2,18 C1.44771525,18 1,17.5522847 1,17 L1,7 C1,6.44771525 1.44771525,6 2,6 Z M11.5,16 C13.709139,16 15.5,14.209139 15.5,12 C15.5,9.790861 13.709139,8 11.5,8 C9.290861,8 7.5,9.790861 7.5,12 C7.5,14.209139 9.290861,16 11.5,16 Z"
									fill="#000000" opacity="0.3"
									transform="translate(11.500000, 12.000000) rotate(-345.000000) translate(-11.500000, -12.000000) " />
								<path
									d="M2,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,17 C22,17.5522847 21.5522847,18 21,18 L2,18 C1.44771525,18 1,17.5522847 1,17 L1,7 C1,6.44771525 1.44771525,6 2,6 Z M11.5,16 C13.709139,16 15.5,14.209139 15.5,12 C15.5,9.790861 13.709139,8 11.5,8 C9.290861,8 7.5,9.790861 7.5,12 C7.5,14.209139 9.290861,16 11.5,16 Z M11.5,14 C12.6045695,14 13.5,13.1045695 13.5,12 C13.5,10.8954305 12.6045695,10 11.5,10 C10.3954305,10 9.5,10.8954305 9.5,12 C9.5,13.1045695 10.3954305,14 11.5,14 Z"
									fill="#000000" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</a>
			</li>
			<!--end::Item-->
			@endrole
			@role('Super-Admin')
			<!--begin::Item-->
			<li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body"
				data-boundary="window" title="Settings">
				<a href="{{route('settings.index')}}"
					class="nav-link btn btn-icon btn-hover-text-primary btn-lg  {{Route::is('settings.index')?'active':''}}">
					<span class="svg-icon svg-icon-xxl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
							height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<rect opacity="0.200000003" x="0" y="0" width="24" height="24" />
								<path
									d="M4.5,7 L9.5,7 C10.3284271,7 11,7.67157288 11,8.5 C11,9.32842712 10.3284271,10 9.5,10 L4.5,10 C3.67157288,10 3,9.32842712 3,8.5 C3,7.67157288 3.67157288,7 4.5,7 Z M13.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L13.5,18 C12.6715729,18 12,17.3284271 12,16.5 C12,15.6715729 12.6715729,15 13.5,15 Z"
									fill="#000000" opacity="0.3" />
								<path
									d="M17,11 C15.3431458,11 14,9.65685425 14,8 C14,6.34314575 15.3431458,5 17,5 C18.6568542,5 20,6.34314575 20,8 C20,9.65685425 18.6568542,11 17,11 Z M6,19 C4.34314575,19 3,17.6568542 3,16 C3,14.3431458 4.34314575,13 6,13 C7.65685425,13 9,14.3431458 9,16 C9,17.6568542 7.65685425,19 6,19 Z"
									fill="#000000" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</a>
			</li>
			<!--end::Item-->
			@endrole
			<!--begin::Item-->
			{{-- <li class="nav-item mb-2" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Coupons">
					<a href="{{route('coupons.index')}}" class="nav-link btn btn-icon btn-hover-text-primary btn-lg "> <span
				class="svg-icon svg-icon-xxl">
				<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
					height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<rect x="0" y="0" width="24" height="24" />
						<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
						<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
						<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
						<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
			</a>
			</li> --}}
			<!--end::Item-->
		</ul>
		<!--end::Nav-->
	</div>

</div>