@extends('layouts.app')
@section('content')
    <div class="row my-5">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center text-black mb-3">
                <h5 class="mb-0">Payment Settings</h5>
                {{-- <div class="d-flex justify-content-between align-items-center gap-2">
                    <input type="text" id="settingsSearchInput" class="form-control form-control-sm" placeholder="Search..."
                        style="max-width: 220px;" />
                    <a href="{{ route('admin.payment-settings.create') }}" class="btn btn-theme-primary w-100">+ New
                        Payment</a>
                </div> --}}
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
                        <table id="settings-list" class="table table-hover align-items-center">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-uppercase font-weight-bolder">#</th>
                                    <th class="text-uppercase font-weight-bolder">Payment</th>
                                    <th class="text-uppercase font-weight-bolder">GST</th>
                                    <th class="text-uppercase font-weight-bolder">Total</th>
                                    <th class="text-uppercase font-weight-bolder">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($settings as $key => $s)
                                    <tr>
                                        <td class="text-sm">{{ $settings->firstItem() + $key }}</td>
                                        <td class="text-sm font-weight-bold">{{ number_format((float) $s->payment, 2) }}
                                        </td>
                                        <td class="text-sm font-weight-bold">{{ number_format((float) $s->gst, 2) }}</td>
                                        <td class="text-sm font-weight-bold">{{ number_format((float) $s->total, 2) }}</td>
                                        <td>
                                            <a href="{{ route('admin.payment-settings.edit', $s->id) }}"
                                                class="text-secondary me-2" title="Edit"><i class="fas fa-edit"></i></a>

                                            {{-- <form action="{{ route('admin.payment-settings.destroy', $s->id) }}"
                                                method="POST" class="d-inline-block"
                                                onsubmit="return confirm('Are you sure you want to delete this setting?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link p-0 text-danger"
                                                    title="Delete"><i class="fas fa-trash"></i></button>
                                            </form> --}}
                                        </td>
                                    </tr>
                                @endforeach

                                @if ($settings->isEmpty())
                                    <tr>
                                        <td colspan="5" class="text-center text-muted py-4">No payment settings found.
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>

                        {!! $settings->links('pagination::bootstrap-5') !!}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById("settingsSearchInput");
            const table = document.getElementById("settings-list").getElementsByTagName("tbody")[0];

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
