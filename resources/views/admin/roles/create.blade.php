@extends('layouts.app')
@section('content')
<div class="row my-5">
    <div class="col-12">
        <h5 class="font-weight-bolder mb-3">Create Roles</h5>
        <div class="card">
            <div class="card-header pb-0">
                <div class="ms-auto mt-lg-0 my-4">
                    <div class="ms-auto my-auto">
                        @include('components.alert')
                        <div class="multisteps-form__content">
                            <form action="{{ route('admin.roles.store') }}" method="POST">
                                @csrf
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-12">
                                        <label>Role Name:</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-12">
                                        <label>Assign Permissions:</label>
                                        <div class="row">
                                            @foreach($permissions as $permission)
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input type="checkbox" name="permissions[]"
                                                        value="{{ $permission->id }}" class="form-check-input" required>
                                                    <label class="form-check-label">{{ $permission->name }}</label>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-theme-primary">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection