@extends('layouts.app')

@section('content')
<div class="row my-5">
    <div class="col-12">
        <div class="card-header d-flex justify-content-between align-items-center text-black mb-3">
            <h5 class="mb-0">Attempt Questions</h5>
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
                                <th class="text-uppercase font-weight-bolder">Student Name</th>
                                <th class="text-uppercase font-weight-bolder">Level</th>
                                <th class="text-uppercase font-weight-bolder text-end">Total Questions</th>
                                <th class="text-uppercase font-weight-bolder text-end">Correct Answers</th>
                                <th class="text-uppercase font-weight-bolder text-end">Wrong Answers</th>
                                <th class="text-uppercase font-weight-bolder text-end">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($attempts as $key => $attempt)
                                <tr>
                                    <td class="text-sm">{{ $key + 1 }}</td>
                                    <td class="text-sm font-weight-bold">{{ $attempt->user->name }}</td>
                                    <td class="text-sm font-weight-bold">{{ $attempt->level }}</td>
                                    <td class="text-end text-sm font-weight-bold">
                                        {{ $attempt->total_questions }}
                                    </td>
                                    <td class="text-end text-sm font-weight-bold">
                                        {{ $attempt->correct_count }}
                                    </td>
                                    <td class="text-end text-sm font-weight-bold">
                                        {{ $attempt->incorrect_count }}
                                    </td>
                                    <td class="text-end text-sm font-weight-bold">
                                        {{ $attempt->status }}
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
