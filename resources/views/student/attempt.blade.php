<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Questions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8fafc;
            font-family: 'Poppins', sans-serif;
        }

        .timer-box {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #0d6efd;
            color: #fff;
            padding: 10px 20px;
            border-radius: 12px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.15);
            font-weight: 600;
            z-index: 1000;
        }

        .card {
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        .form-check-input:checked {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }

        .btn-primary {
            background-color: #0d6efd;
            border-color: #0d6efd;
            border-radius: 8px;
            padding: 10px 30px;
            font-weight: 600;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
            border-color: #0b5ed7;
        }

        .timer-expired {
            background-color: #dc3545 !important;
        }
    </style>
</head>
<body>

    {{-- Timer Box --}}
    <div id="timer" class="timer-box">
        ⏰ Time Left: <span id="timeDisplay">--:--:--</span>
    </div>

    <div class="container py-5">
        <h3 class="mb-4 text-center text-primary fw-bold">Answer the Following Questions</h3>
        <form id="testForm">
            <div id="questionsContainer"></div>

            <div class="text-center mt-4">
                <button id="submitBtn" class="btn btn-primary d-none">Submit Answers</button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const totalTime = 90 * 60 * 1000;
        const level = {{ $level }};
        const timerKey = 'exam_timer_level_' + level;
        const timerStartKey = 'exam_timer_start_time';

        let endTime = localStorage.getItem(timerKey);

        if (!endTime) {
            const startTime = Date.now();
            endTime = startTime + totalTime;
            localStorage.setItem(timerKey, endTime);
            localStorage.setItem(timerStartKey, startTime);
        }

        function updateTimer() {
            const now = Date.now();
            const remaining = endTime - now;

            if (remaining <= 0) {
                clearInterval(timerInterval);
                document.getElementById('timer').classList.add('timer-expired');
                document.getElementById('timeDisplay').textContent = 'Time’s Up!';
                localStorage.removeItem(timerKey);
                localStorage.removeItem(timerStartKey);
                setTimeout(() => {
                    window.location.href = "{{ route('test.timeout') }}";
                }, 1500);
                return;
            }

            const hours = Math.floor((remaining / (1000 * 60 * 60)) % 24);
            const minutes = Math.floor((remaining / (1000 * 60)) % 60);
            const seconds = Math.floor((remaining / 1000) % 60);
            document.getElementById('timeDisplay').textContent =
                `${hours.toString().padStart(2,'0')}:${minutes.toString().padStart(2,'0')}:${seconds.toString().padStart(2,'0')}`;
        }
        const timerInterval = setInterval(updateTimer, 1000);
        updateTimer();
        document.getElementById('testForm').addEventListener('submit', function (e) {
            const now = Date.now();
            if (now > endTime) {
                e.preventDefault();
                window.location.href = "{{ route('test.timeout') }}";
            }
        });
        window.addEventListener('beforeunload', () => {
            localStorage.removeItem(timerKey);
        });

        $(document).ready(function() {

            let currentLevel = 1;
            loadQuestions();

            function loadQuestions() {
                $.ajax({
                    url: "{{ route('attempt.questions') }}",
                    method: "GET",
                    success: function (data) {
                        console.log(data); // 🔍 Debug check in console

                        if (data.page_reload) {
                            // alert(data.message);
                            window.location.href = "{{ route('page.reload') }}";
                            return;
                        }

                        if (data.completed) {
                            showCongratulations();
                            return;
                        }

                        const container = $("#questionsContainer");
                        const heading = $("#testHeading");
                        const btn = $("#submitBtn");

                        container.html('');
                        btn.removeClass('d-none');
                        currentLevel = data.level;
                        heading.text(`Level ${data.level} Questions`);

                        data.questions.forEach((q, index) => {
                            let optionsHTML = '';
                            q.options.forEach(opt => {
                                optionsHTML += `
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="radio" name="answers[${q.id}]" value="${opt.id}" id="opt${opt.id}">
                                        <label class="form-check-label" for="opt${opt.id}">${opt.option_text}</label>
                                    </div>
                                `;
                            });

                            container.append(`
                                <div class="card mb-3 shadow-sm border-0">
                                    <div class="card-body">
                                        <p class="fw-bold mb-3 text-dark">Q${index + 1}. ${q.question}</p>
                                        ${optionsHTML}
                                    </div>
                                </div>
                            `);
                        });
                    },
                    error: function (xhr) {
                        console.error("Error loading questions:", xhr.responseText);
                        alert("Failed to load questions. Please refresh the page.");
                    }
                });
            }

            $("#submitBtn").click(function () {
                const btn = $(this);
                btn.prop("disabled", true).html(`<span class="spinner-border spinner-border-sm me-2"></span> Loading...`);

                const formData = {};
                $("input[type='radio']:checked").each(function () {
                    const name = $(this).attr("name");
                    const value = $(this).val();
                    formData[name] = value;
                });

                $.ajax({
                    url: "{{ route('attempt.submit') }}",
                    method: "POST",
                    data: formData,
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    success: function (data) {
                        console.log(data);

                        if (data.completed) {
                            showCongratulations();
                        } else if (data.next_level) {
                            // alert(data.message);
                            loadQuestions(); // Load next level
                        } else if (data.failed) {
                            // alert(data.message);
                            window.location.href = "{{ route('test.finish') }}";
                        }
                    },
                    error: function (xhr) {
                        console.error("Submit error:", xhr.responseText);
                        alert("Failed to submit answers. Please try again.");
                    },
                    complete: function () {
                        // Reset button after AJAX completes
                        btn.prop("disabled", false).text("Submit Answers");
                    }
                });
            });

            function showCongratulations() {
                document.body.innerHTML = `
                    <div class="d-flex flex-column justify-content-center align-items-center text-center" style="height:100vh;">
                        <img src="https://cdn-icons-png.flaticon.com/512/4225/4225926.png" width="160" class="mb-4">
                        <h2 class="text-success fw-bold">🎉 Congratulations!</h2>
                        <p class="text-muted">You’ve successfully completed all levels.</p>
                    </div>
                `;
            }
        });
    </script>
</body>
</html>
