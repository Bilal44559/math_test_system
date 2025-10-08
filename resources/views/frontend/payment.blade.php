@extends('frontend.layouts.app')

@section('title')
    Payment
@endsection
@section('content')
    <section class="container my-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold text-primary">Payment Details</h2>
            <p class="text-secondary">Securely complete your enrollment payment below.</p>
        </div>

        <div class="d-flex justify-content-center">
            <div class="card p-4 p-md-5" style="max-width: 600px; width: 100%;">
                <h4 class="fw-semibold text-center mb-4 text-primary">💳 Card Holder Details</h4>

                <form id="paymentForm" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="Name" class="form-label fw-semibold text-secondary">Card Holder Name</label>
                        <input type="text" id="Name" class="form-control" placeholder="Name"
                            style="text-transform: uppercase;" required>
                        <div class="invalid-feedback">Please enter card holder's name.</div>
                    </div>

                    <div class="mb-3">
                        <label for="cardNumber" class="form-label fw-semibold text-secondary">Card Number</label>
                        <input type="text" id="cardNumber" class="form-control" placeholder="1234 1234 1234 1234"
                            maxlength="19" required>
                        <div class="invalid-feedback">Please enter a valid card number.</div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label fw-semibold text-secondary">Expiry Month</label>
                            <select class="form-select" required>
                                <option selected disabled value="">MM</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                                <option>07</option>
                                <option>08</option>
                                <option>09</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                            <div class="invalid-feedback">Select a valid month.</div>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold text-secondary">Expiry Year</label>
                            <select class="form-select" required>
                                <option selected disabled value="">YY</option>
                                <option>2025</option>
                                <option>2026</option>
                                <option>2027</option>
                                <option>2028</option>
                                <option>2029</option>
                                <option>2030</option>
                                <option>2030</option>
                                <option>2030</option>
                                <option>2031</option>
                                <option>2032</option>
                                <option>2033</option>
                                <option>2034</option>
                                <option>2035</option>
                                <option>2036</option>
                                <option>2037</option>
                                <option>2038</option>
                                <option>2039</option>
                                <option>2040</option>
                            </select>
                            <div class="invalid-feedback">Select a valid year.</div>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold text-secondary">CVV</label>
                            <input type="number" class="form-control" id="numInput" maxlength="4" placeholder=""
                                required>
                            <div class="invalid-feedback">Enter a valid CVV.</div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <p class="text-muted mb-2">Accepted Cards:</p>
                        <img src="{{ asset('build/images/visa_logo.png') }}" alt="Visa"
                            style="height: 22px; width: 60px;">
                        <img src="{{ asset('build/images/master_logo.png') }}" alt="Mastercard"
                            style="height: 35px; width: 60px;">
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary px-5 py-2">Pay CA$ 325 Now</button>
                    </div>
                    <div class="text-center mt-2">
                        <button type="button" onclick="window.history.back()"
                            class="btn btn-outline-secondary rounded-pill px-4">Go Back</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        (function() {
            'use strict';
            const form = document.getElementById('paymentForm');
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                event.stopPropagation();

                if (!form.checkValidity()) {
                    form.classList.add('was-validated');
                    return;
                }

                form.classList.add('was-validated');
                alert('Payment processed successfully! (Demo only — no charge applied)');
                form.reset();
                form.classList.remove('was-validated');
            });
        })();
        document.getElementById("numInput").addEventListener("input", function() {
            if (this.value.length > 4) {
                this.value = this.value.slice(0, 4);
            }
        });
    </script>
@endsection
@section('footer')
@endsection
