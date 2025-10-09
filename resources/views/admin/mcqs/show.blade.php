@extends('layouts.app')

@section('content')
<div class="my-5">
    {{-- Header --}}
    <div class="card-header text-black mb-4">
        <div class="d-flex align-items-center justify-content-between">
            <h5 class="mb-0">MCQ Details</h5>
            <div>
            
                <a href="{{ route('admin.mcqs.index') }}" class="btn btn-theme-primary">
                    Back to MCQs
                </a>
            </div>
        </div>
    </div>

    {{-- Alert Messages --}}
    @include('components.alert')

    <div class="row gy-4">
        {{-- Question --}}
        <div class="col-12">
            <div class="bg-white p-4 rounded shadow-sm">
                <h6>Question</h6>
                <p class="text-sm mb-0">{{ $mcq->question }}</p>
            </div>
        </div>

        {{-- Options --}}
        @if ($mcq->options->isNotEmpty())
        <div class="col-12">
            <h5 class="mb-3">Options</h5>
            <div class="bg-white p-3 rounded shadow-sm">
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Option Text</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mcq->options as $key => $option)
                                <tr class="{{ $option->is_correct ? 'table-success' : '' }}">
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <i class="fa-solid fa-circle-dot me-2"></i>
                                        {{ $option->option_text }}
                                    </td>
                                    <td>
                                        @if ($option->is_correct)
                                            <span class="badge bg-success px-3 py-2">Correct</span>
                                        @else
                                            <span class="badge bg-secondary px-3 py-2">Incorrect</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
