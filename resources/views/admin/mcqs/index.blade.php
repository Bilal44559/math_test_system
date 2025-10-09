@extends('layouts.app')

@section('content')
<div class="row my-5">
    <div class="col-12">
        <div class="card-header d-flex justify-content-between align-items-center text-black mb-3">
            <h5 class="mb-0">MCQs List</h5>
            <a href="{{ route('admin.mcqs.create') }}" class="btn btn-theme-primary">+ New MCQ</a>
        </div>

        <div class="card">
            {{-- Session Messages --}}
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
                    <table id="mcqs-list" class="table table-hover align-items-center">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-uppercase font-weight-bolder">#</th>
                                <th class="text-uppercase font-weight-bolder">Question</th>
                                <th class="text-uppercase font-weight-bolder">Status</th>
                                <th class="text-uppercase font-weight-bolder text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mcqs as $key => $mcq)
                                <tr>
                                    <td class="text-sm">{{ $key + 1 }}</td>
                                    <td class="text-sm font-weight-bold">{{ $mcq->question }}</td>
                                    <td>
    <x-toggle-status :route="route('admin.mcqs.toggle', $mcq->id)" :status="$mcq->status" />
</td>
                                    <td class="text-end">
                                        <a href="{{ route('admin.mcqs.show', $mcq->id) }}" 
                                           class="text-info me-2" 
                                           title="View">
                                            <i class="fas fa-eye"></i>
                                        </a>

                                        <a href="{{ route('admin.mcqs.edit', $mcq->id) }}" 
                                           class="text-secondary me-2" 
                                           title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <x-delete-button 
                                            :form-action="route('admin.mcqs.destroy', $mcq->id)" 
                                            button-class="text-danger me-2" 
                                            icon-class="fas fa-trash" />
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
    if (document.getElementById('mcqs-list')) {
        const dataTable = new simpleDatatables.DataTable("#mcqs-list", {
            searchable: true,
            fixedHeight: false,
            perPage: 5
        });
    }
});
</script>
@endsection
