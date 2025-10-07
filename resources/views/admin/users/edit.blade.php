@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5>Edit Users</h5>
            <a href="{{ route('admin.users.index') }}" class="btn btn-theme-primary">Back</a>
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
            <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                </div>
                <div class="mb-3">
    <label for="role" class="form-label fw-bold">Assign Role</label>
    <select name="roles[]" id="role" class="form-select">
        <option value="">-- Select Role --</option>
        @foreach($roles as $role)
            <option value="{{ $role->id }}"
                {{ $user->roles->first()?->id == $role->id ? 'selected' : '' }}>
                {{ ucfirst($role->name) }}
            </option>
        @endforeach
    </select>
    @error('roles')
        <div class="text-danger small mt-1">{{ $message }}</div>
    @enderror
</div>


                <br>
                <div class="text-end">

                    <button type="submit" class="btn btn-theme-secondary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection