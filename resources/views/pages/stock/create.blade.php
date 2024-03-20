@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            {{ isset($stock) ? 'Edit stock' : 'Create stock' }}
        </div>
        <div class="card-body">
    
            <form action="{{ isset($stock) ? route('stocks.update',$stock->id): route('stocks.store') }}" method="POST">
                @csrf
                @if(isset($stock))
                @method('PUT')
                @endif
                <div class="form-group">
                    <label for="food_id">Food</label>
                    <select name="food_id" id="food" class="form-control" required>
                        <option value="">
                            @foreach($foods as $food)
                        <option value="{{ $food->id }}" @if(isset($stock)) @if($food->id === $stock->food_id)
                            selected
                            @endif
                            @endif>
                            
                            {{$food->name}}
                        </option>
                        @endforeach
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="from_date">Stock Date</label>
                    <input type="date" class="form-control" id="from_date" name='from_date'
                        value="{{ isset($stock) ? $stock->from_date:'' }}" required>
                        @error('from_date')
                        <div class="alert-danger">{{ $message }}</div>
                        @enderror
                </div>
                {{-- <div class="form-group">
                    <label for="to_date">To Date</label>
                    <input type="date" class="form-control" id="to_date" name='to_date'
                        value="{{ isset($stock) ? $stock->to_date:'' }}">
                        @error('to_date')
                        <div class="alert-danger">{{ $message }}</div>
                        @enderror
                </div> --}}
                {{-- @foreach($foods as $key=>$food)
    
                <div class="form-group">
                    <label for="quantity">{{$food->name}}</label>
    
                <input type="number" name="quantity[{{ $key }}]">
                <input type="hidden" name="food_id[{{ $key }}]" value="{{$food->id}}">
                    
    
                        
                   
                </div>
             
                @endforeach --}}
                <div class="form-group">
                    <label for="quantity">Quantity</label>
    
                <input type="number" class="form-control" name="quantity" min="0" required/>
                    
    
                        
                   
                </div>
    
    
                <div class="form-group">
                    <button class="btn btn-success" type="submit">
                        {{ isset($stock) ? 'Update stock' : 'Create stock' }}
                    </button>
                </div>
            </form>
    
        </div>
    </div>
</div>
@endsection


