  @extends('frontend.layouts.app')
@section('title')
    Home - TM Math Academy
@endsection
  @section('content')
      
  <section class="text-center py-5 bg-light">
        <div class="container">
            <h1 class="fw-bold text-primary">Master Junior High Math with Confidence</h1>
            <p class="lead text-secondary mb-4">Affordable • Adaptive • Progressive</p>
        </div>
    </section>
    <section class="container">
        <h2 class="section-title">Levels & Academic Compatibility</h2>
        <p class="text-center text-muted mb-5"> Our courses are carefully aligned with Edmonton Public Schools’ math
            curriculum, ensuring your child stays ahead in class. </p>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card p-4">
                    <h5 class="text-primary fw-bold mb-2">Level 1 (Grade 6)</h5>
                    <p>Strengthen foundations in arithmetic and basic algebra.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <h5 class="text-primary fw-bold mb-2">Level 2 (Grade 7)</h5>
                    <p>Advance into higher difficulty levels of arithmetic, algebra, and geometry.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <h5 class="text-primary fw-bold mb-2">Level 3 (Grade 8)</h5>
                    <p>Explore and consolidate the higher domains in math.</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-4"> <a href="/syllabus.html"
                class="btn btn-outline-primary rounded-pill px-4">See the syllabus</a>
        </div>
    </section>
    <section class="container my-5">
        <h2 class="section-title">Course Details</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card p-4">
                    <h5>📍 Schedule & Location</h5>
                    <p>Classes every Saturday & Sunday at Terwillegar Recreation Center. <br> 12 weekends (24 sessions,
                        36 hours
                        total).</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4">
                    <h5>📅 Start Date</h5>
                    <p>Next Session: <strong>Saturday, November 4, 2025</strong></p> <a href="/enroll.html"
                        class="btn btn-outline-primary btn-sm">Reserve Your Spot</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4">
                    <h5>🧠 Instructional Tools</h5>
                    <p>Interactive lessons, problem-solving, quizzes, and guided take-home practice to build mastery.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4">
                    <h5>🏆 Student Takeaways</h5>
                    <p>Stronger math foundations, confidence, and access to TM Science Academy alumni resources.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4">
                    <h5>📦 What’s Included</h5>
                    <ul>
                        <li>Diagnostic test & level placement</li>
                        <li>Homework and quizzes with feedback</li>
                        <li>Course pack with solutions</li>
                        <li>Monthly performance reports</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 text-center">
                    <h5>💰 Price</h5>
                    <p class="fs-5 fw-bold text-primary">CA$325 / 12 weeks (~$9/hour)</p> <a href="/enroll.html" id="enrollBtn"
                        class="btn btn-primary btn-sm rounded-pill px-3" id="enrollNowBtn">Enroll Now</a>

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
