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
                      <form class="row g-4 needs-validation" id="enrollForm" novalidate>

                          <div class="col-md-6">
                              <label class="form-label fw-semibold text-secondary">Full Name</label>
                              <input type="text" class="form-control rounded-pill" placeholder="Enter child's full name"
                                  required>
                              <div class="invalid-feedback">Please enter full name.</div>
                          </div>

                          <div class="col-md-3">
                              <label class="form-label fw-semibold text-secondary">Age (Years)</label>
                              <input type="number" class="form-control rounded-pill" placeholder="Years" required
                                  min="1" max="18">
                              <div class="invalid-feedback">Please enter valid years .</div>
                          </div>

                          <div class="col-md-3">
                              <label class="form-label fw-semibold text-secondary">Age (Months)</label>
                              <input type="number" class="form-control rounded-pill" placeholder="Months" required
                                  min="1" max="12">
                              <div class="invalid-feedback">Please enter valid months (1–12).</div>
                          </div>

                          <div class="col-md-6">
                              <label class="form-label fw-semibold text-secondary">Gender</label>
                              <select class="form-select rounded-pill" required>
                                  <option selected disabled value="">Select gender</option>
                                  <option>Male</option>
                                  <option>Female</option>
                                  <option>Transgender</option>
                                  <option>Prefer not to say</option>
                              </select>
                              <div class="invalid-feedback">Please select gender.</div>
                          </div>

                          <div class="col-md-6">
                              <label class="form-label fw-semibold text-secondary">Grade</label>
                              <input type="text" class="form-control rounded-pill" placeholder="Enter current grade"
                                  required>
                              <div class="invalid-feedback">Please enter grade.</div>
                          </div>

                          <div class="col-md-6">
                              <label class="form-label fw-semibold text-secondary">Parent / Guardian Name</label>
                              <input type="text" class="form-control rounded-pill"
                                  placeholder="Enter parent or guardian name" required>
                              <div class="invalid-feedback">Please enter guardian name.</div>
                          </div>

                          <div class="col-md-6">
                              <label class="form-label fw-semibold text-secondary">Email</label>
                              <input type="email" class="form-control rounded-pill" placeholder="Enter email address"
                                  required>
                              <div class="invalid-feedback">Please enter a valid email.</div>
                          </div>

                          <div class="col-md-6">
                              <label class="form-label fw-semibold text-secondary">Phone Number</label>
                              <input type="tel" class="form-control rounded-pill" placeholder="Enter phone number"
                                  pattern="[0-9]{10,15}" required>
                              <div class="invalid-feedback">Please enter a valid phone number.</div>
                          </div>


                          <div class="col-12">
                              <label class="form-label fw-semibold text-secondary">Postal Code</label>
                              <div class="d-flex gap-2">
                                  <input type="text" maxlength="1" class="form-control px-1 text-center post-code"
                                      style="width: 45px;" required>
                                  <input type="text" maxlength="1" class="form-control px-1 text-center post-code"
                                      style="width: 45px;" required>
                                  <input type="text" maxlength="1" class="form-control px-1 text-center post-code"
                                      style="width: 45px;" required>
                                  <input type="text" maxlength="1" class="form-control px-1 text-center post-code"
                                      style="width: 45px;" required>
                                  <input type="text" maxlength="1" class="form-control px-1 text-center post-code"
                                      style="width: 45px;" required>
                                  <input type="text" maxlength="1" class="form-control px-1 text-center post-code"
                                      style="width: 45px;" required>
                              </div>
                              {{-- <div id="postal-error" class="text-danger mt-2 d-none">Pattern is T6R 0G7</div> --}}
                          </div>
                          <div class="col-12">
                              <label class="form-label fw-semibold text-secondary">Street Address</label>
                              <textarea class="form-control rounded-4" rows="3" placeholder="e.g. 12345 99 Ave NW" required></textarea>
                              <div class="invalid-feedback">Please enter address.</div>
                          </div>

                          <div class="col-12 text-center">

                              <button type="submit" class="btn btn-primary rounded-pill px-5 py-2 mt-3">Submit
                                  Enrollment</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </section>

      <script>
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
      </script>
  @endsection
  @section('footer')
  @endsection
