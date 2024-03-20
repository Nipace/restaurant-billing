<div class="sidebar sidebar-left d-flex flex-row-auto flex-column" id="kt_sidebar">
	<!--begin::Aside Secondary Header-->
	<div class="sidebar-header flex-column-auto pt-5 pt-lg-19 pb-5 px-5 px-lg-10">
		<!--begin::Toolbar-->
		<div class="d-flex">
			<h2 class="card-label font-weight-bolder text-dark">Today's Stock</h2>

		</div>
		<!--end::Toolbar-->
	</div>
	<!--end::Aside Secondary Header-->
	<!--begin::Aside Secondary Content-->
	<div class="sidebar-content flex-column-fluid pb-10 pt-9 px-5 px-lg-10">
		@if($today_stocks->count()>0)
		<!--begin: Stats Widget 19-->
		@foreach($today_stocks as $key => $stock)

		<div class="card card-custom bg-light-success card-shadowless gutter-b">
			<!--begin::Body-->
			<div class="card-body my-3">
				<a href="#!" class="card-title font-weight-bolder text-success text-hover-state-dark font-size-h6 mb-4 d-block text-capitalize">{{ $stock->food->name }}</a>
				<div class="font-weight-bold text-muted font-size-sm">
					<span class="text-dark-75 font-size-h2 font-weight-bolder mr-2">{{$stock->total_quantity - $stock->remaining_quantity}}/{{$stock->total_quantity}} </span>items</div>

				<div class="progress progress-xs mt-7 bg-success-o-60">
					<div class="progress-bar bg-success" role="progressbar" style="width:{{(($stock->total_quantity-$stock->remaining_quantity)/$stock->total_quantity)*100 }}%;" aria-valuenow={{$stock->remaining_quantity}} aria-valuemin={{$stock->total_quantity - $stock->remaining_quantity}} aria-valuemax={{$stock->total_quantity}}></div>
				</div>
			</div>
			<!--end:: Body-->
		</div>
		@endforeach

		@else
		<span class="text-dark-75 font-weight-bolder pl-4">Oops! No food items for today</span>
		@endif

		<!--end: Stats:Widget 19-->

	</div>
	<!--end::Aside Secondary Content-->
</div>