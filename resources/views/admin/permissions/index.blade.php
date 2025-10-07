@extends('layouts.app')
@section('content')
<div class="row my-5">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center text-black mb-3">
            <h5 class="mb-0">All Permissions</h5>
            <a href="{{ route('admin.permissions.create') }}" class="btn btn-theme-primary">+ New Permission</a>
        </div>
        <div class="card">
            <div class="card-body px-0 pb-0">
                @if(session('success'))
                <div class="alert alert-success mx-3 mt-3">{{ session('success') }}</div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger mx-3 mt-3">{{ session('error') }}</div>
                @endif

                <div class="table-responsive p-3">
                    <table class="table table-hover align-items-center" id="permissions-list">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-uppercase font-weight-bolder">Name</th>
                                <th class="text-uppercase font-weight-bolder text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($permissions as $permission)
                            <tr>
                                <td class="text-sm font-weight-bold">{{ $permission->name }}</td>
                                <td class="text-end">
                                    @can('edit_permissions')
                                    <a href="{{ route('admin.permissions.edit', $permission->id) }}"
                                        class="text-secondary me-2" title="Edit">
                                        <i class="fas fa-user-edit"></i>
                                    </a>
                                    @endcan
                                    <x-delete-button :form-action="route('admin.permissions.destroy', $permission->id)"
                                        button-class="text-danger me-2" icon-class="fas fa-trash" />
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2" class="text-center text-muted">No permissions found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {!! $permissions->links('pagination::bootstrap-5') !!}

                </div>

            </div>
        </div>
    </div>
</div>
@endsection