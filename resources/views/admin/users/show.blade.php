@extends('admin.dashboard')

@section('admin_users_show')
    <div class="page-content">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Update user info</h4>
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


        <form action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">Photo</label>
                        @if($user->photo && $user->photo != 'noimage.jpg')
                            <img src="{{ asset('photos/users/' . $user->photo) }}" alt="User Photo" width="100">
                        @endif
                        <input type="file" name="photo" class="form-control" accept="image/*">
                    </div>
                </div><!-- Col -->
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter name" required
                            minlength="2" maxlength="50" value="{{ old('name', $user->name) }}">
                    </div>
                </div><!-- Col -->
            </div><!-- Row -->
        
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email" required
                            value="{{ old('email', $user->email) }}">
                    </div>
                </div><!-- Col -->
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="tel" name="phone" class="form-control" placeholder="Enter phone number" required
                            minlength="9" maxlength="15" value="{{ old('phone', $user->phone) }}">
                    </div>
                </div><!-- Col -->
            </div><!-- Row -->
        
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password">
                        <small class="form-text text-muted">Leave blank to keep the current password</small>
                    </div>
                </div><!-- Col -->
            </div><!-- Row -->
        
            <button type="submit" class="btn btn-success">Update</button>
        </form>
        
    </div>
@endsection
