@extends('frontend.layouts.app')

@section('title')
    About Us
@endsection

@section('content')
<section class="container my-5">

    <!-- Instructor Header Section -->
    <div class="d-flex justify-content-center">
        <div class="card shadow-sm border-0 p-3 rounded-4 text-center" style="max-width: 700px;">
            <h4 class="fw-bold text-primary mb-3">Meet the Instructor</h4>
            <img src="{{ asset('build/images/tm1.jpeg') }}" alt="Instructor" width="200" height="280" class="rounded shadow-sm mx-auto mb-3">
        </div>
    </div>

    <!-- Instructor Details Section -->
    <div class="d-flex justify-content-center mt-2">
        <div class="card shadow-sm border-0 p-3 rounded-4" style="max-width: 700px;">
            <div class="card-body text-start">
                <i class="bi bi-person-circle fs-1 text-primary"></i>
                <p><strong>Mr. TM</strong>, the founder of TM Academy, personally teaches the Math courses with the support of a dedicated teaching assistant.</p>
                <p>A passionate and engaging educator, he connects effortlessly with students of all ages and learning levels.</p>
                <p>He holds a Bachelor’s degree in Mathematics and Physics from Pakistan and an MBA from MIT Sloan School of Management, USA.</p>
                <p>With a deep passion for teaching and mentorship, Mr. TM looks forward to welcoming every student to an inspiring and supportive learning journey at TM Academy!</p>
            </div>
        </div>
    </div>

</section>
@endsection

@section('footer')
@endsection
