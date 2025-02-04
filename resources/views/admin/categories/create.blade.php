@extends('layouts.app')

@section('content')
<div class="card card-default ">
    <div class="card-header">
        {{ isset($category) ? 'Edit Category' : 'Create Category'}}
    </div>
    <div class="card-body">

        <form action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}"
            method="POST">
            @csrf
            @if( isset($category))
            @method('PUT')
            @endif
            <div class="form-group">
                <label for="name">name</label>
                <input type="text" class="form-control" name="name"
                    value="{{ isset($category) ? $category->name : '' }}">
                    {{-- {{ $errors->first('name') }} --}}
                                        @error('name')
            <div class="alert-danger">{{ $message }}</div>
            @enderror
            
            </div>
            <div class="form-group">
                <button class="btn btn-success">
                    {{ isset($category) ? 'Update Category' : 'Add Category' }}

                </button>
            </div>

        </form>
    </div>
</div>
@endsection
