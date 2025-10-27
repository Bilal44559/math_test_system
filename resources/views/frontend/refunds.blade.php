@extends('frontend.layouts.app')

@section('title')
    Refunds
@endsection
@section('content')
    <section class="container my-5">
        <div class="text-center mb-2">
            <h3 class="fw-bold text-primary">Refunds</h3>
        </div>

       <div class="d-flex justify-content-center">
  <div class="card shadow-sm border-0 p-2 rounded-4" style="max-width: 700px;">
    <div class="card-body text-start">
      <i class="bi bi-cash-stack fs-1 text-success mb-3 d-block text-center"></i>
      <p>1. A Student may withdraw within 2 days of attending the second session and receive a full refund.</p>
      <p>2. No refund will be issued for withdrawal requests received after the specified deadline above.</p>
      <p>3. In situations involving withdrawal of a student from the course for the reasons of misconduct, no refund shall be provided.</p>
      <p>4. If a Course is canceled by the Academy due to insufficient enrollment, scheduling, or unforeseen circumstances, a pro-rated refund will be issued automatically based on the number of executed sessions and any fixed costs such as course materials.</p>
      <p>5. Refunds will be issued within one (1) week once they become due. 
      <br>
      <br>
      <small><strong>Note:</strong> More specific details are provided in the <a href="{{ route('terms') }}">Terms of Use</a>.</small></p>
    </div>
  </div>
</div>

    </section>
@endsection
@section('footer')
       

@endsection
