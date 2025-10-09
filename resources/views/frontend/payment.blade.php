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
    <x-alert />

    <div class="d-flex justify-content-center">
        <div class="card p-4 p-md-5" style="max-width: 600px; width: 100%;">
            <h4 class="fw-semibold text-center mb-4 text-primary">💳 Card Holder Details</h4>

            <form id="paymentForm" action="{{ route('payment.process') }}" method="POST" novalidate>
                @csrf

                <div class="mb-3">
                    <label for="Name" class="form-label fw-semibold text-secondary">Card Holder Name</label>
                    <input type="text" id="cardHolderName" name="card_holder_name" class="form-control" placeholder="Name"
                        style="text-transform: uppercase;" required>
                    <div class="invalid-feedback">Please enter card holder's name.</div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold text-secondary">Card Details</label>
                    <div id="card-element" class="form-control p-3" style="height: auto;"></div>
                    <div id="card-errors" class="text-danger mt-2"></div>
                </div>

                {{-- 💰 Payment Summary --}}
                <div class="border-top pt-3 mt-4">
                    <h5 class="fw-semibold text-primary mb-3">Payment Summary</h5>
                    <table class="table table-borderless text-secondary mb-0">
                        <tr>
                            <td>Payment:</td>
                            <td class="text-end">CA$ {{ number_format($paymentSetting->payment, 2) }}</td>
                        </tr>
                        <tr>
                            <td>GST (Tax):</td>
                            <td class="text-end">CA$ {{ number_format($paymentSetting->gst, 2) }}</td>
                        </tr>
                        <tr class="fw-bold text-dark border-top">
                            <td>Total:</td>
                            <td class="text-end">CA$ {{ number_format($paymentSetting->total, 2) }}</td>
                        </tr>
                    </table>
                </div>

                {{-- Hidden fields for backend --}}
                <input type="hidden" name="payment" value="{{ $paymentSetting->payment }}">
                <input type="hidden" name="gst" value="{{ $paymentSetting->gst }}">
                <input type="hidden" name="total" value="{{ $paymentSetting->total }}">

                <div class="text-center mt-4">
                    <p class="text-muted mb-2">Accepted Cards:</p>
                    <img src="{{ asset('build/images/visa_logo.png') }}" alt="Visa" style="height: 22px; width: 60px;">
                    <img src="{{ asset('build/images/master_logo.png') }}" alt="Mastercard" style="height: 35px; width: 60px;">
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary px-5 py-2">
                        Pay CA$ {{ number_format($paymentSetting->total, 2) }} Now
                    </button>
                </div>

                <div class="text-center mt-2">
                    <button type="button" onclick="window.history.back()"
                        class="btn btn-outline-secondary rounded-pill px-4">Go Back</button>
                </div>
            </form>
        </div>
    </div>
</section>

<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('{{ env('STRIPE_KEY') }}');
    const elements = stripe.elements();

    const style = {
        base: {
            color: "#32325d",
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: "antialiased",
            fontSize: "16px",
            "::placeholder": { color: "#aab7c4" }
        },
        invalid: { color: "#fa755a", iconColor: "#fa755a" }
    };

    const card = elements.create("card", { style: style });
    card.mount("#card-element");

    card.on('change', function(event) {
        const displayError = document.getElementById('card-errors');
        displayError.textContent = event.error ? event.error.message : '';
    });

    const form = document.getElementById('paymentForm');
    form.addEventListener('submit', async function(e) {
        e.preventDefault();

        const cardHolderName = document.getElementById('cardHolderName').value;

        const { paymentMethod, error } = await stripe.createPaymentMethod({
            type: 'card',
            card: card,
            billing_details: { name: cardHolderName },
        });

        if (error) {
            document.getElementById('card-errors').textContent = error.message;
        } else {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'payment_method_id';
            input.value = paymentMethod.id;
            form.appendChild(input);
            form.submit();
        }
    });
</script>
@endsection
