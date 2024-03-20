@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{ route('category.create') }}" class="btn btn-success ">Add Category</a>

</div>
<div class="card card-default ">
    <div class="card-header">
        Categories
    </div>
    <div class="card-body">

        <table class="table">
            <thead>
                <th>Name</th>
                <th>Food Count</th>
                <th></th>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>
                        {{ $category->name }}
                    </td>
                    <td>
                        {{$category->foods->count()}}
                    </td>
                    <td>
                        <a href="{{ route('category.edit',$category->id) }}" class="btn btn-info btn-small">
                            Edit
                        </a>
                        <form action="{{ route('category.destroy',$category->id) }}" method="POST">

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
    </div>
</div>


</div>
</div>
@endsection


