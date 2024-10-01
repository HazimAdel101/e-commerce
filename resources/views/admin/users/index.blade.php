@extends('admin.dashboard')

@section('admin_users_index')
    <div class="page-content">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Users Management</h4>
            </div>
            <div class="d-flex align-items-center flex-wrap text-nowrap">
                <a type="button" href="{{ route('admin.users.create') }}" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                    New
                </a>
            </div>
        </div>

        <table id="dataTableExample" class="table">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Age</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <!-- Photo Column: Show a thumbnail or '----' if photo does not exist -->
                        <td>
                            @if ($user->photo && $user->photo != 'nophoto.jpg')
                                <img src="{{ asset('photos/users/' . $user->photo) }}" alt="{{ $user->name }}"
                                    width="100">
                            @else
                                <img src="{{ asset('photos/users/nophoto.jpg') }}" alt="Default photo" width="100">
                            @endif
                </td>

                <!-- Name: Show '----' if name is empty -->
                <td>{{ $user->name ?? '----' }}</td>

                <!-- Email: Show '----' if email is empty -->
                <td>{{ $user->email ?? '----' }}</td>

                <!-- Phone: Show '----' if phone is empty -->
                <td>{{ $user->phone ?? '----' }}</td>

                <!-- Address: Show '----' if address is empty -->
                <td>{{ $user->address ?? '----' }}</td>

                <!-- Status: Show '----' if status is empty, otherwise show a badge -->
                <td>
                    @if ($user->status)
                        <span class="badge {{ $user->status == 'active' ? 'bg-success' : 'bg-secondary' }}">
                            {{ ucfirst($user->status) }}
                        </span>
                    @else
                        ----
                    @endif
                </td>

                <!-- Age: Show '----' if age is empty -->
                <td>{{ $user->age ?? '----' }}</td>

                <!-- Actions: Edit and Delete buttons -->
                <td>
                    <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>

                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
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
