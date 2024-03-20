@extends('layouts.app')

@section('content')
<div class="card card-default">
    <div class="card-header">
        {{ isset($food) ? 'Edit Food' : 'Create Food' }}
    </div>
    <div class="card-body">

        <form action="{{ isset($food) ? route('foods.update',$food->id): route('foods.store') }}" method="POST">
            @csrf
            @if(isset($food))
            @method('PUT')
            @endif
            <div class="form-group">
                <label for="name">Title</label>
                <input type="text" class="form-control" id="" name="name"
                    value="{{ isset($food) ? $food->name:'' }}">
                    @error('name')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name='price'
                    value="{{ isset($food) ? $food->price:'' }}">
                    @error('price')
                    <div class="alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            <div class="form-group">
                <label for="image">image</label>
                <input type="{{ isset($food) ? 'hidden' : 'file'}}" class="form-control" id="image" name="image">
            </div>
            
           
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category" id="category" class="form-control">
                    <option value="">
                        @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if(isset($food)) @if($category->id === $food->category_id)
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
                    {{ isset($food) ? 'Update food' : 'Create Food' }}
                </button>
            </div>
        </form>

    </div>
</div>
@endsection


