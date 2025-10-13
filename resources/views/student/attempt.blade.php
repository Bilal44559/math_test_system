<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Questions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5">
        <h3 class="mb-4 text-center">Answer the following questions</h3>

        <form method="POST" action="{{ route('attempt.submit') }}">
            @csrf
            @foreach ($questions as $question)
                <div class="card mb-3 shadow-sm border-0">
                    <div class="card-body">
                        <p class="fw-bold mb-3">Q{{ $loop->iteration }}. {{ $question->question }}</p>

                        @foreach ($question->options as $option)
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio"
                                       name="answers[{{ $question->id }}]"
                                       value="{{ $option->id }}"
                                       id="option{{ $option->id }}">
                                <label class="form-check-label" for="option{{ $option->id }}">
                                    {{ $option->option_text }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <div class="text-center">
                <button type="submit" class="btn btn-primary px-4 py-2">Submit Answers</button>
            </div>
        </form>
    </div>

</body>
</html>
