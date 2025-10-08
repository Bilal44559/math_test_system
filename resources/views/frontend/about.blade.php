  @extends('frontend.layouts.app')
  @section('title')
      About Us
  @endsection
  @section('content')
      <section class="container my-5">
          <div class="text-center mb-5">
              <h2 class="fw-bold text-primary">About Us</h2>
          </div>

          <div class="d-flex justify-content-center">
              <div class="card shadow-sm border-0 p-4 p-md-5 rounded-4" style="max-width: 700px;">
                  <div class="card-body text-center">
                      <i class="bi bi-person-circle fs-1 text-primary mb-3"></i>
                      <p class="fs-5 text-secondary">
                          <strong>Mr. TM</strong> is a passionate math educator with a strong academic background and years
                          of teaching experience.
                          He holds a <strong>BS in Mathematics & Physics</strong> from Pakistan and an <strong>MBA</strong>
                          from a top US school (<em>Sloan</em>).
                      </p>
                  </div>
              </div>
          </div>
      </section>
  @endsection
  @section('footer')
  @endsection
