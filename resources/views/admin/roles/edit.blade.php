@extends('layouts.app')
@section('content')
<div class="row my-5">
    <div class="col-lg-12">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="mb-3">Edit Role</h5>
            <a href="{{ route('admin.roles.index') }}" class="btn btn-theme-primary">Back to Role</a>
        </div>

        <div class="card p-3 border-radius-xl bg-white">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('admin.roles.update', $role->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Role Name:</label>
                    <input type="text" name="name" class="form-control" value="{{ $role->name }}" required>
                </div>
                <br>
                <div class="form-group">
                    <label>Assign Permissions:</label>
                    <div class="row">
                        @foreach($permissions as $permission)
                        <div class="col-md-4">
                            <div class="form-check">
                                <input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
                                    class="form-check-input"
                                    {{ $role->permissions->contains($permission->id) ? 'checked' : '' }}>
                                <label class="form-check-label">{{ $permission->name }}</label>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-theme-secondary">Update</button>

            </form>
        </div>
    </div>
</div>
@endsection