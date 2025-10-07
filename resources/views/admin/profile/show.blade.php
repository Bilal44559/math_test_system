@extends('layouts.app')

@section('content')
<div class="row my-5">
    <div class="col-12">
        <h5 class="mb-3">Profile</h5>
        <div class="card">
            <!-- Card Header -->
            <div class="card-header pb-0">
                @include('components.alert')
            </div>
            <div class="card-body px-0 pb-0">
                <div class="table-responsive">
                    <table class="table table-flush" id="roles-list">
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex">

                                        <h6 class="ms-3 my-auto">{{ $profile->name }}</h6>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ route('admin.profile.edit') }}" data-bs-toggle="tooltip"
                                        data-bs-original-title="Edit Profile">
                                        <i class="fas fa-user-edit text-secondary"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection