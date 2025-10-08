@extends('layouts.app')
@section('content')
    <div class="row my-5">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center text-black mb-3">
                <h5 class="mb-0">Enrollment Form</h5>
                <div class="d-flex justify-content-between align-items-center gap-2">
                    <input type="text" id="enrollmentSearchInput" class="form-control form-control-sm" placeholder="Search..."
                        style="max-width: 220px;" />
                    {{-- Replace the href with your create route when backend is ready --}}
                    <a href="#" class="btn btn-theme-primary w-100">+ New Enrollment</a>
                </div>
            </div>

            <div class="card">
                @if (session('success'))
                    <div class="alert alert-success mx-3 mt-3">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger mx-3 mt-3">{{ session('error') }}</div>
                @endif

                <div class="card-body px-0 pb-0">
                    <div class="table-responsive p-3">
                        <table id="enrollment-list" class="table table-hover align-items-center">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-uppercase font-weight-bolder">#</th>
                                    <th class="text-uppercase font-weight-bolder">Full Name</th>
                                    <th class="text-uppercase font-weight-bolder">Gender</th>
                                    <th class="text-uppercase font-weight-bolder">Age</th>
                                    <th class="text-uppercase font-weight-bolder">Phone</th>
                                    <th class="text-uppercase font-weight-bolder">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Assuming you will pass $enrollments (paginated) from controller later.
                                     For now you can stub an array in the controller or blade for testing. --}}
                                @foreach ($enrollments as $key => $e)
                                    <tr>
                                        <td class="text-sm">{{ $enrollments->firstItem() + $key }}</td>
                                        <td class="text-sm font-weight-bold">{{ $e->full_name ?? $e->name ?? '-' }}</td>
                                        <td class="text-sm font-weight-bold">{{ $e->gender ?? '-' }}</td>
                                        <td class="text-sm font-weight-bold">{{ $e->age ?? '-' }}</td>
                                        <td class="text-sm font-weight-bold">{{ $e->phone ?? '-' }}</td>
                                        <td>
                                            {{-- Replace '#' with real show route when ready:
                                                route('admin.enrollments.show', $e->id) --}}
                                            <a href="#" class="text-secondary me-2" title="View"><i class="fas fa-eye"></i></a>

                                            {{-- Delete form: replace action route when backend exists.
                                                Kept CSRF + method fields for when you plug backend in. --}}
                                            <form action="#" method="POST" class="d-inline-block"
                                                onsubmit="return confirm('Are you sure you want to delete this enrollment?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link p-0 text-danger"
                                                    title="Delete"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                @if ($enrollments->isEmpty())
                                    <tr>
                                        <td colspan="6" class="text-center text-muted py-4">No enrollments found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>

                        {{-- Pagination placeholder: adjust view if needed --}}
                        {!! $enrollments->links('pagination::bootstrap-5') !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById("enrollmentSearchInput");
            const table = document.getElementById("enrollment-list").getElementsByTagName("tbody")[0];

            input.addEventListener("keyup", function() {
                const filter = input.value.toLowerCase();
                const rows = table.getElementsByTagName("tr");

                for (let i = 0; i < rows.length; i++) {
                    const rowText = rows[i].innerText.toLowerCase();
                    rows[i].style.display = rowText.includes(filter) ? "" : "none";
                }
            });
        });
    </script>
@endpush
