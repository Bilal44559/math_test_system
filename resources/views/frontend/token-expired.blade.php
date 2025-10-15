@extends('frontend.layouts.app')

@section('title', 'Token Expired')

@section('content')
<section class="container my-5 text-center">
    <!-- Replace the <img> with this SVG -->
    <svg xmlns="http://www.w3.org/2000/svg" width="180" height="180" viewBox="0 0 180 180" fill="none" class="mb-4" style="max-width: 180px;">
    <!-- soft background circle -->
    <rect width="180" height="180" rx="16" fill="#FFF8F6"/>
    <!-- octagon -->
    <path d="M54.5 18.5h71l36 36v71l-36 36h-71l-36-36v-71l36-36z" fill="#F05A4A"/>
    <!-- inner cut to soften octagon corners -->
    <path d="M60 28l60 0 32 32v60l-32 32-60 0-32-32v-60l32-32z" fill="#F05A4A" opacity="0.98"/>
    <!-- exclamation mark stem -->
    <rect x="85" y="48" width="10" height="60" rx="5" fill="#FFFFFF"/>
    <!-- exclamation mark dot -->
    <circle cx="90" cy="118" r="8" fill="#FFFFFF"/>
    <!-- subtle shadow under icon -->
    <ellipse cx="90" cy="150" rx="44" ry="8" fill="#000" opacity="0.06"/>
    <title>Token expired alert</title>
    <desc>Red octagon with exclamation mark indicating token expired</desc>
    </svg>
    <h2 class="text-danger mb-3">Your Token Has Expired</h2>
    <p class="text-muted mb-4">{{ $message ?? 'Please create a new enrollment to continue.' }}</p>
    <a href="{{ route('enroll') }}" class="btn btn-primary">Create New Enrollment</a>
</section>
@endsection
