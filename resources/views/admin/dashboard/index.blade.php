@extends('layouts.app')

@section('content')
<style>
body {
    background-color: #f1f3f9;
}

.dashboard-wrapper {
    background-color: #ffffff;
    border-radius: 10px;
    padding: 30px;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
}

.mini-card {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 14px rgba(0, 0, 0, 0.05);
    background-color: white;
    transition: transform 0.2s ease-in-out;
    height: 100%;
}

.mini-card:hover {
    transform: translateY(-5px);
}

.card-header-custom {
    padding: 0.85rem 1rem;
    font-weight: 600;
    color: white;
    font-size: 1rem;
    display: flex;
    align-items: center;
    gap: 8px;
}

.card-body-custom {
    padding: 1rem;
    font-size: 1rem;
    font-weight: bold;
    color: #2e2e2e;
}

.section-title {
    font-size: 1.4rem;
    font-weight: 700;
    color: #2d2d2d;
    margin-bottom: 1.25rem;
    margin-top: 2rem;
}

.filter-form .form-label {
    font-weight: 500;
    font-size: 0.875rem;
}
</style>

<div class="py-4">
    <div class="dashboard-wrapper">
        <form method="GET" action="{{ route('admin.dashboard') }}" class="row gx-3 gy-2 mb-4 filter-form">
            <div class="col-md-3">
                <label for="from_date" class="form-label">From Date</label>
                <input type="date" name="from_date" id="from_date" class="form-control"
                    value="{{ request('from_date') }}">
            </div>
            <div class="col-md-3">
                <label for="to_date" class="form-label">To Date</label>
                <input type="date" name="to_date" id="to_date" class="form-control" value="{{ request('to_date') }}">
            </div>
            <div class="col-md-2 pt-2">
                <button type="submit" class="btn btn-theme-secondary">Search</button>
            </div>
        </form>
        
    </div>
</div>
@endsection