@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{ route('foods.create') }}" class="btn btn-success ">Add Food</a>
</div>

<div class="card card-default">
    <div class="card-header">
        Foods
    </div>

    <div class="card-body">
        @if($foods->count()>0)
        <table class="table">
            <thead>
                <th>Name</th>
                <th>Category</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach($foods as $food)

                <tr>
                    
                    <td>
                        {{ $food->name }}
                    </td>
                    <td>
                        <a href="{{ route('categories.edit',$food->category->id) }}">
                            {{ $food->category->name }}
                        </a>
                    </td>
                    
                    <td>
                        <a href="{{ route('foods.edit',$food->id) }}" class="btn btn-info btn-sm">Edit</a>

                    </td>

                    <td>
                        <form action="{{ route('foods.destroy',$food->id) }}" method="POST">

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <h3>No foods Yet</h3>
        @endif
    </div>
</div>
@endsection
