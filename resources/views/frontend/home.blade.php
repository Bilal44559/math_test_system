@extends('frontend.layouts.app')
@section('content')
    @push('page_styles')
        <link href="{{ asset('frontend/assets/scss/home.css') }}" rel="stylesheet" />
    @endpush
    <section class="banner-section">
        <video autoplay muted loop playsinline>
            <source src="{{ asset('frontend/assets/videos/home-banner-bg.mp4') }}" type="video/mp4" />
            Your browser does not support the video tag.
        </video>
        <div class="container">
            <div class="row">
                <div class="col-12">

                    @if (session('success'))
                        <div class="alert alert-dismissible fade show position-fixed" role="alert"
                            style="top: 20px; right: 20px; z-index: 1050; background-color: #ffffff; color: #28a745; border: 1px solid #28a745; box-shadow: 0 4px 12px rgba(0,0,0,0.15); padding: 5px 10px; font-size: 0.875rem; height: auto;">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif


                    <div class="banner-section__main">
                        <div class="banner-top-content">
                            <h3>
                                ACHIEVE OPTIMAL WELLNESS <br />
                                THROUGH SCIENCE
                            </h3>
                        </div>
                        <div class="banner-content">
                            <h1>Math Skills for School Success</h1>
                            <p>REGENERATIVE WELLNESS CENTER</p>
                            <a href="#" class="btn btn-light" data-bs-toggle="modal"
                                data-bs-target="#bookAppointmentModal">Schedule Appointment</a>
                        </div>
                        <div class="banner-bottom-content">
                            <h3>IV THERAPY & LONGEVITY LOUNGE</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="intro-section">
        <div class="container">
            <div class="row intro-section__left">
                <div class="col-md-6 d-flex justify-content-lg-center align-items-start">
                    <div class="intro-section__content">
                        <h2>Aloha and Welcome to Hiʻiaka Health!</h2>
                        <p>
                            We’re excited to introduce our mobile IV therapy services as part of our soft opening—your first
                            look at what’s to come. Our full Regenerative Wellness and Longevity Lounge opens soon, so stay
                            tuned! A one of a kind, all-Inclusive Wellness Center that offers you a powerful blend of
                            healing modalities and biohacking specialties designed to help you look and feel your best.
                            <br />
                            At Hiʻiaka Health, we combine advanced regenerative medicine with evidence-based
                            therapies to support your body’s natural healing potential. From cellular regeneration to
                            integrative medicine to diagnostic/genetic lab testing, and medical aesthetics, our personalized
                            treatments are designed to combat aging, boost vitality, and optimize overall well-being.
                            <br />
                            Experience the science of rejuvenation. Discover what’s possible at Hiʻiaka Health.
                        </p>
                        <div class="intro-section__signature">Mahalo, <span class="logo">HI'IAKA HEALTH</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="intro-section__image">
                        <span>
                            <img src="{{ asset('frontend/assets/images/intro-1.jpg') }}"
                                alt="Math Skills for School Success" class="img-fluid" />
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
