@extends('layouts.app')

@section('content')
<div class="row my-5">
    <div class="col-lg-12">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="mb-3">Edit MCQ</h5>
            <a href="{{ route('admin.mcqs.index') }}" class="btn btn-theme-primary">Back to MCQs</a>
        </div>

        <div class="card p-3 border-radius-xl bg-white">
            {{-- Validation Errors --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.mcqs.update', $mcq->id) }}" method="POST">
                @csrf
                @method('PUT')

                {{-- Question --}}
                <div class="form-group mb-4">
                    <label class="mb-1">Question:</label>
                    <input type="text" name="question" class="form-control" value="{{ $mcq->question }}" required>
                </div>

                {{-- Options --}}
                <div class="form-group mb-4">
                    <label class="mb-1">Options:</label>
                    <div id="options-container">
                        @foreach($mcq->options as $key => $option)
                            <div class="row mb-2 option-row align-items-center">
                                <div class="col-md-8">
                                    <input type="text" 
                                           name="options[]" 
                                           class="form-control" 
                                           value="{{ $option->option_text }}" 
                                           placeholder="Option text" 
                                           required>
                                </div>
                                <div class="col-md-4 d-flex align-items-center">
                                    <input type="radio" 
                                           name="correct_option" 
                                           value="{{ $key }}" 
                                           class="me-2" 
                                           {{ $option->is_correct ? 'checked' : '' }} 
                                           required>
                                    <span>Correct</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button type="button" class="btn btn-success btn-sm mt-2" id="add-option">
                        + Add Option
                    </button>
                </div>

                {{-- Submit --}}
                <div class="text-end mt-3">
                    <button type="submit" class="btn btn-theme-secondary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    let optionIndex = {{ count($mcq->options) }};
    document.getElementById('add-option').addEventListener('click', function () {
        const container = document.getElementById('options-container');
        const div = document.createElement('div');
        div.classList.add('row', 'mb-2', 'option-row', 'align-items-center');
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
