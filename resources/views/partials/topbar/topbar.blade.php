<div id="kt_header" class="header header-fixed">
	<!--begin::Header Wrapper-->
	<div class="header-wrapper rounded-top-xl d-flex flex-grow-1 align-items-center">
		<!--begin::Container-->
		<div class="container-fluid d-flex align-items-center justify-content-end justify-content-lg-between flex-wrap">
			<!--begin::Menu Wrapper-->
			<div class="header-menu-wrapper header-menu-wrapper-left py-lg-2" id="kt_header_menu_wrapper">
				<!--begin::Menu-->
				<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
					<!--begin::Nav-->
					<ul class="menu-nav">
						<li class="menu-item {{Route::is('dashboard.index')?'menu-item-active':''}} " aria-haspopup="true">
							<a href="{{route('dashboard.index')}}" class="menu-link">
								<span class="menu-text">Dashboard</span>
							</a>
						</li>
						<li class="menu-item {{Route::is('billing.index')?'menu-item-active':''}}" aria-haspopup="true">
							<a href="{{route('billing.index')}}" class="menu-link ">
								<span class="menu-text">Billing</span>

							</a>

						</li>
						{{-- <li class="menu-item {{Route::is('generalstocks.index')?'menu-item-active':''}}" aria-haspopup="true">
							<a href="{{route('generalstocks.index')}}" class="menu-link ">
								<span class="menu-text">Show Stock</span>
							</a>

						</li> --}}
						<li class="menu-item {{Route::is('report.currentUserCollection')?'menu-item-active':''}}" aria-haspopup="true">
							<a href="{{route('report.currentUserCollection')}}" class="menu-link ">
								<span class="menu-text">View Billing Details</span>
							</a>

						</li>



					</ul>
				</div>
			</div>

		</div>
		<!--end::Container-->
	</div>
	<!--end::Header Wrapper-->
</div>