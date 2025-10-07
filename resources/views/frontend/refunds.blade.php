@extends('frontend.layouts.app')

@section('title')
    Refunds
@endsection
@section('content')
    <section class="container my-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary">Refunds</h2>
        </div>

        <div class="d-flex justify-content-center">
            <div class="card shadow-sm border-0 p-4 p-md-5 rounded-4" style="max-width: 700px;">
                <div class="card-body text-center">
                    <i class="bi bi-cash-stack fs-1 text-success mb-3"></i>
                    <p class="fs-5 text-secondary">
                        We offer a fair refund policy with full refunds available in specific situations.
                        Please see our detailed Refund Policy page for conditions.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
       <footer>
    <p>© 2025 Math Academy</p>
  </footer>
    
@endsection