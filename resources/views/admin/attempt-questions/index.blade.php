@extends('layouts.app')

@section('content')
<div class="row my-5">
    <div class="col-12">
        <div class="card-header d-flex justify-content-between align-items-center text-black mb-3">
            <h5 class="mb-0">Test-Result's</h5>
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
        <th class="text-uppercase font-weight-bolder">TD</th>
        <th class="text-uppercase font-weight-bolder text-end">Level 1</th>
        <th class="text-uppercase font-weight-bolder text-end">Level 2</th>
        <th class="text-uppercase font-weight-bolder text-end">Level 3</th>
        <th class="text-uppercase font-weight-bolder text-end">Status</th>
    </tr>
</thead>
<tbody>
    @foreach ($rows as $key => $row)
        <tr>
            <td class="text-sm">{{ $key + 1 }}</td>
            <td class="text-sm font-weight-bold">{{ $row['user']->name }}</td>
            <td class="text-sm font-weight-bold"> {{ $row['last_at'] ? \Carbon\Carbon::parse($row['last_at'])->format('d, M Y') : '-' }}</td>
            @for ($lvl = 1; $lvl <= 3; $lvl++)
                <td class="text-end text-sm font-weight-bold">
                    @if (!empty($row['levels'][$lvl]))
                        {{ $row['levels'][$lvl]['correct'] }}
                    @else
                        -
                    @endif
                </td>
            @endfor

            <!--<td class="text-end text-sm font-weight-bold">-->
            <!--    Level {{ $row['last_level'] }}-->
            <!--</td>-->
            
                    
            <td class="text-end text-sm font-weight-bold">
    @php
        $lastLevel = $row['last_level'] ?? null;
        $lastCorrect = $row['last_correct'] ?? 0;
        $lastTotal = $row['last_total'] ?? 0;
    @endphp

    @if ($lastLevel == 1 && $lastCorrect <= 3)
        <span class="text-danger">UQ</span>
    @elseif ($lastLevel == 3 && $lastCorrect >= 12)
        <span class="text-success">OQ</span>
    @else
        Level {{ $lastLevel }}
    @endif
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
