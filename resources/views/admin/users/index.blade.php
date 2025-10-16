@extends('layouts.app')
@section('content')
    <div class="row my-5">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center text-black mb-3">
                <h5 class="mb-0">All Enrollment</h5>
                <div class="d-flex justify-content-between align-items-center gap-2">
                    <input type="text" id="usersSearchInput" class="form-control form-control-sm" placeholder="Search..."
                        style="max-width: 220px;" />

                </div>
            </div>
            <div class="card">
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
                        <table id="users-list" class="table table-hover align-items-center">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-uppercase font-weight-bolder">ID</th>
                                    <th class="text-uppercase font-weight-bolder">Student Name</th>
                                    <th class="text-uppercase font-weight-bolder">Email</th>
                                    <th class="text-uppercase font-weight-bolder">Phone</th>
                                    <th class="text-uppercase font-weight-bolder">PostCode</th>
                                    <th class="text-uppercase font-weight-bolder text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $key => $user)
                                    <tr>
                                        <td class="text-sm">{{ $key + 1 }}</td>
                                        <td class="text-sm font-weight-bold">{{ $user->full_name }}</td>
                                        <td class="text-sm font-weight-bold">{{ $user->email }}</td>
                                        <td class="text-sm font-weight-bold"> {{ $user->phone }}
                                        <td class="text-sm font-weight-bold"> {{ $user->postal_code }}
                                        </td>
                                        <td class="text-end">
                                            <a href="{{ route('admin.users.show', $user->id) }}" class="text-info me-2"
                                                title="View">
                                                <i class="fas fa-eye"></i>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $users->links('pagination::bootstrap-5') !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById("usersSearchInput");
            const table = document.getElementById("users-list").getElementsByTagName("tbody")[0];

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
