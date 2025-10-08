  @extends('frontend.layouts.app')
  @section('title')
      Enroll Now
  @endsection
  @section('content')
      <section class="container my-5">
          <div class="text-center mb-5">
              <h2 class="fw-bold text-primary">Enroll Now</h2>
              <p class="text-secondary">Please fill out the form below to reserve your spot at TM Math Academy.</p>
          </div>

          <div class="d-flex justify-content-center">
              <div class="card shadow-sm border-0 rounded-4 p-4 p-md-5" style="max-width: 800px; width: 100%;">
                  <div class="card-body">
                      <form class="row g-4 needs-validation" id="enrollForm" method="POST"
                          action="{{ route('enroll.payment.start') }}" novalidate>
                          @csrf

                          {{-- Full Name --}}
                          <div class="col-md-6">
                              <label class="form-label fw-semibold text-secondary">Full Name</label>
                              <input type="text" name="full_name"
                                  class="form-control rounded-pill @error('full_name') is-invalid @enderror"
                                  placeholder="Enter child's full name" value="{{ old('full_name') }}" required>
                              <div class="invalid-feedback">Please enter full name.</div>
                              @error('full_name')
                                  <div class="text-danger small">{{ $message }}</div>
                              @enderror
                          </div>

                          {{-- Age Years --}}
                          <div class="col-md-3">
                              <label class="form-label fw-semibold text-secondary">Age (Years)</label>
                              <input type="number" name="age_years"
                                  class="form-control rounded-pill @error('age_years') is-invalid @enderror"
                                  placeholder="Years" value="{{ old('age_years') }}">
                              <div class="invalid-feedback">Please enter valid years.</div>
                              @error('age_years')
                                  <div class="text-danger small">{{ $message }}</div>
                              @enderror
                          </div>

                          {{-- Age Months --}}
                          <div class="col-md-3">
                              <label class="form-label fw-semibold text-secondary">Age (Months)</label>
                              <input type="number" name="age_months"
                                  class="form-control rounded-pill @error('age_months') is-invalid @enderror"
                                  placeholder="Months" value="{{ old('age_months') }}">
                              <div class="invalid-feedback">Please enter valid months.</div>
                              @error('age_months')
                                  <div class="text-danger small">{{ $message }}</div>
                              @enderror
                          </div>

                          {{-- Gender --}}
                          <div class="col-md-6">
                              <label class="form-label fw-semibold text-secondary">Gender</label>
                              <select name="gender" class="form-select rounded-pill @error('gender') is-invalid @enderror">
                                  <option value="">Select gender</option>
                                  <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                  <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                  <option value="Transgender" {{ old('gender') == 'Transgender' ? 'selected' : '' }}>
                                      Transgender</option>
                                  <option value="Prefer not to say"
                                      {{ old('gender') == 'Prefer not to say' ? 'selected' : '' }}>Prefer not to say
                                  </option>
                              </select>
                              <div class="invalid-feedback">Please select gender.</div>
                              @error('gender')
                                  <div class="text-danger small">{{ $message }}</div>
                              @enderror
                          </div>

                          {{-- Grade --}}
                          <div class="col-md-6">
                              <label class="form-label fw-semibold text-secondary">Grade</label>
                              <input type="text" name="grade"
                                  class="form-control rounded-pill @error('grade') is-invalid @enderror"
                                  placeholder="Enter current grade" value="{{ old('grade') }}">
                              <div class="invalid-feedback">Please enter grade.</div>
                              @error('grade')
                                  <div class="text-danger small">{{ $message }}</div>
                              @enderror
                          </div>

                          {{-- Guardian Name --}}
                          <div class="col-md-6">
                              <label class="form-label fw-semibold text-secondary">Parent / Guardian Name</label>
                              <input type="text" name="guardian_name"
                                  class="form-control rounded-pill @error('guardian_name') is-invalid @enderror"
                                  placeholder="Enter parent or guardian name" value="{{ old('guardian_name') }}">
                              <div class="invalid-feedback">Please enter guardian name.</div>
                              @error('guardian_name')
                                  <div class="text-danger small">{{ $message }}</div>
                              @enderror
                          </div>

                          {{-- Email --}}
                          <div class="col-md-6">
                              <label class="form-label fw-semibold text-secondary">Email</label>
                              <input type="email" name="email"
                                  class="form-control rounded-pill @error('email') is-invalid @enderror"
                                  placeholder="Enter email address" value="{{ old('email') }}" required>
                              <div class="invalid-feedback">Please enter a valid email.</div>
                              @error('email')
                                  <div class="text-danger small">{{ $message }}</div>
                              @enderror
                          </div>

                          {{-- Phone --}}
                          <div class="col-md-6">
                              <label class="form-label fw-semibold text-secondary">Phone Number</label>
                              <input type="tel" name="phone"
                                  class="form-control rounded-pill @error('phone') is-invalid @enderror"
                                  placeholder="Enter phone number" value="{{ old('phone') }}">
                              <div class="invalid-feedback">Please enter a valid phone number.</div>
                              @error('phone')
                                  <div class="text-danger small">{{ $message }}</div>
                              @enderror
                          </div>

                          {{-- Postal Code (6 boxes merged into one input) --}}
                          <div class="col-md-6">
                              <label class="form-label fw-semibold text-secondary">Postal Code</label>
                              <input type="text" name="postal_code" maxlength="6"
                                  class="form-control rounded-pill @error('postal_code') is-invalid @enderror"
                                  placeholder="Enter 6-character postal code" value="{{ old('postal_code') }}">
                              @error('postal_code')
                                  <div class="text-danger small">{{ $message }}</div>
                              @enderror
                          </div>

                          {{-- Address --}}
                          <div class="col-12">
                              <label class="form-label fw-semibold text-secondary">Street Address</label>
                              <textarea name="address" class="form-control rounded-4 @error('address') is-invalid @enderror" rows="3"
                                  placeholder="e.g. 12345 99 Ave NW">{{ old('address') }}</textarea>
                              <div class="invalid-feedback">Please enter address.</div>
                              @error('address')
                                  <div class="text-danger small">{{ $message }}</div>
                              @enderror
                          </div>

                          {{-- Submit --}}
                          <div class="col-12 text-center">
                              <button type="submit" class="btn btn-primary rounded-pill px-5 py-2 mt-3">Submit
                                  Enrollment</button>
                          </div>
                      </form>

                  </div>
              </div>
          </div>
      </section>

      {{-- <script>
          (function() {
              'use strict';
              const form = document.getElementById('enrollForm');

              form.addEventListener('submit', function(event) {
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
          document.addEventListener("DOMContentLoaded", function() {
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
  @endsection
  @section('footer')
  @endsection
