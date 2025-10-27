  @extends('frontend.layouts.app')
@section('title')
    Home - TM Math Academy
@endsection
  @section('content')
<style>
    @media (max-width: 576px) {
       
  .mobile-fs-4 {
    font-size: 1rem !important; /* fs-4 ka size */
  }
  .mobile-fs {
    font-size: 20px !important; /* fs-4 ka size */
  }
}
@media(max-width: 760px){
    .heading{
        font-size: 20px;
    }
    
}
@media(max-width: 382px){
    .f{
        font-size: 13px;
        font-weight: bold;
    }
}
@media(max-width: 375px){
    #smalls{
        font-size: 20px;
        font-weight: bold;
    }
}
@media(max-width: 425px){
    .small{
        font-size: 18px;
        font-weight: bold;
        display: block;
        margin-top: 8px;
    }
    
    #limit{
        font-size: 12px !important; 
        line-height: 1.5;
        
    }
}
@media(max-width: 320px){
    .f{
        font-size: 9px;
    }
}

@media(max-width: 575px){
    .syllabus-btn{
        margin-top: 10px !important;
    }
}
.headings{
    font-size: 1.5rem;
}
</style>
  <section class="text-center py-2 bg-light mt-1">
        <div class="container">
            <h2 class="fw-bold text-danger heading text-center headings" id="smalls">
                           A math foundation built to last!
                    <span class="d-none d-lg-inline"> - </span><br class="d-lg-none">
                    
                    <span class="small text-primary">Courses for Junior High Students </span>
</h2>

            <p class="lead mb-1 mobile-fs-4 fw-bold text-success">Affordable • Adaptive • Progressive</p>
              <p class=" mb-1 mobile-fs-4 fw-bold" style="font-size: 14px; line-height:1.8;" id="limit">Limited spots—starts Nov 29, enroll soon!</p>
        </div>
    </section>
    <section class="container my-2">
  <div class="bg-light border rounded-3 p-4">
    <p class="mb-0 text-start text-dark">
      <strong>Inspiration:</strong>
      Junior High math forms the foundation for every student’s future success in science and higher education.
      When not carefully nurtured, foundational learning gaps can grow into long-term challenges.
      For most students out-of-school instruction becomes necessary to master the concepts.
      We step in with structured guidance, personalized support, and a passion for helping every student thrive with confidence and clarity.
    </p>
  </div>
</section>

    <section class="container my-2">
        <h2 class="section-title mobile-fs heading headings">Levels & Academic Compatibility</h2>
        <p class="  mb-3"> Our courses are closely aligned with the Edmonton Public Schools’s Junior High math curriculum, and even exceed EPS standards to provide students an edge in 
 Junior High and onwards in High School.</p>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card p-4">
                    <h6 class="text-primary fw-bold mb-2 f">🟩 LEVEL 1 – FOUNDATION </h6>
                    <p>Master core arithmetic and introductory algebra skills essential for Junior High school success.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <h6 class="text-primary fw-bold mb-2 f">🟦 LEVEL 2 – INTERMEDIATE </h6>
                    <p class="">Develop confidence in algebra, geometry, and advanced arithmetic through problem-solving practice.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4">
                    <h6 class="text-primary fw-bold mb-2 f">🟥 LEVEL 3 – ADVANCED FOUNDATION </h6>
                    <p>Apply mathematical reasoning across higher-level concepts to prepare for high school math.</p>
                </div>
            </div>
        </div>
        <div class="d-flex text-center mt-4 syllabus-btn"> <a href="{{ route('syllabus') }}"
                class="btn btn-outline-primary rounded-pill px-sm-4 px-2 ">See the syllabus</a>
        </div>
    </section>
    <section class="container my-2">
        <h3 class="section-title mobile-fs">Course Details</h3>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card p-4">
                    <h5>📍 Schedule & Location</h5>
                    <p>Classes every Saturday & Sunday at <b>Terwillegar Recreation Center.</b> <br> 12 weekends (24 sessions, 36 hours of classroom instruction).</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4">
                    <h5>📅 Start Date</h5>
                    <p>Start Session: <strong>Saturday, November 29,2025</strong></p> <a href="{{ route('enroll') }}"
                        class="btn btn-outline-primary btn-sm">Reserve Your Spot</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4">
                    <h5>🧠  Instructional Tools</h5>
                    <p>Interactive lessons, problem-solving, quizzes, and guided take-home practice to build mastery.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4">
                    <h5>🏆 Student Takeaways</h5>
                    <p>Stronger math foundation, confidence, and access to TM Academy alumni resources.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4">
                    <h5>📦 What's Included</h5>
                    <ul>
                        <li>Diagnostic test & level placement</li>
                        <li>Comprehensive course pack with exercises & answer key.</li>
                        <li>Detailed solution key.</li>
                        <li>Homework and quizzes with personalized feedback</li>
                        <li>Monthly performance reports emailed to students and parents.</li>
                        <li>Course certificate upon successful completion.</li>
                        <li>Merit certificate awarded to students scoring 90% and above.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 text-center">
                    <h5>💰 Price</h5>
                    <p class="fs-5 fw-bold text-primary">CA$358.20 for 24 sessions (~$9.95/hour)</p> <a href="{{ route('enroll') }}" id="enrollBtn"
                        class="btn btn-primary btn-sm rounded-pill px-3" id="enrollNowBtn">Enroll Now</a>

                </div>
            </div>
        </div>
    </section>
  @endsection
  @section('footer')
      
  @endsection
