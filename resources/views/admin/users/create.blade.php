@extends('admin.dashboard')

@section('admin_users_create')
    <div class="page-content">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Add a new user</h4>
            </div>
            <div class="d-flex align-items-center flex-wrap text-nowrap">
                <a type="button" href="{{ route('admin.users.create') }}" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
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


        <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">Photo</label>
                        <input type="file" name="photo" class="form-control" accept="photo/*" required>
                    </div>
                </div><!-- Col -->
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter name" required
                            minlength="2" maxlength="50">
                    </div>
                </div><!-- Col -->
            </div><!-- Row -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                    </div>
                </div><!-- Col -->
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="tel" name="phone" class="form-control" placeholder="Enter phone number" required
                            minlength="10" maxlength="15">
                    </div>
                </div><!-- Col -->
            </div><!-- Row -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                    </div>
                </div><!-- Col -->
            </div><!-- Row -->
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection
