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
								<span class="text-muted mt-3 font-weight-bold font-size-sm">Create food items</span>
							</h3>

						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body py-0">
							<form action="{{ route('foods.update',$food->id)}}" method="POST"
								enctype="multipart/form-data">
								@csrf
								@method('PUT')
								<div class="form-group">
									<label for="name">Title</label>
									<input type="text" class="form-control" id="" name="name" value="{{ $food->name }}"
										required>
									@error('name')
									<div class="text-danger">{{ $message }}
									</div>
									@enderror
								</div>
								<div class="form-group">
									<label for="price">Price</label>
									<input type="number" class="form-control" id="price" name='price'
										value="{{ $food->price }}" required>
									@error('price')
									<div class="text-danger">{{ $message }}
									</div>
									@enderror
								</div>
								{{-- <div class="form-group">
																			<label for="image">image</label>
																			<input type="{{ isset($food) ? 'hidden' : 'file'}}" class="form-control" id="image" name="image">
						</div> --}}


						<div class="form-group">
							<label for="category">Category</label>
							<select name="category" id="category" class="form-control" required>
								<option value="">
									@foreach($categories as $category)
								<option value="{{ $category->id }}" @if(isset($food)) @if($category->id ===
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
							<div class="text-danger">{{ $message }}</div>
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
				<!--end::Body-->
			</div>
			<!--end::Advance Table Widget 1-->
		</div>
	</div>
	<!--end::Row-->
	<!--begin::Row-->

	<!--end::Row-->



	<!--end::Dashboard-->
	<!--end::Container-->
</div>
</div>
@endsection