@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            Edit stock  
        </div>
        <div class="card-body">
    
            <form action="{{  route('stocks.update',$stock->id) }}" method="POST">
                @method('put')
                @csrf

                
                <div class="form-group">
                    <label for="food_id">Food</label>
                    <select name="food_id" id="food" class="form-control" disabled>
                        <option value="">
                            @foreach($foods as $food)
                        <option value="{{ $food->id }}" @if($food->id === $stock->food_id)
                            selected
                            @endif
                            >
                            
                            {{$food->name}}
                        </option>
                        @endforeach
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="from_date">Stock Date</label>
                    <input type="date" class="form-control" id="from_date" name='from_date'
                        value="{{  $stock->from_date }}" disabled>
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
                    <label for="quantity">Total Quantity</label>
    
                <input type="number" class="form-control" name="quantity" value="{{ $stock->total_quantity }}" min="0" disabled/>
                    
    
                        
                   
                </div>
                <div class="form-group">
                    <label for="update_quantity">Update Quantity</label>
    
                <input type="number" class="form-control" name="update_quantity"  />
                    
    
                        
                   
                </div>

    
    
                <div class="form-group">
                    <button class="btn btn-success" type="submit">
                        Update Stock
                    </button>
                </div>
            </form>
    
        </div>
    </div>
</div>
@endsection


