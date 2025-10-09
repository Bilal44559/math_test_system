@extends('layouts.app')

@section('content')
<div class="row my-5">
    <div class="col-12">
        <h5 class="font-weight-bolder mb-3">Create MCQ</h5>
        <div class="card">
            <div class="card-header pb-0">
                <div class="ms-auto mt-lg-0 my-4">
                    <div class="ms-auto my-auto">
                        @include('components.alert')
                        <div class="multisteps-form__content">
                            <form action="{{ route('admin.mcqs.store') }}" method="POST">
                                @csrf

                                {{-- Question Field --}}
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-12">
                                        <label>Question:</label>
                                        <input type="text" name="question" class="form-control" placeholder="Enter question" required>
                                    </div>
                                </div>

                                {{-- Options --}}
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <label>Options:</label>
                                        <div id="options-container">
                                            <div class="row mb-2 option-row">
                                                <div class="col-md-8">
                                                    <input type="text" name="options[]" class="form-control" placeholder="Option text" required>
                                                </div>
                                                <div class="col-md-4 d-flex align-items-center">
                                                    <input type="radio" name="correct_option" value="0" class="me-2" required>
                                                    <span>Correct</span>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-success btn-sm mt-2" id="add-option">
                                            + Add Option
                                        </button>
                                    </div>
                                </div>

                                {{-- Submit --}}
                                <div class="text-end mt-4">
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

{{-- Script to Add Options Dynamically --}}
<script>
    let optionIndex = 1;
    document.getElementById('add-option').addEventListener('click', function () {
        const container = document.getElementById('options-container');
        const div = document.createElement('div');
        div.classList.add('row', 'mb-2', 'option-row');
        div.innerHTML = `
            <div class="col-md-8">
                <input type="text" name="options[]" class="form-control" placeholder="Option text" required>
            </div>
            <div class="col-md-4 d-flex align-items-center">
                <input type="radio" name="correct_option" value="${optionIndex}" class="me-2" required>
                <span>Correct</span>
            </div>
        `;
        container.appendChild(div);
        optionIndex++;
    });
</script>
@endsection
