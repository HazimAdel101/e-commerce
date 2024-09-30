@extends('admin.dashboard')

@section('admin_products_create')
    <div class="page-content">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Add a new product</h4>
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


        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">Photo</label>
                        <input type="file" name="image" class="form-control" accept="image/*" required>
                    </div>
                </div><!-- Col -->
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Product name" required
                            minlength="2" maxlength="50">
                    </div>
                </div><!-- Col -->
            </div><!-- Row -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="email" name="description" class="form-control" placeholder="Enter description" required>
                    </div>
                </div><!-- Col -->
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">price</label>
                        <input type="number" name="price" class="form-control" placeholder="Enter phone number" required
                            minlength="10" maxlength="15">
                    </div>
                </div><!-- Col -->
            </div><!-- Row -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">stock</label>
                        <input type="number" name="stock" class="form-control" placeholder="Enter the stock number" required>
                    </div>
                </div><!-- Col -->
            </div><!-- Row -->
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection
