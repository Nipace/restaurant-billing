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
                            <form action="{{ route('foods.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="name">Food Name</label>
                                    <input type="text" class="form-control" id="" name="name" required>
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rs</span>
                                        </div>
                                        <input type="number" class="form-control" name='price' min="0" required /><br>
                                        @error('price')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                @role('Super-Admin')
                               {{-- <div class="form-group">
                                    <label for="image">Upload food image</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>--}}
                                @endrole


                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select name="category" id="category" class="form-control" required>
                                        <option value="">
                                            @foreach($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{$category->name}}
                                        </option>
                                        @endforeach
                                        </option>
                                    </select>
                                    @error('category')
                                    <div class="text-danger">{{ $message }}</div>
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