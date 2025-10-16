@extends('layouts.app')

@section('content')
    <div class="my-5">
        {{-- Header --}}
        <div class="card-header text-black mb-4">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Details</h5>
                <div>

                    <a href="{{ route('admin.users.index') }}" class="btn btn-theme-primary">
                        Back to Enrollment
                    </a>
                </div>
            </div>
        </div>

        {{-- Alert Messages --}}
        @include('components.alert')

        <div class="row gy-4">
            <div class="col-12">

                <div class="bg-white p-4 rounded shadow-sm">
                    <h6>Student Id</h6>
                    <p class="text-sm mb-0">{{ $enroll->id }}</p>
                    <h6>Student Name</h6>
                    <p class="text-sm mb-0">{{ $enroll->full_name }}</p>
                    <h6>Post Code</h6>
                    <p class="text-sm mb-0">{{ $enroll->postal_code }}</p>
                    <h6>Phone Number</h6>
                    <p class="text-sm mb-0">{{ $enroll->phone }}</p>
                    <h6>Payment Status</h6>
                    <p class="text-sm mb-0">Paid</p>
                    <h6>Address</h6>
                    <p class="text-sm mb-0">{{ $enroll->address }}</p>
                    <h6>Student Guardian Name</h6>
                    <p class="text-sm mb-0">{{ $enroll->guardian_name }}</p>
                    <h6>Student Email</h6>
                    <p class="text-sm mb-0">{{ $enroll->email }}</p>
                    <h6>Student Gender</h6>
                    <p class="text-sm mb-0">{{ $enroll->gender }}</p>
                    <h6>Student Grade</h6>
                    <p class="text-sm mb-0">{{ $enroll->grade }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
