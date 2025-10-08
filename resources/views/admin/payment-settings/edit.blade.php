@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h5 class="mb-3">Edit Payment Setting</h5>

            <div class="card shadow p-4">
                <div class="card-body">
                    {{-- Validation errors --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Session error --}}
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('admin.payment-settings.update', $setting->id) }}" method="POST" novalidate>
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="payment" class="form-label fw-bold">Payment</label>
                            <input type="number" step="0.01" name="payment" id="payment"
                                class="form-control @error('payment') is-invalid @enderror"
                                value="{{ old('payment', $setting->payment) }}" required>
                            @error('payment')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="gst" class="form-label fw-bold">GST</label>
                            <input type="number" step="0.01" name="gst" id="gst"
                                class="form-control @error('gst') is-invalid @enderror"
                                value="{{ old('gst', $setting->gst) }}" required>
                            @error('gst')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="total" class="form-label fw-bold">Total (calculated)</label>
                            <input type="text" id="total" class="form-control"
                                value="{{ number_format((float) old('payment', $setting->payment) + (float) old('gst', $setting->gst), 2) }}"
                                readonly>
                        </div>

                        @can('create_user')
                            <div class="d-flex align-items-center justify-content-end gap-2">
                                <a href="{{ route('admin.payment-settings.index') }}" class="btn btn-theme-primary">Cancel</a>
                                <button type="submit" class="btn btn-theme-secondary">Save Changes</button>
                            </div>
                        @endcan
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const payment = document.getElementById('payment');
            const gst = document.getElementById('gst');
            const total = document.getElementById('total');

            function updateTotal() {
                const p = parseFloat(payment.value) || 0;
                const g = parseFloat(gst.value) || 0;
                total.value = (p + g).toFixed(2);
            }

            payment.addEventListener('input', updateTotal);
            gst.addEventListener('input', updateTotal);
        });
    </script>
@endpush
