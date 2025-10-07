@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h5 class="mb-3">Add New User</h5>
        <div class="card shadow p-4">

            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('admin.users.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Assign Roles</label>
                        <select name="roles[]" class="form-select">
                            @foreach($roles as $role)
                            <option value="{{ $role->id }}">{{ ucfirst($role->name) }}</option>
                            @endforeach
                        </select>
                    </div>

            </div>
            @can('create_user')
            <div class="d-flex align-items-center justify-content-end gap-2">
                <a href="{{ route('admin.users.index') }}" class="btn btn-theme-primary">Cancel</a>
                <button type="submit" class="btn btn-theme-secondary">Add User</button>
            </div>
            @endcan
            </form>
        </div>
    </div>
</div>
</div>
@endsection