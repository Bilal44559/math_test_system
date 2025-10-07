@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h5 class="mb-3">Edit Profile</h5>
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('admin.profile.update') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name:</label>
                            <input type="text" name="name" class="form-control"
                                value="{{ old('name', $profile->name) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone:</label>
                            <input type="text" name="phone" class="form-control"
                                value="{{ old('phone', $profile->phone) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Address:</label>
                            <textarea name="address" class="form-control"
                                rows="3">{{ old('address', $profile->address) }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Date of Birth:</label>
                            <input type="date" name="dob" class="form-control" value="{{ old('dob', $profile->dob) }}">
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-theme-primary px-4">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection