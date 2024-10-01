@extends('admin.dashboard')

@section('admin_products_show')
    <div class="page-content">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Update product info</h4>
            </div>
            <div class="d-flex align-items-center flex-wrap text-nowrap">
                <a type="button" href="{{ route('admin.products.create') }}" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                    New
                </a>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">photo</label>
                        @if($product->photo && $product->photo != 'nophoto.jpg')
                            <img src="{{ asset('photos/products/' . $product->photo) }}" alt="product photo" width="100">
                        @endif
                        <input type="file" name="photo" class="form-control" accept="photo/*">
                    </div>
                </div><!-- Col -->
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter name" required
                            minlength="2" maxlength="50" value="{{ old('name', $product->name) }}">
                    </div>
                </div><!-- Col -->
            </div><!-- Row -->        
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="number" name="price" class="form-control" placeholder="Enter price" value="{{ old('price', $product->price) }}">
                    </div>
                </div><!-- Col -->
            </div><!-- Row -->
        
            <button type="submit" class="btn btn-success">Update</button>
        </form>
        
    </div>
@endsection
