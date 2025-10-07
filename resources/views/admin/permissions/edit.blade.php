@extends('layouts.app')

@section('content')

<div class="row my-5">
    <div class="col-lg-12">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5>Edit Permission</h5>
            <a href="{{ route('admin.permissions.index') }}" class="btn btn-theme-primary">Back</a>
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
            @can('update_permissions')
            <form action="{{ route('admin.permissions.update', $permission->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Permission Name:</label>
                    <input type="text" name="name" class="form-control" value="{{ $permission->name }}" required>
                </div>
                <br>
                <div class="text-end">
                    <button type="submit" class="btn btn-theme-primary">Update</button>
                </div>

            </form>
            @endcan
        </div>
    </div>
</div>
@endsection