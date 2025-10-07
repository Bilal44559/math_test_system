@php
$alertClasses = [
'success' => 'alert-success',
'error' => 'alert-danger',
'warning' => 'alert-warning',
'info' => 'alert-info',
];
@endphp

@if ($message)
<div class="alert {{ $alertClasses[$type] ?? 'alert-info' }} alert-dismissible fade show mt-3" role="alert">
    <span class="alert-text"> {{ $message }}</span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif