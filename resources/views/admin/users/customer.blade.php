@extends('layouts.app')
@section('content')

<div class="row my-5">
    <div class="col-12">
        <div class="card-header d-flex justify-content-between align-items-center text-black">
            <h5 class="mb-3">All Customers</h5>
            <input type="text" id="customerSearchInput" class="form-control form-control-sm" placeholder="Search Customer..." style="max-width: 220px;" />
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
                        <table id="customers-list" class="table table-hover align-items-center">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-uppercase font-weight-bolder">ID</th>
                                    <th class="text-uppercase font-weight-bolder">Name</th>
                                    <th class="text-uppercase font-weight-bolder">Email</th>
                                    <!--<th class="text-uppercase font-weight-bolder">status</th>-->
                                    <th class="text-uppercase font-weight-bolder text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $key => $customer)
                                    <tr>
                                        <td class="text-sm">{{ $key + 1 }}</td>
                                        <td class="text-sm font-weight-bold">{{ $customer->name }}</td>
                                        <td class="text-sm font-weight-bold">{{ $customer->email }}</td>
                                        <!--<td>-->
                                        <!--    <x-toggle-status :route="route('admin.customers.toggle-status', $customer->id)" :status="$customer->status" />-->
                                        <!--</td>-->
                                        <td class="text-end">


                                            <x-delete-button :form-action="route('admin.customers.delete', $customer->id)" button-class="text-danger me-2"
                                                icon-class="fas fa-trash" />
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {!! $customers->links('pagination::bootstrap-5') !!}

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.getElementById("customerSearchInput");
            const table = document.getElementById("customers-list").getElementsByTagName("tbody")[0];

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
