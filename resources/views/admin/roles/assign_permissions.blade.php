@extends('layouts.app')
@section('content')
<div class="row my-5">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5>Assign Permissions to {{ $role->name }}</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.roles.updatePermissions', $role->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        @foreach ($permissions as $permission)
                        <div class="form-check">
                            <input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
                                {{ $role->permissions->contains($permission->id) ? 'checked' : '' }}>
                            <label>{{ $permission->name }}</label>
                        </div>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary">Save Permissions</button>
                    <a href="{{ route('admin.roles.index') }}" class="btn btn-theme-primary"> Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection