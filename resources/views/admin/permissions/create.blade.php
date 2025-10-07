@extends('layouts.app')
@section('content')
<div class="row my-5">
    <div class="col-lg-12">
        <div class="d-flex align-itmes-center justify-content-between mb-3">
            <h5>Create Permission</h5>
            <a href="{{ route('admin.permissions.index') }}" class="btn btn-theme-primary">Back</a>
        </div>
        <div class="card p-3 border-radius-xl bg-white">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('admin.permissions.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Permission Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <br>
                <div class=" w-100 text-end">
                    <button type="submit" class="btn btn-theme-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection