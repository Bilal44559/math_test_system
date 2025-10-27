@extends('frontend.layouts.app')
@section('title')
Enroll Now
@endsection
@section('content')
<style>
.tooltip-container {
  position: relative;
  display: inline-block;
  line-height: 1;
}

.tooltip-text {
  position: absolute;
  bottom: calc(100% + 8px);
  left: 50%;
  transform: translateX(-50%) translateY(0);
  background: #ff1f1f; /* red bubble */
  color: #fff;
  padding: 6px 10px;
  border-radius: 8px;
  font-size: 12px;
  white-space: nowrap;
  z-index: 9999;
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.15s ease, transform 0.15s ease;
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
}

/* arrow under tooltip */
.tooltip-text::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  transform: translateX(-50%);
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-top: 6px solid #ff1f1f;
}

/* hover or keyboard focus */
.tooltip-container:hover .tooltip-text,
.tooltip-container:focus-within .tooltip-text {
  opacity: 1;
  visibility: visible;
  transform: translateX(-50%) translateY(-3px);
}


</style>
<section class="container my-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-primary">Enroll Now</h2>
        <p class="text-secondary">Please fill out the form below to reserve your spot.</p>
    </div>
    <x-alert />

    <div class="d-flex justify-content-center">
        <div class="card shadow-sm border-0 rounded-4 p-4 p-md-5" style="max-width: 800px; width: 100%;">
            <div class="card-body">
                <form class="row g-4 needs-validation" id="enrollForm" method="POST"
                    action="{{ route('enroll.payment.start') }}" novalidate>
                    @csrf

                    {{-- Full Name --}}
                    <div class="col-md-6">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                width="20" height="20" class="text-secondary">
                                <circle cx="12" cy="7" r="4" />
                                <path d="M4 21c0-4 3.6-7 8-7s8 3 8 7" />
                            </svg>

                        </span>
                        <label class="form-label fw-semibold text-secondary">Full Name <span
                                class="text-danger">*</span></label>
                        <input type="text" name="full_name"
                            class="form-control rounded-pill @error('full_name') is-invalid @enderror"
                            placeholder="Enter student's full name" value="{{ old('full_name') }}" required>
                        <div class="invalid-feedback">Please enter full name.</div>
                    </div>

                    {{-- Age Years --}}
                {{-- Age Years & Months (same row) --}}
<div class="col-md-6 d-flex align-items-end">
    <div class="me-2 flex-fill">
        <label class="form-label fw-semibold text-secondary">Age (Years) <span class="text-danger">*</span></label>
        <select name="age_years"
            class="form-select rounded-pill @error('age_years') is-invalid @enderror">
            <!--<option value="" disabled selected>Select Years</option>-->
            @for ($i = 10; $i <= 17; $i++)
                <option value="{{ $i }}" {{ old('age_years') == $i ? 'selected' : '' }}>{{ $i }}</option>
            @endfor
        </select>
        <div class="invalid-feedback">Please select valid years.</div>
    </div>

    <span class="fw-bold fs-5 text-secondary mb-2">&</span>

    <div class="ms-2 flex-fill">
        <label class="form-label fw-semibold text-secondary">Months <span class="text-danger">*</span></label>
        <select name="age_months"
            class="form-select rounded-pill @error('age_months') is-invalid @enderror">
            <!--<option value="" disabled selected>Select Months</option>-->
            @for ($m = 0; $m <= 11; $m++)
                <option value="{{ $m }}" {{ old('age_months') == $m ? 'selected' : '' }}>{{ $m }}</option>
            @endfor
        </select>
        <div class="invalid-feedback">Please select valid months.</div>
    </div>
</div>



                    {{-- Gender --}}
                    <div class="col-md-6">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                width="20" height="20" class="text-secondary">
                                <circle cx="12" cy="7" r="4" />
                                <path d="M4 21c0-4 3.6-7 8-7s8 3 8 7" />
                                <path d="M19 4v3" />
                                <path d="M17.5 5.5h3" />
                            </svg>
                        </span>
                        <label class="form-label fw-semibold text-secondary">Gender <span
                                class="text-danger">*</span></label>
                        <select name="gender" class="form-select rounded-pill @error('gender') is-invalid @enderror">
                            <option value="">Select gender</option>
                            <option value="Male" {{ old('gender')=='Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ old('gender')=='Female' ? 'selected' : '' }}>Female</option>
                            <option value="Transgender" {{ old('gender')=='Transgender' ? 'selected' : '' }}>
                                Transgender</option>
                            <option value="Prefer not to say" {{ old('gender')=='Prefer not to say' ? 'selected' : ''
                                }}>Prefer not to say
                            </option>
                        </select>
                        <div class="invalid-feedback">Please select gender.</div>
                    </div>

                    {{-- Grade --}}
                    <div class="col-md-6">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                width="20" height="20" class="text-secondary">
                                <path d="M22 10L12 4 2 10l10 6 10-6z" />
                                <path d="M6 12v5c0 1.1 2.7 2 6 2s6-.9 6-2v-5" />
                                <path d="M18 20v-3" />
                            </svg>
                        </span>
                        <label class="form-label fw-semibold text-secondary">Grade (optional) </label>
                        <input type="text" name="grade"
                            class="form-control rounded-pill @error('grade') is-invalid @enderror"
                            placeholder="Enter current grade" value="{{ old('grade') }}">
                        <div class="invalid-feedback">Please enter grade.</div>
                    </div>
                    {{-- student email --}}
                    <div class="col-md-6">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                width="20" height="20" class="text-secondary">
                                <rect x="3" y="5" width="18" height="14" rx="2" ry="2" />
                                <polyline points="3 7 12 13 21 7" />
                            </svg>
                        </span>
                        <label class="form-label fw-semibold text-secondary">Student's Email <span
                                class="text-danger">*</span></label>
                        <input type="email" name="email"
                            class="form-control rounded-pill @error('email') is-invalid @enderror"
                            placeholder="Enter email address" value="{{ old('email') }}" required>
                        <div class="invalid-feedback">Please enter a valid email.</div>
                    </div>

                    {{-- Guardian Name --}}
                    <div class="col-md-6">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                width="20" height="20" class="text-secondary">
                                <circle cx="12" cy="7" r="4" />
                                <path d="M4 21c0-4 3.6-7 8-7s8 3 8 7" />
                            </svg>

                        </span>
                        <label class="form-label fw-semibold text-secondary">Parent / Guardian Name <span
                                class="text-danger">*</span></label>
                        <input type="text" name="guardian_name"
                            class="form-control rounded-pill @error('guardian_name') is-invalid @enderror"
                            placeholder="Enter parent or guardian name" value="{{ old('guardian_name') }}">
                        <div class="invalid-feedback">Please enter guardian name.</div>
                    </div>

                    {{-- Email --}}
                    <div class="col-md-6">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                width="20" height="20" class="text-secondary">
                                <rect x="3" y="5" width="18" height="14" rx="2" ry="2" />
                                <polyline points="3 7 12 13 21 7" />
                            </svg>
                        </span>
                        <label class="form-label fw-semibold text-secondary">Parent / Guardian's Email <span
                                class="text-danger">*</span></label>
                        <input type="email" name="guardians_email"
                            class="form-control rounded-pill @error('guardians_email') is-invalid @enderror"
                            placeholder="Enter Guardian's Email address" value="{{ old('guardians_email') }}" required>
                        <div class="invalid-feedback">Please enter a valid Guardian's Email email.</div>
                    </div>

                    {{-- Phone --}}
                    <div class="col-md-6">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                width="20" height="20" class="text-secondary">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2
           19.79 19.79 0 0 1-8.63-3.07
           19.5 19.5 0 0 1-6-6
           19.79 19.79 0 0 1-3.07-8.63
           A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72
           c.12.83.37 1.64.72 2.4a2 2 0 0 1-.45 2.18l-1.27 1.27
           a16 16 0 0 0 6 6l1.27-1.27
           a2 2 0 0 1 2.18-.45
           c.76.35 1.57.6 2.4.72A2 2 0 0 1 22 16.92z" />
                            </svg>
                        </span>
                        <label class="form-label fw-semibold text-secondary">Emergency Phone Number <span
                                class="text-danger">*</span></label>
                        <input type="tel" name="phone"
                            class="form-control rounded-pill @error('phone') is-invalid @enderror"
                            placeholder="Enter phone number" value="{{ old('phone') }}">
                        <div class="invalid-feedback">Please enter a valid emergency Phone Number.</div>
                    </div>
                    {{--adress--}}
                    {{-- Address Section (4 fields) --}}
<div class="col-md-6">
    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                width="20" height="20" class="text-secondary">
                                <path d="M12 21s6-5.2 6-10a6 6 0 1 0-12 0c0 4.8 6 10 6 10z" />
                                <circle cx="12" cy="11" r="2.5" />
                            </svg></span>
    <label class="form-label fw-semibold text-secondary">Street address <span class="text-danger">*</span></label>
    <input type="text" name="address"
        class="form-control rounded-pill @error('address') is-invalid @enderror"
        placeholder="e.g. 12345 99 Ave NW" value="{{ old('address') }}" required>
    <div class="invalid-feedback">Please enter street address.</div>
</div>

<div class="col-md-6">
    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
    stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
    width="20" height="20" class="text-secondary">
    <path d="M3 9.5L12 3l9 6.5V21a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1V9.5z" />
</svg>
</span>
    <label class="form-label fw-semibold text-secondary">Unit number <span class="text-danger">*</span></label>
    <input type="text" name="unit_number"
        class="form-control rounded-pill @error('unit_number') is-invalid @enderror"
        placeholder="If unit# & street# same, re-type street#" value="{{ old('unit_number') }}" required>
    <div class="invalid-feedback">Please enter unit number.</div>
</div>

<div class="col-md-6">
    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                width="20" height="20" class="text-secondary">
                                <path d="M12 21s6-5.2 6-10a6 6 0 1 0-12 0c0 4.8 6 10 6 10z" />
                                <circle cx="12" cy="11" r="2.5" />
                            </svg></span>
    <label class="form-label fw-semibold text-secondary">Province <span class="text-danger">*</span></label>
    <select name="province"
        class="form-select rounded-pill @error('province') is-invalid @enderror" required>
        <option value="Alberta" {{ old('province')=='Alberta' ? 'selected' : '' }}>Alberta</option>
    </select>
    <div class="invalid-feedback">Please select a province.</div>
</div>

<div class="col-md-6">
    <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                width="20" height="20" class="text-secondary">
                                <path d="M12 21s6-5.2 6-10a6 6 0 1 0-12 0c0 4.8 6 10 6 10z" />
                                <circle cx="12" cy="11" r="2.5" />
                            </svg></span>
    <label class="form-label fw-semibold text-secondary">City <span class="text-danger">*</span></label>
    <select name="city"
        class="form-select rounded-pill @error('city') is-invalid @enderror" required>
       <option value="Edmonton" {{ old('city')=='Edmonton' ? 'selected' : '' }}>Edmonton</option>
        <option value="Beaumont" {{ old('city')=='Beaumont' ? 'selected' : '' }}>Beaumont</option>
        <option value="Devon" {{ old('city')=='Devon' ? 'selected' : '' }}>Devon</option>
        <option value="Fort Saskatchawen" {{ old('city')=='Fort Saskatchawen' ? 'selected' : '' }}>Fort Saskatchawen</option>
        <option value="Leduc" {{ old('city')=='Leduc' ? 'selected' : '' }}>Leduc</option>
        <option value="Nisku" {{ old('city')=='Nisku' ? 'selected' : '' }}>Nisku</option>
        <option value="Sherwood park" {{ old('city')=='Sherwood park' ? 'selected' : '' }}>Sherwood park</option>
        <option value="Spruce grove" {{ old('city')=='Spruce grove' ? 'selected' : '' }}>Spruce grove</option>
        <option value="St Albert" {{ old('city')=='St Albert' ? 'selected' : '' }}>St Albert</option>
        <option value="Stony plain" {{ old('city')=='Stony plain' ? 'selected' : '' }}>Stony plain</option>
    </select>
    <div class="invalid-feedback">Please select city.</div>
</div>

                    {{-- Postal Code (6 boxes merged into one input) --}}
                 <div class="col-md-6">
    <span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
            width="20" height="20" class="text-secondary">
            <rect x="3" y="5" width="18" height="14" rx="2" ry="2" />
            <polyline points="3 7 12 13 21 7" />
        </svg>
    </span>

<label class="form-label fw-semibold text-secondary">
  Post Code
  <span class="tooltip-container" tabindex="0" aria-label="Postal pattern">
    <!-- SVG info icon -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
         fill="none" stroke="currentColor" stroke-width="1.8"
         stroke-linecap="round" stroke-linejoin="round"
         width="16" height="16" class="text-secondary"
         style="cursor: pointer; margin-left: 6px;">
      <circle cx="12" cy="12" r="10" />
      <line x1="12" y1="16" x2="12" y2="12" />
      <circle cx="12" cy="8" r="0.6" fill="currentColor" />
    </svg>

    <!-- Tooltip -->
    <span class="tooltip-text">Pattern is T6R 0GR</span>
  </span>
</label>


    <div class="d-flex gap-1 justify-content-between">
        @for ($i = 0; $i < 6; $i++)
            <input type="text" maxlength="1" name="postal_code[]"
                class="form-control text-uppercase border rounded @error('postal_code') is-invalid @enderror post-code-input"
                style="width: 52px; font-size: 15px;">
        @endfor
    </div>

    <div id="postal-error" class="text-danger small mt-2 d-none">
        Invalid postal code format (e.g. T6R 0GR)
    </div>
</div>


                    {{-- Submit --}}
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary rounded-pill px-5 py-2 mt-3">Procced to Payment</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

{{--
<script>
    (function () {
        'use strict';
        const form = document.getElementById('enrollForm');

        form.addEventListener('submit', function (event) {
            event.preventDefault();
            event.stopPropagation();

            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return;
            }


            form.classList.add('was-validated');
            alert('Enrollment submitted successfully!');
            form.reset();
            form.classList.remove('was-validated');
        });
    })();
    document.addEventListener("DOMContentLoaded", function () {
        const inputs = document.querySelectorAll(".post-code");
        const errorDiv = document.getElementById("postal-error");

        //   inputs.forEach((input, index) => {
        //       input.addEventListener("input", function() {
        //           this.value = this.value.toUpperCase();

        //           const isLetter = /^[A-Za-z]$/.test(this.value);
        //           const isNumber = /^\d$/.test(this.value);

        //           // Positions 0, 2, 4 = letters; 1, 3, 5 = numbers
        //           if ((index % 2 === 0 && !isLetter) || (index % 2 !== 0 && !isNumber)) {
        //               this.value = "";
        //               errorDiv.classList.remove("d-none");
        //           } else {
        //               errorDiv.classList.add("d-none");
        //           }

        //           // Auto-move to next input
        //           if (this.value.length === 1 && index < inputs.length - 1) {
        //               inputs[index + 1].focus();
        //           }
        //       });

        //       // Move backward on Backspace
        //       input.addEventListener("keydown", function(e) {
        //           if (e.key === "Backspace" && this.value === "" && index > 0) {
        //               inputs[index - 1].focus();
        //           }
        //       });
        //   });
    });
</script> --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const inputs = document.querySelectorAll(".post-code-input");
        const errorDiv = document.getElementById("postal-error");

        inputs.forEach((input, index) => {
            input.addEventListener("input", function () {
                this.value = this.value.toUpperCase();

                const isLetter = /^[A-Z]$/.test(this.value);
                const isNumber = /^[0-9]$/.test(this.value);

                if ((index % 2 === 0 && !isLetter) || (index % 2 !== 0 && !isNumber)) {
                    this.value = "";
                    errorDiv.classList.remove("d-none");
                } else {
                    errorDiv.classList.add("d-none");
                    // Auto focus next input
                    if (this.value && index < inputs.length - 1) {
                        inputs[index + 1].focus();
                    }
                }
            });

            input.addEventListener("keydown", function (e) {
                if (e.key === "Backspace" && !this.value && index > 0) {
                    inputs[index - 1].focus();
                }
            });
        });

        const form = document.getElementById("enrollForm");
        form.addEventListener("submit", function () {
            const postalCode = Array.from(inputs).map(i => i.value).join('');
            const hidden = document.createElement("input");
            hidden.type = "hidden";
            hidden.name = "postal_code";
            hidden.value = postalCode;
            form.appendChild(hidden);
        });
    });
</script>

@endsection
@section('footer')
@endsection