@extends('layouts.app')
@section('content')
<div class="row my-5">
    <div class="col-12">
        <div class="card-header d-flex justify-content-between align-items-center text-black mb-3">
            <h5 class="mb-0">All Roles</h5>
            <a href="{{ route('admin.roles.create') }}" class="btn btn-theme-primary">+ New Role</a>
        </div>
        <div class="card">
            {{-- Session messages --}}
            @if (session('success'))
            <div class="alert alert-success mx-3 mt-3">
                {{ session('success') }}
            </div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger mx-3 mt-3">
                {{ session('error') }}
            </div>
            @endif

            <div class="card-body px-0 pb-0">
                <div class="table-responsive p-3">
                    <table id="roles-list" class="table table-hover align-items-center">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-uppercase font-weight-bolder">ID</th>
                                <th class="text-uppercase font-weight-bolder">Name</th>
                                <th class="text-uppercase font-weight-bolder text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $key => $role)
                            <tr>
                                <td class="text-sm">{{ $key + 1 }}</td>
                                <td class="text-sm font-weight-bold">{{ $role->name }}</td>
                                <td class="text-end">
                                    <a href="{{ route('admin.roles.edit', $role->id) }}" class="text-secondary me-2"
                                        title="Edit">
                                        <i class="fas fa-user-edit"></i>
                                    </a>
                                    <x-delete-button :form-action="route('admin.roles.destroy', $role->id)"
                                        button-class="text-danger me-2" icon-class="fas fa-trash" />

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Include Simple DataTables JS -->
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    if (document.getElementById('roles-list')) {
        const dataTable = new simpleDatatables.DataTable("#roles-list", {
            searchable: true,
            fixedHeight: false,
            perPage: 4
        });
    }
});
</script>
@endsection