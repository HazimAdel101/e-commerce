@extends('admin.dashboard')

@section('admin_products_index')
    <div class="page-content">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Product Management</h4>
            </div>
            <div class="d-flex align-items-center flex-wrap text-nowrap">
                <a type="button" href="{{ route('admin.products.create') }}" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                    New
                </a>
            </div>
        </div>

        <table id="dataTableExample" class="table">
            <thead>
                <tr>
                    <th>photo</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <!-- photo Column: Show a thumbnail or '----' if photo does not exist -->
                        <td>
                            @if ($product->photo && $product->photo != 'nophoto.jpg')
                                <img src="{{ asset('photos/products/' . $product->photo) }}" alt="{{ $product->name }}"
                                    width="100">
                            @else
                                <img src="{{ asset('photos/products/nophoto.jpg') }}" alt="Default photo" width="100">
                            @endif
                </td>
                <td>{{ $product->name ?? '----' }}</td>
                <td>{{ $product->price ?? '----' }}</td>
                <!-- Actions: Edit and Delete buttons -->
                <td>
                    <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-primary btn-sm">Edit</a>

                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                        style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
