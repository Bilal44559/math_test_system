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
        <!-- Canada (provinces & territories) -->
<option value="Alberta" {{ old('province')=='Alberta' ? 'selected' : '' }}>Alberta</option>
<option value="British Columbia" {{ old('province')=='British Columbia' ? 'selected' : '' }}>British Columbia</option>
<option value="Manitoba" {{ old('province')=='Manitoba' ? 'selected' : '' }}>Manitoba</option>
<option value="New Brunswick" {{ old('province')=='New Brunswick' ? 'selected' : '' }}>New Brunswick</option>
<option value="Newfoundland and Labrador" {{ old('province')=='Newfoundland and Labrador' ? 'selected' : '' }}>Newfoundland and Labrador</option>
<option value="Nova Scotia" {{ old('province')=='Nova Scotia' ? 'selected' : '' }}>Nova Scotia</option>
<option value="Ontario" {{ old('province')=='Ontario' ? 'selected' : '' }}>Ontario</option>
<option value="Prince Edward Island" {{ old('province')=='Prince Edward Island' ? 'selected' : '' }}>Prince Edward Island</option>
<option value="Quebec" {{ old('province')=='Quebec' ? 'selected' : '' }}>Quebec</option>
<option value="Saskatchewan" {{ old('province')=='Saskatchewan' ? 'selected' : '' }}>Saskatchewan</option>
<option value="Northwest Territories" {{ old('province')=='Northwest Territories' ? 'selected' : '' }}>Northwest Territories</option>
<option value="Nunavut" {{ old('province')=='Nunavut' ? 'selected' : '' }}>Nunavut</option>
<option value="Yukon" {{ old('province')=='Yukon' ? 'selected' : '' }}>Yukon</option>

<!-- United States (states + DC) -->
<option value="Alabama" {{ old('province')=='Alabama' ? 'selected' : '' }}>Alabama</option>
<option value="Alaska" {{ old('province')=='Alaska' ? 'selected' : '' }}>Alaska</option>
<option value="Arizona" {{ old('province')=='Arizona' ? 'selected' : '' }}>Arizona</option>
<option value="Arkansas" {{ old('province')=='Arkansas' ? 'selected' : '' }}>Arkansas</option>
<option value="California" {{ old('province')=='California' ? 'selected' : '' }}>California</option>
<option value="Colorado" {{ old('province')=='Colorado' ? 'selected' : '' }}>Colorado</option>
<option value="Connecticut" {{ old('province')=='Connecticut' ? 'selected' : '' }}>Connecticut</option>
<option value="Delaware" {{ old('province')=='Delaware' ? 'selected' : '' }}>Delaware</option>
<option value="District of Columbia" {{ old('province')=='District of Columbia' ? 'selected' : '' }}>District of Columbia</option>
<option value="Florida" {{ old('province')=='Florida' ? 'selected' : '' }}>Florida</option>
<option value="Georgia" {{ old('province')=='Georgia' ? 'selected' : '' }}>Georgia</option>
<option value="Hawaii" {{ old('province')=='Hawaii' ? 'selected' : '' }}>Hawaii</option>
<option value="Idaho" {{ old('province')=='Idaho' ? 'selected' : '' }}>Idaho</option>
<option value="Illinois" {{ old('province')=='Illinois' ? 'selected' : '' }}>Illinois</option>
<option value="Indiana" {{ old('province')=='Indiana' ? 'selected' : '' }}>Indiana</option>
<option value="Iowa" {{ old('province')=='Iowa' ? 'selected' : '' }}>Iowa</option>
<option value="Kansas" {{ old('province')=='Kansas' ? 'selected' : '' }}>Kansas</option>
<option value="Kentucky" {{ old('province')=='Kentucky' ? 'selected' : '' }}>Kentucky</option>
<option value="Louisiana" {{ old('province')=='Louisiana' ? 'selected' : '' }}>Louisiana</option>
<option value="Maine" {{ old('province')=='Maine' ? 'selected' : '' }}>Maine</option>
<option value="Maryland" {{ old('province')=='Maryland' ? 'selected' : '' }}>Maryland</option>
<option value="Massachusetts" {{ old('province')=='Massachusetts' ? 'selected' : '' }}>Massachusetts</option>
<option value="Michigan" {{ old('province')=='Michigan' ? 'selected' : '' }}>Michigan</option>
<option value="Minnesota" {{ old('province')=='Minnesota' ? 'selected' : '' }}>Minnesota</option>
<option value="Mississippi" {{ old('province')=='Mississippi' ? 'selected' : '' }}>Mississippi</option>
<option value="Missouri" {{ old('province')=='Missouri' ? 'selected' : '' }}>Missouri</option>
<option value="Montana" {{ old('province')=='Montana' ? 'selected' : '' }}>Montana</option>
<option value="Nebraska" {{ old('province')=='Nebraska' ? 'selected' : '' }}>Nebraska</option>
<option value="Nevada" {{ old('province')=='Nevada' ? 'selected' : '' }}>Nevada</option>
<option value="New Hampshire" {{ old('province')=='New Hampshire' ? 'selected' : '' }}>New Hampshire</option>
<option value="New Jersey" {{ old('province')=='New Jersey' ? 'selected' : '' }}>New Jersey</option>
<option value="New Mexico" {{ old('province')=='New Mexico' ? 'selected' : '' }}>New Mexico</option>
<option value="New York" {{ old('province')=='New York' ? 'selected' : '' }}>New York</option>
<option value="North Carolina" {{ old('province')=='North Carolina' ? 'selected' : '' }}>North Carolina</option>
<option value="North Dakota" {{ old('province')=='North Dakota' ? 'selected' : '' }}>North Dakota</option>
<option value="Ohio" {{ old('province')=='Ohio' ? 'selected' : '' }}>Ohio</option>
<option value="Oklahoma" {{ old('province')=='Oklahoma' ? 'selected' : '' }}>Oklahoma</option>
<option value="Oregon" {{ old('province')=='Oregon' ? 'selected' : '' }}>Oregon</option>
<option value="Pennsylvania" {{ old('province')=='Pennsylvania' ? 'selected' : '' }}>Pennsylvania</option>
<option value="Rhode Island" {{ old('province')=='Rhode Island' ? 'selected' : '' }}>Rhode Island</option>
<option value="South Carolina" {{ old('province')=='South Carolina' ? 'selected' : '' }}>South Carolina</option>
<option value="South Dakota" {{ old('province')=='South Dakota' ? 'selected' : '' }}>South Dakota</option>
<option value="Tennessee" {{ old('province')=='Tennessee' ? 'selected' : '' }}>Tennessee</option>
<option value="Texas" {{ old('province')=='Texas' ? 'selected' : '' }}>Texas</option>
<option value="Utah" {{ old('province')=='Utah' ? 'selected' : '' }}>Utah</option>
<option value="Vermont" {{ old('province')=='Vermont' ? 'selected' : '' }}>Vermont</option>
<option value="Virginia" {{ old('province')=='Virginia' ? 'selected' : '' }}>Virginia</option>
<option value="Washington" {{ old('province')=='Washington' ? 'selected' : '' }}>Washington</option>
<option value="West Virginia" {{ old('province')=='West Virginia' ? 'selected' : '' }}>West Virginia</option>
<option value="Wisconsin" {{ old('province')=='Wisconsin' ? 'selected' : '' }}>Wisconsin</option>
<option value="Wyoming" {{ old('province')=='Wyoming' ? 'selected' : '' }}>Wyoming</option>

<!-- United Kingdom (constituent countries / nations & principal regions) -->
<option value="England" {{ old('province')=='England' ? 'selected' : '' }}>England</option>
<option value="Scotland" {{ old('province')=='Scotland' ? 'selected' : '' }}>Scotland</option>
<option value="Wales" {{ old('province')=='Wales' ? 'selected' : '' }}>Wales</option>
<option value="Northern Ireland" {{ old('province')=='Northern Ireland' ? 'selected' : '' }}>Northern Ireland</option>

<!-- Australia (states & mainland territories) -->
<option value="New South Wales" {{ old('province')=='New South Wales' ? 'selected' : '' }}>New South Wales</option>
<option value="Victoria" {{ old('province')=='Victoria' ? 'selected' : '' }}>Victoria</option>
<option value="Queensland" {{ old('province')=='Queensland' ? 'selected' : '' }}>Queensland</option>
<option value="Western Australia" {{ old('province')=='Western Australia' ? 'selected' : '' }}>Western Australia</option>
<option value="South Australia" {{ old('province')=='South Australia' ? 'selected' : '' }}>South Australia</option>
<option value="Tasmania" {{ old('province')=='Tasmania' ? 'selected' : '' }}>Tasmania</option>
<option value="Australian Capital Territory" {{ old('province')=='Australian Capital Territory' ? 'selected' : '' }}>Australian Capital Territory</option>
<option value="Northern Territory" {{ old('province')=='Northern Territory' ? 'selected' : '' }}>Northern Territory</option>

<!-- India (states & union territories; many entries) -->
<option value="Andhra Pradesh" {{ old('province')=='Andhra Pradesh' ? 'selected' : '' }}>Andhra Pradesh</option>
<option value="Arunachal Pradesh" {{ old('province')=='Arunachal Pradesh' ? 'selected' : '' }}>Arunachal Pradesh</option>
<option value="Assam" {{ old('province')=='Assam' ? 'selected' : '' }}>Assam</option>
<option value="Bihar" {{ old('province')=='Bihar' ? 'selected' : '' }}>Bihar</option>
<option value="Chhattisgarh" {{ old('province')=='Chhattisgarh' ? 'selected' : '' }}>Chhattisgarh</option>
<option value="Goa" {{ old('province')=='Goa' ? 'selected' : '' }}>Goa</option>
<option value="Gujarat" {{ old('province')=='Gujarat' ? 'selected' : '' }}>Gujarat</option>
<option value="Haryana" {{ old('province')=='Haryana' ? 'selected' : '' }}>Haryana</option>
<option value="Himachal Pradesh" {{ old('province')=='Himachal Pradesh' ? 'selected' : '' }}>Himachal Pradesh</option>
<option value="Jharkhand" {{ old('province')=='Jharkhand' ? 'selected' : '' }}>Jharkhand</option>
<option value="Karnataka" {{ old('province')=='Karnataka' ? 'selected' : '' }}>Karnataka</option>
<option value="Kerala" {{ old('province')=='Kerala' ? 'selected' : '' }}>Kerala</option>
<option value="Madhya Pradesh" {{ old('province')=='Madhya Pradesh' ? 'selected' : '' }}>Madhya Pradesh</option>
<option value="Maharashtra" {{ old('province')=='Maharashtra' ? 'selected' : '' }}>Maharashtra</option>
<option value="Manipur" {{ old('province')=='Manipur' ? 'selected' : '' }}>Manipur</option>
<option value="Meghalaya" {{ old('province')=='Meghalaya' ? 'selected' : '' }}>Meghalaya</option>
<option value="Mizoram" {{ old('province')=='Mizoram' ? 'selected' : '' }}>Mizoram</option>
<option value="Nagaland" {{ old('province')=='Nagaland' ? 'selected' : '' }}>Nagaland</option>
<option value="Odisha" {{ old('province')=='Odisha' ? 'selected' : '' }}>Odisha</option>
<option value="Punjab" {{ old('province')=='Punjab' ? 'selected' : '' }}>Punjab</option>
<option value="Rajasthan" {{ old('province')=='Rajasthan' ? 'selected' : '' }}>Rajasthan</option>
<option value="Sikkim" {{ old('province')=='Sikkim' ? 'selected' : '' }}>Sikkim</option>
<option value="Tamil Nadu" {{ old('province')=='Tamil Nadu' ? 'selected' : '' }}>Tamil Nadu</option>
<option value="Telangana" {{ old('province')=='Telangana' ? 'selected' : '' }}>Telangana</option>
<option value="Tripura" {{ old('province')=='Tripura' ? 'selected' : '' }}>Tripura</option>
<option value="Uttar Pradesh" {{ old('province')=='Uttar Pradesh' ? 'selected' : '' }}>Uttar Pradesh</option>
<option value="Uttarakhand" {{ old('province')=='Uttarakhand' ? 'selected' : '' }}>Uttarakhand</option>
<option value="West Bengal" {{ old('province')=='West Bengal' ? 'selected' : '' }}>West Bengal</option>
<!-- India - union territories -->
<option value="Andaman and Nicobar Islands" {{ old('province')=='Andaman and Nicobar Islands' ? 'selected' : '' }}>Andaman and Nicobar Islands</option>
<option value="Chandigarh" {{ old('province')=='Chandigarh' ? 'selected' : '' }}>Chandigarh</option>
<option value="Dadra and Nagar Haveli and Daman and Diu" {{ old('province')=='Dadra and Nagar Haveli and Daman and Diu' ? 'selected' : '' }}>Dadra and Nagar Haveli and Daman and Diu</option>
<option value="Delhi" {{ old('province')=='Delhi' ? 'selected' : '' }}>Delhi</option>
<option value="Jammu and Kashmir" {{ old('province')=='Jammu and Kashmir' ? 'selected' : '' }}>Jammu and Kashmir</option>
<option value="Ladakh" {{ old('province')=='Ladakh' ? 'selected' : '' }}>Ladakh</option>
<option value="Lakshadweep" {{ old('province')=='Lakshadweep' ? 'selected' : '' }}>Lakshadweep</option>
<option value="Puducherry" {{ old('province')=='Puducherry' ? 'selected' : '' }}>Puducherry</option>

<!-- Pakistan -->
<option value="Punjab (Pakistan)" {{ old('province')=="Punjab (Pakistan)" ? 'selected' : '' }}>Punjab</option>
<option value="Sindh" {{ old('province')=='Sindh' ? 'selected' : '' }}>Sindh</option>
<option value="Khyber Pakhtunkhwa" {{ old('province')=='Khyber Pakhtunkhwa' ? 'selected' : '' }}>Khyber Pakhtunkhwa</option>
<option value="Balochistan" {{ old('province')=='Balochistan' ? 'selected' : '' }}>Balochistan</option>
<option value="Gilgit-Baltistan" {{ old('province')=='Gilgit-Baltistan' ? 'selected' : '' }}>Gilgit-Baltistan</option>
<option value="Azad Jammu & Kashmir" {{ old('province')=='Azad Jammu & Kashmir' ? 'selected' : '' }}>Azad Jammu & Kashmir</option>
<option value="Islamabad Capital Territory" {{ old('province')=='Islamabad Capital Territory' ? 'selected' : '' }}>Islamabad Capital Territory</option>

<!-- China (province-level divisions: provinces, autonomous regions, municipalities, SARs) -->
<option value="Anhui" {{ old('province')=='Anhui' ? 'selected' : '' }}>Anhui</option>
<option value="Fujian" {{ old('province')=='Fujian' ? 'selected' : '' }}>Fujian</option>
<option value="Gansu" {{ old('province')=='Gansu' ? 'selected' : '' }}>Gansu</option>
<option value="Guangdong" {{ old('province')=='Guangdong' ? 'selected' : '' }}>Guangdong</option>
<option value="Guangxi" {{ old('province')=='Guangxi' ? 'selected' : '' }}>Guangxi Zhuang Autonomous Region</option>
<option value="Guizhou" {{ old('province')=='Guizhou' ? 'selected' : '' }}>Guizhou</option>
<option value="Hainan" {{ old('province')=='Hainan' ? 'selected' : '' }}>Hainan</option>
<option value="Hebei" {{ old('province')=='Hebei' ? 'selected' : '' }}>Hebei</option>
<option value="Heilongjiang" {{ old('province')=='Heilongjiang' ? 'selected' : '' }}>Heilongjiang</option>
<option value="Henan" {{ old('province')=='Henan' ? 'selected' : '' }}>Henan</option>
<option value="Hubei" {{ old('province')=='Hubei' ? 'selected' : '' }}>Hubei</option>
<option value="Hunan" {{ old('province')=='Hunan' ? 'selected' : '' }}>Hunan</option>
<option value="Jiangsu" {{ old('province')=='Jiangsu' ? 'selected' : '' }}>Jiangsu</option>
<option value="Jiangxi" {{ old('province')=='Jiangxi' ? 'selected' : '' }}>Jiangxi</option>
<option value="Jilin" {{ old('province')=='Jilin' ? 'selected' : '' }}>Jilin</option>
<option value="Liaoning" {{ old('province')=='Liaoning' ? 'selected' : '' }}>Liaoning</option>
<option value="Inner Mongolia" {{ old('province')=='Inner Mongolia' ? 'selected' : '' }}>Inner Mongolia Autonomous Region</option>
<option value="Ningxia" {{ old('province')=='Ningxia' ? 'selected' : '' }}>Ningxia Hui Autonomous Region</option>
<option value="Shaanxi" {{ old('province')=='Shaanxi' ? 'selected' : '' }}>Shaanxi</option>
<option value="Shandong" {{ old('province')=='Shandong' ? 'selected' : '' }}>Shandong</option>
<option value="Shanghai" {{ old('province')=='Shanghai' ? 'selected' : '' }}>Shanghai (Municipality)</option>
<option value="Shanxi" {{ old('province')=='Shanxi' ? 'selected' : '' }}>Shanxi</option>
<option value="Sichuan" {{ old('province')=='Sichuan' ? 'selected' : '' }}>Sichuan</option>
<option value="Tianjin" {{ old('province')=='Tianjin' ? 'selected' : '' }}>Tianjin (Municipality)</option>
<option value="Tibet" {{ old('province')=='Tibet' ? 'selected' : '' }}>Tibet Autonomous Region</option>
<option value="Xinjiang" {{ old('province')=='Xinjiang' ? 'selected' : '' }}>Xinjiang Uyghur Autonomous Region</option>
<option value="Yunnan" {{ old('province')=='Yunnan' ? 'selected' : '' }}>Yunnan</option>
<option value="Chongqing" {{ old('province')=='Chongqing' ? 'selected' : '' }}>Chongqing (Municipality)</option>
<option value="Beijing" {{ old('province')=='Beijing' ? 'selected' : '' }}>Beijing (Municipality)</option>
<option value="Hong Kong" {{ old('province')=='Hong Kong' ? 'selected' : '' }}>Hong Kong SAR</option>
<option value="Macau" {{ old('province')=='Macau' ? 'selected' : '' }}>Macau SAR</option>

<!-- Japan (prefectures) -->
<option value="Aichi" {{ old('province')=='Aichi' ? 'selected' : '' }}>Aichi</option>
<option value="Akita" {{ old('province')=='Akita' ? 'selected' : '' }}>Akita</option>
<option value="Aomori" {{ old('province')=='Aomori' ? 'selected' : '' }}>Aomori</option>
<option value="Chiba" {{ old('province')=='Chiba' ? 'selected' : '' }}>Chiba</option>
<option value="Ehime" {{ old('province')=='Ehime' ? 'selected' : '' }}>Ehime</option>
<option value="Fukui" {{ old('province')=='Fukui' ? 'selected' : '' }}>Fukui</option>
<option value="Fukuoka" {{ old('province')=='Fukuoka' ? 'selected' : '' }}>Fukuoka</option>
<option value="Fukushima" {{ old('province')=='Fukushima' ? 'selected' : '' }}>Fukushima</option>
<option value="Gifu" {{ old('province')=='Gifu' ? 'selected' : '' }}>Gifu</option>
<option value="Gunma" {{ old('province')=='Gunma' ? 'selected' : '' }}>Gunma</option>
<option value="Hiroshima" {{ old('province')=='Hiroshima' ? 'selected' : '' }}>Hiroshima</option>
<option value="Hokkaido" {{ old('province')=='Hokkaido' ? 'selected' : '' }}>Hokkaido</option>
<option value="Hyogo" {{ old('province')=='Hyogo' ? 'selected' : '' }}>Hyogo</option>
<option value="Ibaraki" {{ old('province')=='Ibaraki' ? 'selected' : '' }}>Ibaraki</option>
<option value="Ishikawa" {{ old('province')=='Ishikawa' ? 'selected' : '' }}>Ishikawa</option>
<option value="Iwate" {{ old('province')=='Iwate' ? 'selected' : '' }}>Iwate</option>
<option value="Kagawa" {{ old('province')=='Kagawa' ? 'selected' : '' }}>Kagawa</option>
<option value="Kagoshima" {{ old('province')=='Kagoshima' ? 'selected' : '' }}>Kagoshima</option>
<option value="Kanagawa" {{ old('province')=='Kanagawa' ? 'selected' : '' }}>Kanagawa</option>
<option value="Kochi" {{ old('province')=='Kochi' ? 'selected' : '' }}>Kochi</option>
<option value="Kumamoto" {{ old('province')=='Kumamoto' ? 'selected' : '' }}>Kumamoto</option>
<option value="Kyoto" {{ old('province')=='Kyoto' ? 'selected' : '' }}>Kyoto</option>
<option value="Mie" {{ old('province')=='Mie' ? 'selected' : '' }}>Mie</option>
<option value="Miyagi" {{ old('province')=='Miyagi' ? 'selected' : '' }}>Miyagi</option>
<option value="Miyazaki" {{ old('province')=='Miyazaki' ? 'selected' : '' }}>Miyazaki</option>
<option value="Nagano" {{ old('province')=='Nagano' ? 'selected' : '' }}>Nagano</option>
<option value="Nagasaki" {{ old('province')=='Nagasaki' ? 'selected' : '' }}>Nagasaki</option>
<option value="Nara" {{ old('province')=='Nara' ? 'selected' : '' }}>Nara</option>
<option value="Niigata" {{ old('province')=='Niigata' ? 'selected' : '' }}>Niigata</option>
<option value="Oita" {{ old('province')=='Oita' ? 'selected' : '' }}>Oita</option>
<option value="Okayama" {{ old('province')=='Okayama' ? 'selected' : '' }}>Okayama</option>
<option value="Okinawa" {{ old('province')=='Okinawa' ? 'selected' : '' }}>Okinawa</option>
<option value="Osaka" {{ old('province')=='Osaka' ? 'selected' : '' }}>Osaka</option>
<option value="Saga" {{ old('province')=='Saga' ? 'selected' : '' }}>Saga</option>
<option value="Saitama" {{ old('province')=='Saitama' ? 'selected' : '' }}>Saitama</option>
<option value="Shiga" {{ old('province')=='Shiga' ? 'selected' : '' }}>Shiga</option>
<option value="Shimane" {{ old('province')=='Shimane' ? 'selected' : '' }}>Shimane</option>
<option value="Shizuoka" {{ old('province')=='Shizuoka' ? 'selected' : '' }}>Shizuoka</option>
<option value="Tochigi" {{ old('province')=='Tochigi' ? 'selected' : '' }}>Tochigi</option>
<option value="Tokushima" {{ old('province')=='Tokushima' ? 'selected' : '' }}>Tokushima</option>
<option value="Tokyo" {{ old('province')=='Tokyo' ? 'selected' : '' }}>Tokyo</option>
<option value="Tottori" {{ old('province')=='Tottori' ? 'selected' : '' }}>Tottori</option>
<option value="Toyama" {{ old('province')=='Toyama' ? 'selected' : '' }}>Toyama</option>
<option value="Wakayama" {{ old('province')=='Wakayama' ? 'selected' : '' }}>Wakayama</option>
<option value="Yamagata" {{ old('province')=='Yamagata' ? 'selected' : '' }}>Yamagata</option>
<option value="Yamaguchi" {{ old('province')=='Yamaguchi' ? 'selected' : '' }}>Yamaguchi</option>
<option value="Yamanashi" {{ old('province')=='Yamanashi' ? 'selected' : '' }}>Yamanashi</option>

<!-- Germany (Bundesländer / states) -->
<option value="Baden-Württemberg" {{ old('province')=='Baden-Württemberg' ? 'selected' : '' }}>Baden-Württemberg</option>
<option value="Bavaria" {{ old('province')=='Bavaria' ? 'selected' : '' }}>Bavaria</option>
<option value="Berlin" {{ old('province')=='Berlin' ? 'selected' : '' }}>Berlin</option>
<option value="Brandenburg" {{ old('province')=='Brandenburg' ? 'selected' : '' }}>Brandenburg</option>
<option value="Bremen" {{ old('province')=='Bremen' ? 'selected' : '' }}>Bremen</option>
<option value="Hamburg" {{ old('province')=='Hamburg' ? 'selected' : '' }}>Hamburg</option>
<option value="Hesse" {{ old('province')=='Hesse' ? 'selected' : '' }}>Hesse</option>
<option value="Lower Saxony" {{ old('province')=='Lower Saxony' ? 'selected' : '' }}>Lower Saxony</option>
<option value="Mecklenburg-Vorpommern" {{ old('province')=='Mecklenburg-Vorpommern' ? 'selected' : '' }}>Mecklenburg-Vorpommern</option>
<option value="North Rhine-Westphalia" {{ old('province')=='North Rhine-Westphalia' ? 'selected' : '' }}>North Rhine-Westphalia</option>
<option value="Rhineland-Palatinate" {{ old('province')=='Rhineland-Palatinate' ? 'selected' : '' }}>Rhineland-Palatinate</option>
<option value="Saarland" {{ old('province')=='Saarland' ? 'selected' : '' }}>Saarland</option>
<option value="Saxony" {{ old('province')=='Saxony' ? 'selected' : '' }}>Saxony</option>
<option value="Saxony-Anhalt" {{ old('province')=='Saxony-Anhalt' ? 'selected' : '' }}>Saxony-Anhalt</option>
<option value="Schleswig-Holstein" {{ old('province')=='Schleswig-Holstein' ? 'selected' : '' }}>Schleswig-Holstein</option>
<option value="Thuringia" {{ old('province')=='Thuringia' ? 'selected' : '' }}>Thuringia</option>

<!-- France (metropolitan regions) -->
<option value="Auvergne-Rhône-Alpes" {{ old('province')=='Auvergne-Rhône-Alpes' ? 'selected' : '' }}>Auvergne-Rhône-Alpes</option>
<option value="Bourgogne-Franche-Comté" {{ old('province')=='Bourgogne-Franche-Comté' ? 'selected' : '' }}>Bourgogne-Franche-Comté</option>
<option value="Brittany" {{ old('province')=='Brittany' ? 'selected' : '' }}>Brittany</option>
<option value="Centre-Val de Loire" {{ old('province')=='Centre-Val de Loire' ? 'selected' : '' }}>Centre-Val de Loire</option>
<option value="Corsica" {{ old('province')=='Corsica' ? 'selected' : '' }}>Corsica</option>
<option value="Grand Est" {{ old('province')=='Grand Est' ? 'selected' : '' }}>Grand Est</option>
<option value="Hauts-de-France" {{ old('province')=='Hauts-de-France' ? 'selected' : '' }}>Hauts-de-France</option>
<option value="Île-de-France" {{ old('province')=='Île-de-France' ? 'selected' : '' }}>Île-de-France</option>
<option value="Normandy" {{ old('province')=='Normandy' ? 'selected' : '' }}>Normandy</option>
<option value="Nouvelle-Aquitaine" {{ old('province')=='Nouvelle-Aquitaine' ? 'selected' : '' }}>Nouvelle-Aquitaine</option>
<option value="Occitanie" {{ old('province')=='Occitanie' ? 'selected' : '' }}>Occitanie</option>
<option value="Pays de la Loire" {{ old('province')=='Pays de la Loire' ? 'selected' : '' }}>Pays de la Loire</option>
<option value="Provence-Alpes-Côte d'Azur" {{ old('province')=="Provence-Alpes-Côte d'Azur" ? 'selected' : '' }}>Provence-Alpes-Côte d'Azur</option>

<!-- Brazil (states + federal district) -->
<option value="Acre" {{ old('province')=='Acre' ? 'selected' : '' }}>Acre</option>
<option value="Alagoas" {{ old('province')=='Alagoas' ? 'selected' : '' }}>Alagoas</option>
<option value="Amapá" {{ old('province')=='Amapá' ? 'selected' : '' }}>Amapá</option>
<option value="Amazonas" {{ old('province')=='Amazonas' ? 'selected' : '' }}>Amazonas</option>
<option value="Bahia" {{ old('province')=='Bahia' ? 'selected' : '' }}>Bahia</option>
<option value="Ceará" {{ old('province')=='Ceará' ? 'selected' : '' }}>Ceará</option>
<option value="Distrito Federal" {{ old('province')=='Distrito Federal' ? 'selected' : '' }}>Distrito Federal</option>
<option value="Espírito Santo" {{ old('province')=='Espírito Santo' ? 'selected' : '' }}>Espírito Santo</option>
<option value="Goiás" {{ old('province')=='Goiás' ? 'selected' : '' }}>Goiás</option>
<option value="Maranhão" {{ old('province')=='Maranhão' ? 'selected' : '' }}>Maranhão</option>
<option value="Mato Grosso" {{ old('province')=='Mato Grosso' ? 'selected' : '' }}>Mato Grosso</option>
<option value="Mato Grosso do Sul" {{ old('province')=='Mato Grosso do Sul' ? 'selected' : '' }}>Mato Grosso do Sul</option>
<option value="Minas Gerais" {{ old('province')=='Minas Gerais' ? 'selected' : '' }}>Minas Gerais</option>
<option value="Pará" {{ old('province')=='Pará' ? 'selected' : '' }}>Pará</option>
<option value="Paraíba" {{ old('province')=='Paraíba' ? 'selected' : '' }}>Paraíba</option>
<option value="Paraná" {{ old('province')=='Paraná' ? 'selected' : '' }}>Paraná</option>
<option value="Pernambuco" {{ old('province')=='Pernambuco' ? 'selected' : '' }}>Pernambuco</option>
<option value="Piauí" {{ old('province')=='Piauí' ? 'selected' : '' }}>Piauí</option>
<option value="Rio de Janeiro" {{ old('province')=='Rio de Janeiro' ? 'selected' : '' }}>Rio de Janeiro</option>
<option value="Rio Grande do Norte" {{ old('province')=='Rio Grande do Norte' ? 'selected' : '' }}>Rio Grande do Norte</option>
<option value="Rio Grande do Sul" {{ old('province')=='Rio Grande do Sul' ? 'selected' : '' }}>Rio Grande do Sul</option>
<option value="Rondônia" {{ old('province')=='Rondônia' ? 'selected' : '' }}>Rondônia</option>
<option value="Roraima" {{ old('province')=='Roraima' ? 'selected' : '' }}>Roraima</option>
<option value="Santa Catarina" {{ old('province')=='Santa Catarina' ? 'selected' : '' }}>Santa Catarina</option>
<option value="São Paulo" {{ old('province')=='São Paulo' ? 'selected' : '' }}>São Paulo</option>
<option value="Sergipe" {{ old('province')=='Sergipe' ? 'selected' : '' }}>Sergipe</option>
<option value="Tocantins" {{ old('province')=='Tocantins' ? 'selected' : '' }}>Tocantins</option>

<!-- Mexico (states + CDMX) -->
<option value="Aguascalientes" {{ old('province')=='Aguascalientes' ? 'selected' : '' }}>Aguascalientes</option>
<option value="Baja California" {{ old('province')=='Baja California' ? 'selected' : '' }}>Baja California</option>
<option value="Baja California Sur" {{ old('province')=='Baja California Sur' ? 'selected' : '' }}>Baja California Sur</option>
<option value="Campeche" {{ old('province')=='Campeche' ? 'selected' : '' }}>Campeche</option>
<option value="Chiapas" {{ old('province')=='Chiapas' ? 'selected' : '' }}>Chiapas</option>
<option value="Chihuahua" {{ old('province')=='Chihuahua' ? 'selected' : '' }}>Chihuahua</option>
<option value="Coahuila" {{ old('province')=='Coahuila' ? 'selected' : '' }}>Coahuila</option>
<option value="Colima" {{ old('province')=='Colima' ? 'selected' : '' }}>Colima</option>
<option value="Durango" {{ old('province')=='Durango' ? 'selected' : '' }}>Durango</option>
<option value="Guanajuato" {{ old('province')=='Guanajuato' ? 'selected' : '' }}>Guanajuato</option>
<option value="Guerrero" {{ old('province')=='Guerrero' ? 'selected' : '' }}>Guerrero</option>
<option value="Hidalgo" {{ old('province')=='Hidalgo' ? 'selected' : '' }}>Hidalgo</option>
<option value="Jalisco" {{ old('province')=='Jalisco' ? 'selected' : '' }}>Jalisco</option>
<option value="México (State of)" {{ old('province')=="México (State of)" ? 'selected' : '' }}>México (State of)</option>
<option value="Michoacán" {{ old('province')=='Michoacán' ? 'selected' : '' }}>Michoacán</option>
<option value="Morelos" {{ old('province')=='Morelos' ? 'selected' : '' }}>Morelos</option>
<option value="Nayarit" {{ old('province')=='Nayarit' ? 'selected' : '' }}>Nayarit</option>
<option value="Nuevo León" {{ old('province')=='Nuevo León' ? 'selected' : '' }}>Nuevo León</option>
<option value="Oaxaca" {{ old('province')=='Oaxaca' ? 'selected' : '' }}>Oaxaca</option>
<option value="Puebla" {{ old('province')=='Puebla' ? 'selected' : '' }}>Puebla</option>
<option value="Querétaro" {{ old('province')=='Querétaro' ? 'selected' : '' }}>Querétaro</option>
<option value="Quintana Roo" {{ old('province')=='Quintana Roo' ? 'selected' : '' }}>Quintana Roo</option>
<option value="San Luis Potosí" {{ old('province')=='San Luis Potosí' ? 'selected' : '' }}>San Luis Potosí</option>
<option value="Sinaloa" {{ old('province')=='Sinaloa' ? 'selected' : '' }}>Sinaloa</option>
<option value="Sonora" {{ old('province')=='Sonora' ? 'selected' : '' }}>Sonora</option>
<option value="Tabasco" {{ old('province')=='Tabasco' ? 'selected' : '' }}>Tabasco</option>
<option value="Tamaulipas" {{ old('province')=='Tamaulipas' ? 'selected' : '' }}>Tamaulipas</option>
<option value="Tlaxcala" {{ old('province')=='Tlaxcala' ? 'selected' : '' }}>Tlaxcala</option>
<option value="Veracruz" {{ old('province')=='Veracruz' ? 'selected' : '' }}>Veracruz</option>
<option value="Yucatán" {{ old('province')=='Yucatán' ? 'selected' : '' }}>Yucatán</option>
<option value="Zacatecas" {{ old('province')=='Zacatecas' ? 'selected' : '' }}>Zacatecas</option>
<option value="Ciudad de México (CDMX)" {{ old('province')=="Ciudad de México (CDMX)" ? 'selected' : '' }}>Ciudad de México (CDMX)</option>

<!-- South Africa (provinces) -->
<option value="Eastern Cape" {{ old('province')=='Eastern Cape' ? 'selected' : '' }}>Eastern Cape</option>
<option value="Free State" {{ old('province')=='Free State' ? 'selected' : '' }}>Free State</option>
<option value="Gauteng" {{ old('province')=='Gauteng' ? 'selected' : '' }}>Gauteng</option>
<option value="KwaZulu-Natal" {{ old('province')=='KwaZulu-Natal' ? 'selected' : '' }}>KwaZulu-Natal</option>
<option value="Limpopo" {{ old('province')=='Limpopo' ? 'selected' : '' }}>Limpopo</option>
<option value="Mpumalanga" {{ old('province')=='Mpumalanga' ? 'selected' : '' }}>Mpumalanga</option>
<option value="Northern Cape" {{ old('province')=='Northern Cape' ? 'selected' : '' }}>Northern Cape</option>
<option value="North West" {{ old('province')=='North West' ? 'selected' : '' }}>North West</option>
<option value="Western Cape" {{ old('province')=='Western Cape' ? 'selected' : '' }}>Western Cape</option>

<!-- Nigeria (states + FCT) -->
<option value="Abia" {{ old('province')=='Abia' ? 'selected' : '' }}>Abia</option>
<option value="Abuja Federal Capital Territory" {{ old('province')=='Abuja Federal Capital Territory' ? 'selected' : '' }}>Abuja Federal Capital Territory</option>
<option value="Adamawa" {{ old('province')=='Adamawa' ? 'selected' : '' }}>Adamawa</option>
<option value="Akwa Ibom" {{ old('province')=='Akwa Ibom' ? 'selected' : '' }}>Akwa Ibom</option>
<option value="Anambra" {{ old('province')=='Anambra' ? 'selected' : '' }}>Anambra</option>
<option value="Bauchi" {{ old('province')=='Bauchi' ? 'selected' : '' }}>Bauchi</option>
<option value="Bayelsa" {{ old('province')=='Bayelsa' ? 'selected' : '' }}>Bayelsa</option>
<option value="Benue" {{ old('province')=='Benue' ? 'selected' : '' }}>Benue</option>
<option value="Borno" {{ old('province')=='Borno' ? 'selected' : '' }}>Borno</option>
<option value="Cross River" {{ old('province')=='Cross River' ? 'selected' : '' }}>Cross River</option>
<option value="Delta" {{ old('province')=='Delta' ? 'selected' : '' }}>Delta</option>
<option value="Ebonyi" {{ old('province')=='Ebonyi' ? 'selected' : '' }}>Ebonyi</option>
<option value="Edo" {{ old('province')=='Edo' ? 'selected' : '' }}>Edo</option>
<option value="Ekiti" {{ old('province')=='Ekiti' ? 'selected' : '' }}>Ekiti</option>
<option value="Enugu" {{ old('province')=='Enugu' ? 'selected' : '' }}>Enugu</option>
<option value="Gombe" {{ old('province')=='Gombe' ? 'selected' : '' }}>Gombe</option>
<option value="Imo" {{ old('province')=='Imo' ? 'selected' : '' }}>Imo</option>
<option value="Jigawa" {{ old('province')=='Jigawa' ? 'selected' : '' }}>Jigawa</option>
<option value="Kaduna" {{ old('province')=='Kaduna' ? 'selected' : '' }}>Kaduna</option>
<option value="Kano" {{ old('province')=='Kano' ? 'selected' : '' }}>Kano</option>
<option value="Katsina" {{ old('province')=='Katsina' ? 'selected' : '' }}>Katsina</option>
<option value="Kebbi" {{ old('province')=='Kebbi' ? 'selected' : '' }}>Kebbi</option>
<option value="Kogi" {{ old('province')=='Kogi' ? 'selected' : '' }}>Kogi</option>
<option value="Kwara" {{ old('province')=='Kwara' ? 'selected' : '' }}>Kwara</option>
<option value="Lagos" {{ old('province')=='Lagos' ? 'selected' : '' }}>Lagos</option>
<option value="Nasarawa" {{ old('province')=='Nasarawa' ? 'selected' : '' }}>Nasarawa</option>
<option value="Niger" {{ old('province')=='Niger' ? 'selected' : '' }}>Niger</option>
<option value="Ogun" {{ old('province')=='Ogun' ? 'selected' : '' }}>Ogun</option>
<option value="Ondo" {{ old('province')=='Ondo' ? 'selected' : '' }}>Ondo</option>
<option value="Osun" {{ old('province')=='Osun' ? 'selected' : '' }}>Osun</option>
<option value="Oyo" {{ old('province')=='Oyo' ? 'selected' : '' }}>Oyo</option>
<option value="Plateau" {{ old('province')=='Plateau' ? 'selected' : '' }}>Plateau</option>
<option value="Rivers" {{ old('province')=='Rivers' ? 'selected' : '' }}>Rivers</option>
<option value="Sokoto" {{ old('province')=='Sokoto' ? 'selected' : '' }}>Sokoto</option>
<option value="Taraba" {{ old('province')=='Taraba' ? 'selected' : '' }}>Taraba</option>
<option value="Yobe" {{ old('province')=='Yobe' ? 'selected' : '' }}>Yobe</option>
<option value="Zamfara" {{ old('province')=='Zamfara' ? 'selected' : '' }}>Zamfara</option>

<!-- Indonesia (provinces) -->
<option value="Aceh" {{ old('province')=='Aceh' ? 'selected' : '' }}>Aceh</option>
<option value="Bali" {{ old('province')=='Bali' ? 'selected' : '' }}>Bali</option>
<option value="Bengkulu" {{ old('province')=='Bengkulu' ? 'selected' : '' }}>Bengkulu</option>
<option value="Central Java" {{ old('province')=='Central Java' ? 'selected' : '' }}>Central Java</option>
<option value="Central Kalimantan" {{ old('province')=='Central Kalimantan' ? 'selected' : '' }}>Central Kalimantan</option>
<option value="Central Sulawesi" {{ old('province')=='Central Sulawesi' ? 'selected' : '' }}>Central Sulawesi</option>
<option value="East Java" {{ old('province')=='East Java' ? 'selected' : '' }}>East Java</option>
<option value="East Kalimantan" {{ old('province')=='East Kalimantan' ? 'selected' : '' }}>East Kalimantan</option>
<option value="East Nusa Tenggara" {{ old('province')=='East Nusa Tenggara' ? 'selected' : '' }}>East Nusa Tenggara</option>
<option value="Gorontalo" {{ old('province')=='Gorontalo' ? 'selected' : '' }}>Gorontalo</option>
<option value="Jakarta" {{ old('province')=='Jakarta' ? 'selected' : '' }}>Jakarta</option>
<option value="Jambi" {{ old('province')=='Jambi' ? 'selected' : '' }}>Jambi</option>
<option value="Lampung" {{ old('province')=='Lampung' ? 'selected' : '' }}>Lampung</option>
<option value="Maluku" {{ old('province')=='Maluku' ? 'selected' : '' }}>Maluku</option>
<option value="North Kalimantan" {{ old('province')=='North Kalimantan' ? 'selected' : '' }}>North Kalimantan</option>
<option value="North Maluku" {{ old('province')=='North Maluku' ? 'selected' : '' }}>North Maluku</option>
<option value="North Sulawesi" {{ old('province')=='North Sulawesi' ? 'selected' : '' }}>North Sulawesi</option>
<option value="North Sumatra" {{ old('province')=='North Sumatra' ? 'selected' : '' }}>North Sumatra</option>
<option value="Papua" {{ old('province')=='Papua' ? 'selected' : '' }}>Papua</option>
<option value="Riau" {{ old('province')=='Riau' ? 'selected' : '' }}>Riau</option>
<option value="Riau Islands" {{ old('province')=='Riau Islands' ? 'selected' : '' }}>Riau Islands</option>
<option value="South Kalimantan" {{ old('province')=='South Kalimantan' ? 'selected' : '' }}>South Kalimantan</option>
<option value="South Sulawesi" {{ old('province')=='South Sulawesi' ? 'selected' : '' }}>South Sulawesi</option>
<option value="South Sumatra" {{ old('province')=='South Sumatra' ? 'selected' : '' }}>South Sumatra</option>
<option value="Southeast Sulawesi" {{ old('province')=='Southeast Sulawesi' ? 'selected' : '' }}>Southeast Sulawesi</option>
<option value="West Java" {{ old('province')=='West Java' ? 'selected' : '' }}>West Java</option>
<option value="West Kalimantan" {{ old('province')=='West Kalimantan' ? 'selected' : '' }}>West Kalimantan</option>
<option value="West Nusa Tenggara" {{ old('province')=='West Nusa Tenggara' ? 'selected' : '' }}>West Nusa Tenggara</option>
<option value="West Papua" {{ old('province')=='West Papua' ? 'selected' : '' }}>West Papua</option>
<option value="West Sulawesi" {{ old('province')=='West Sulawesi' ? 'selected' : '' }}>West Sulawesi</option>
<option value="West Sumatra" {{ old('province')=='West Sumatra' ? 'selected' : '' }}>West Sumatra</option>

<!-- Argentina (provinces + CABA) -->
<option value="Buenos Aires Province" {{ old('province')=='Buenos Aires Province' ? 'selected' : '' }}>Buenos Aires Province</option>
<option value="Ciudad Autónoma de Buenos Aires" {{ old('province')=="Ciudad Autónoma de Buenos Aires" ? 'selected' : '' }}>Ciudad Autónoma de Buenos Aires (CABA)</option>
<option value="Catamarca" {{ old('province')=='Catamarca' ? 'selected' : '' }}>Catamarca</option>
<option value="Chaco" {{ old('province')=='Chaco' ? 'selected' : '' }}>Chaco</option>
<option value="Chubut" {{ old('province')=='Chubut' ? 'selected' : '' }}>Chubut</option>
<option value="Córdoba" {{ old('province')=='Córdoba' ? 'selected' : '' }}>Córdoba</option>
<option value="Corrientes" {{ old('province')=='Corrientes' ? 'selected' : '' }}>Corrientes</option>
<option value="Entre Ríos" {{ old('province')=='Entre Ríos' ? 'selected' : '' }}>Entre Ríos</option>
<option value="Formosa" {{ old('province')=='Formosa' ? 'selected' : '' }}>Formosa</option>
<option value="Jujuy" {{ old('province')=='Jujuy' ? 'selected' : '' }}>Jujuy</option>
<option value="La Pampa" {{ old('province')=='La Pampa' ? 'selected' : '' }}>La Pampa</option>
<option value="La Rioja" {{ old('province')=='La Rioja' ? 'selected' : '' }}>La Rioja</option>
<option value="Mendoza" {{ old('province')=='Mendoza' ? 'selected' : '' }}>Mendoza</option>
<option value="Misiones" {{ old('province')=='Misiones' ? 'selected' : '' }}>Misiones</option>
<option value="Neuquén" {{ old('province')=='Neuquén' ? 'selected' : '' }}>Neuquén</option>
<option value="Río Negro" {{ old('province')=='Río Negro' ? 'selected' : '' }}>Río Negro</option>
<option value="Salta" {{ old('province')=='Salta' ? 'selected' : '' }}>Salta</option>
<option value="San Juan" {{ old('province')=='San Juan' ? 'selected' : '' }}>San Juan</option>
<option value="San Luis" {{ old('province')=='San Luis' ? 'selected' : '' }}>San Luis</option>
<option value="Santa Cruz" {{ old('province')=='Santa Cruz' ? 'selected' : '' }}>Santa Cruz</option>
<option value="Santa Fe" {{ old('province')=='Santa Fe' ? 'selected' : '' }}>Santa Fe</option>
<option value="Santiago del Estero" {{ old('province')=='Santiago del Estero' ? 'selected' : '' }}>Santiago del Estero</option>
<option value="Tierra del Fuego" {{ old('province')=='Tierra del Fuego' ? 'selected' : '' }}>Tierra del Fuego</option>
<option value="Tucumán" {{ old('province')=='Tucumán' ? 'selected' : '' }}>Tucumán</option>

<!-- Spain (autonomous communities) -->
<option value="Andalusia" {{ old('province')=='Andalusia' ? 'selected' : '' }}>Andalusia</option>
<option value="Aragon" {{ old('province')=='Aragon' ? 'selected' : '' }}>Aragon</option>
<option value="Asturias" {{ old('province')=='Asturias' ? 'selected' : '' }}>Asturias</option>
<option value="Balearic Islands" {{ old('province')=='Balearic Islands' ? 'selected' : '' }}>Balearic Islands</option>
<option value="Basque Country" {{ old('province')=='Basque Country' ? 'selected' : '' }}>Basque Country</option>
<option value="Canary Islands" {{ old('province')=='Canary Islands' ? 'selected' : '' }}>Canary Islands</option>
<option value="Cantabria" {{ old('province')=='Cantabria' ? 'selected' : '' }}>Cantabria</option>
<option value="Castile and León" {{ old('province')=='Castile and León' ? 'selected' : '' }}>Castile and León</option>
<option value="Castile-La Mancha" {{ old('province')=='Castile-La Mancha' ? 'selected' : '' }}>Castile-La Mancha</option>
<option value="Catalonia" {{ old('province')=='Catalonia' ? 'selected' : '' }}>Catalonia</option>
<option value="Extremadura" {{ old('province')=='Extremadura' ? 'selected' : '' }}>Extremadura</option>
<option value="Galicia" {{ old('province')=='Galicia' ? 'selected' : '' }}>Galicia</option>
<option value="La Rioja" {{ old('province')=='La Rioja' ? 'selected' : '' }}>La Rioja</option>
<option value="Community of Madrid" {{ old('province')=='Community of Madrid' ? 'selected' : '' }}>Community of Madrid</option>
<option value="Region of Murcia" {{ old('province')=='Region of Murcia' ? 'selected' : '' }}>Region of Murcia</option>
<option value="Navarre" {{ old('province')=='Navarre' ? 'selected' : '' }}>Navarre</option>
<option value="Ceuta" {{ old('province')=='Ceuta' ? 'selected' : '' }}>Ceuta (Autonomous City)</option>
<option value="Melilla" {{ old('province')=='Melilla' ? 'selected' : '' }}>Melilla (Autonomous City)</option>

<!-- Italy (regions) -->
<option value="Abruzzo" {{ old('province')=='Abruzzo' ? 'selected' : '' }}>Abruzzo</option>
<option value="Aosta Valley" {{ old('province')=='Aosta Valley' ? 'selected' : '' }}>Aosta Valley</option>
<option value="Apulia" {{ old('province')=='Apulia' ? 'selected' : '' }}>Apulia</option>
<option value="Basilicata" {{ old('province')=='Basilicata' ? 'selected' : '' }}>Basilicata</option>
<option value="Calabria" {{ old('province')=='Calabria' ? 'selected' : '' }}>Calabria</option>
<option value="Campania" {{ old('province')=='Campania' ? 'selected' : '' }}>Campania</option>
<option value="Emilia-Romagna" {{ old('province')=='Emilia-Romagna' ? 'selected' : '' }}>Emilia-Romagna</option>
<option value="Friuli Venezia Giulia" {{ old('province')=='Friuli Venezia Giulia' ? 'selected' : '' }}>Friuli Venezia Giulia</option>
<option value="Lazio" {{ old('province')=='Lazio' ? 'selected' : '' }}>Lazio</option>
<option value="Liguria" {{ old('province')=='Liguria' ? 'selected' : '' }}>Liguria</option>
<option value="Lombardy" {{ old('province')=='Lombardy' ? 'selected' : '' }}>Lombardy</option>
<option value="Marche" {{ old('province')=='Marche' ? 'selected' : '' }}>Marche</option>
<option value="Molise" {{ old('province')=='Molise' ? 'selected' : '' }}>Molise</option>
<option value="Piedmont" {{ old('province')=='Piedmont' ? 'selected' : '' }}>Piedmont</option>
<option value="Sardinia" {{ old('province')=='Sardinia' ? 'selected' : '' }}>Sardinia</option>
<option value="Sicily" {{ old('province')=='Sicily' ? 'selected' : '' }}>Sicily</option>
<option value="Trentino-Alto Adige" {{ old('province')=='Trentino-Alto Adige' ? 'selected' : '' }}>Trentino-Alto Adige</option>
<option value="Umbria" {{ old('province')=='Umbria' ? 'selected' : '' }}>Umbria</option>
<option value="Veneto" {{ old('province')=='Veneto' ? 'selected' : '' }}>Veneto</option>

<!-- Portugal (districts + autonomous regions) -->
<option value="Aveiro District" {{ old('province')=='Aveiro District' ? 'selected' : '' }}>Aveiro</option>
<option value="Braga District" {{ old('province')=='Braga District' ? 'selected' : '' }}>Braga</option>
<option value="Bragança District" {{ old('province')=='Bragança District' ? 'selected' : '' }}>Bragança</option>
<option value="Castelo Branco District" {{ old('province')=='Castelo Branco District' ? 'selected' : '' }}>Castelo Branco</option>
<option value="Coimbra District" {{ old('province')=='Coimbra District' ? 'selected' : '' }}>Coimbra</option>
<option value="Évora District" {{ old('province')=='Évora District' ? 'selected' : '' }}>Évora</option>
<option value="Faro District" {{ old('province')=='Faro District' ? 'selected' : '' }}>Faro (Algarve)</option>
<option value="Guarda District" {{ old('province')=='Guarda District' ? 'selected' : '' }}>Guarda</option>
<option value="Leiria District" {{ old('province')=='Leiria District' ? 'selected' : '' }}>Leiria</option>
<option value="Lisbon District" {{ old('province')=='Lisbon District' ? 'selected' : '' }}>Lisbon</option>
<option value="Portalegre District" {{ old('province')=='Portalegre District' ? 'selected' : '' }}>Portalegre</option>
<option value="Porto District" {{ old('province')=='Porto District' ? 'selected' : '' }}>Porto</option>
<option value="Santarém District" {{ old('province')=='Santarém District' ? 'selected' : '' }}>Santarém</option>
<option value="Setúbal District" {{ old('province')=='Setúbal District' ? 'selected' : '' }}>Setúbal</option>
<option value="Viana do Castelo District" {{ old('province')=='Viana do Castelo District' ? 'selected' : '' }}>Viana do Castelo</option>
<option value="Vila Real District" {{ old('province')=='Vila Real District' ? 'selected' : '' }}>Vila Real</option>
<option value="Viseu District" {{ old('province')=='Viseu District' ? 'selected' : '' }}>Viseu</option>
<option value="Azores" {{ old('province')=='Azores' ? 'selected' : '' }}>Azores (Autonomous Region)</option>
<option value="Madeira" {{ old('province')=='Madeira' ? 'selected' : '' }}>Madeira (Autonomous Region)</option>

<!-- Netherlands (provinces) -->
<option value="Drenthe" {{ old('province')=='Drenthe' ? 'selected' : '' }}>Drenthe</option>
<option value="Flevoland" {{ old('province')=='Flevoland' ? 'selected' : '' }}>Flevoland</option>
<option value="Friesland" {{ old('province')=='Friesland' ? 'selected' : '' }}>Friesland</option>
<option value="Gelderland" {{ old('province')=='Gelderland' ? 'selected' : '' }}>Gelderland</option>
<option value="Groningen" {{ old('province')=='Groningen' ? 'selected' : '' }}>Groningen</option>
<option value="Limburg (Netherlands)" {{ old('province')=="Limburg (Netherlands)" ? 'selected' : '' }}>Limburg</option>
<option value="North Brabant" {{ old('province')=='North Brabant' ? 'selected' : '' }}>North Brabant</option>
<option value="North Holland" {{ old('province')=='North Holland' ? 'selected' : '' }}>North Holland</option>
<option value="Overijssel" {{ old('province')=='Overijssel' ? 'selected' : '' }}>Overijssel</option>
<option value="South Holland" {{ old('province')=='South Holland' ? 'selected' : '' }}>South Holland</option>
<option value="Utrecht" {{ old('province')=='Utrecht' ? 'selected' : '' }}>Utrecht</option>

<!-- Belgium (regions & provinces) -->
<option value="Brussels-Capital Region" {{ old('province')=='Brussels-Capital Region' ? 'selected' : '' }}>Brussels-Capital Region</option>
<option value="Flemish Region" {{ old('province')=='Flemish Region' ? 'selected' : '' }}>Flemish Region</option>
<option value="Walloon Region" {{ old('province')=='Walloon Region' ? 'selected' : '' }}>Walloon Region</option>
<!-- (You can add the 10 Belgian provinces on request) -->

<!-- Switzerland (cantons) -->
<option value="Aargau" {{ old('province')=='Aargau' ? 'selected' : '' }}>Aargau</option>
<option value="Appenzell Ausserrhoden" {{ old('province')=='Appenzell Ausserrhoden' ? 'selected' : '' }}>Appenzell Ausserrhoden</option>
<option value="Appenzell Innerrhoden" {{ old('province')=='Appenzell Innerrhoden' ? 'selected' : '' }}>Appenzell Innerrhoden</option>
<option value="Basel-Landschaft" {{ old('province')=='Basel-Landschaft' ? 'selected' : '' }}>Basel-Landschaft</option>
<option value="Basel-Stadt" {{ old('province')=='Basel-Stadt' ? 'selected' : '' }}>Basel-Stadt</option>
<option value="Bern" {{ old('province')=='Bern' ? 'selected' : '' }}>Bern</option>
<option value="Geneva" {{ old('province')=='Geneva' ? 'selected' : '' }}>Geneva</option>
<option value="Glarus" {{ old('province')=='Glarus' ? 'selected' : '' }}>Glarus</option>
<option value="Graubünden" {{ old('province')=='Graubünden' ? 'selected' : '' }}>Graubünden</option>
<option value="Jura" {{ old('province')=='Jura' ? 'selected' : '' }}>Jura</option>
<option value="Lucerne" {{ old('province')=='Lucerne' ? 'selected' : '' }}>Lucerne</option>
<option value="Neuchâtel" {{ old('province')=='Neuchâtel' ? 'selected' : '' }}>Neuchâtel</option>
<option value="Nidwalden" {{ old('province')=='Nidwalden' ? 'selected' : '' }}>Nidwalden</option>
<option value="Obwalden" {{ old('province')=='Obwalden' ? 'selected' : '' }}>Obwalden</option>
<option value="Schaffhausen" {{ old('province')=='Schaffhausen' ? 'selected' : '' }}>Schaffhausen</option>
<option value="Schwyz" {{ old('province')=='Schwyz' ? 'selected' : '' }}>Schwyz</option>
<option value="Solothurn" {{ old('province')=='Solothurn' ? 'selected' : '' }}>Solothurn</option>
<option value="St. Gallen" {{ old('province')=='St. Gallen' ? 'selected' : '' }}>St. Gallen</option>
<option value="Thurgau" {{ old('province')=='Thurgau' ? 'selected' : '' }}>Thurgau</option>
<option value="Ticino" {{ old('province')=='Ticino' ? 'selected' : '' }}>Ticino</option>
<option value="Uri" {{ old('province')=='Uri' ? 'selected' : '' }}>Uri</option>
<option value="Valais" {{ old('province')=='Valais' ? 'selected' : '' }}>Valais</option>
<option value="Vaud" {{ old('province')=='Vaud' ? 'selected' : '' }}>Vaud</option>
<option value="Zug" {{ old('province')=='Zug' ? 'selected' : '' }}>Zug</option>
<option value="Zurich" {{ old('province')=='Zurich' ? 'selected' : '' }}>Zurich</option>

<!-- Austria (states) -->
<option value="Burgenland" {{ old('province')=='Burgenland' ? 'selected' : '' }}>Burgenland</option>
<option value="Carinthia" {{ old('province')=='Carinthia' ? 'selected' : '' }}>Carinthia</option>
<option value="Lower Austria" {{ old('province')=='Lower Austria' ? 'selected' : '' }}>Lower Austria</option>
<option value="Salzburg" {{ old('province')=='Salzburg' ? 'selected' : '' }}>Salzburg</option>
<option value="Styria" {{ old('province')=='Styria' ? 'selected' : '' }}>Styria</option>
<option value="Tyrol" {{ old('province')=='Tyrol' ? 'selected' : '' }}>Tyrol</option>
<option value="Upper Austria" {{ old('province')=='Upper Austria' ? 'selected' : '' }}>Upper Austria</option>
<option value="Vienna" {{ old('province')=='Vienna' ? 'selected' : '' }}>Vienna</option>
<option value="Vorarlberg" {{ old('province')=='Vorarlberg' ? 'selected' : '' }}>Vorarlberg</option>

<!-- Poland (voivodeships) -->
<option value="Greater Poland" {{ old('province')=='Greater Poland' ? 'selected' : '' }}>Greater Poland</option>
<option value="Kuyavian-Pomeranian" {{ old('province')=='Kuyavian-Pomeranian' ? 'selected' : '' }}>Kuyavian-Pomeranian</option>
<option value="Lesser Poland" {{ old('province')=='Lesser Poland' ? 'selected' : '' }}>Lesser Poland</option>
<option value="Łódź" {{ old('province')=="Łódź" ? 'selected' : '' }}>Łódź</option>
<option value="Lower Silesian" {{ old('province')=='Lower Silesian' ? 'selected' : '' }}>Lower Silesian</option>
<option value="Lublin" {{ old('province')=='Lublin' ? 'selected' : '' }}>Lublin</option>
<option value="Lubusz" {{ old('province')=='Lubusz' ? 'selected' : '' }}>Lubusz</option>
<option value="Masovian" {{ old('province')=='Masovian' ? 'selected' : '' }}>Masovian</option>
<option value="Opole" {{ old('province')=='Opole' ? 'selected' : '' }}>Opole</option>
<option value="Podlaskie" {{ old('province')=='Podlaskie' ? 'selected' : '' }}>Podlaskie</option>
<option value="Pomeranian" {{ old('province')=='Pomeranian' ? 'selected' : '' }}>Pomeranian</option>
<option value="Silesian" {{ old('province')=='Silesian' ? 'selected' : '' }}>Silesian</option>
<option value="Subcarpathian" {{ old('province')=='Subcarpathian' ? 'selected' : '' }}>Subcarpathian</option>
<option value="Świętokrzyskie" {{ old('province')=='Świętokrzyskie' ? 'selected' : '' }}>Świętokrzyskie</option>
<option value="Warmian-Masurian" {{ old('province')=='Warmian-Masurian' ? 'selected' : '' }}>Warmian-Masurian</option>
<option value="West Pomeranian" {{ old('province')=='West Pomeranian' ? 'selected' : '' }}>West Pomeranian</option>

<!-- Czech Republic (regions) -->
<option value="Prague" {{ old('province')=='Prague' ? 'selected' : '' }}>Prague</option>
<option value="Central Bohemian" {{ old('province')=='Central Bohemian' ? 'selected' : '' }}>Central Bohemian</option>
<option value="South Bohemian" {{ old('province')=='South Bohemian' ? 'selected' : '' }}>South Bohemian</option>
<option value="Plzeň" {{ old('province')=='Plzeň' ? 'selected' : '' }}>Plzeň</option>
<option value="Karlovy Vary" {{ old('province')=='Karlovy Vary' ? 'selected' : '' }}>Karlovy Vary</option>
<option value="Ústí nad Labem" {{ old('province')=='Ústí nad Labem' ? 'selected' : '' }}>Ústí nad Labem</option>
<option value="Liberec" {{ old('province')=='Liberec' ? 'selected' : '' }}>Liberec</option>
<option value="Hradec Králové" {{ old('province')=='Hradec Králové' ? 'selected' : '' }}>Hradec Králové</option>
<option value="Pardubice" {{ old('province')=='Pardubice' ? 'selected' : '' }}>Pardubice</option>
<option value="Olomouc" {{ old('province')=='Olomouc' ? 'selected' : '' }}>Olomouc</option>
<option value="Zlín" {{ old('province')=='Zlín' ? 'selected' : '' }}>Zlín</option>
<option value="Moravian-Silesian" {{ old('province')=='Moravian-Silesian' ? 'selected' : '' }}>Moravian-Silesian</option>

<!-- Slovakia (regions) -->
<option value="Bratislava" {{ old('province')=='Bratislava' ? 'selected' : '' }}>Bratislava</option>
<option value="Trnava" {{ old('province')=='Trnava' ? 'selected' : '' }}>Trnava</option>
<option value="Trenčín" {{ old('province')=='Trenčín' ? 'selected' : '' }}>Trenčín</option>
<option value="Nitra" {{ old('province')=='Nitra' ? 'selected' : '' }}>Nitra</option>
<option value="Žilina" {{ old('province')=='Žilina' ? 'selected' : '' }}>Žilina</option>
<option value="Banská Bystrica" {{ old('province')=='Banská Bystrica' ? 'selected' : '' }}>Banská Bystrica</option>
<option value="Prešov" {{ old('province')=='Prešov' ? 'selected' : '' }}>Prešov</option>
<option value="Košice" {{ old('province')=='Košice' ? 'selected' : '' }}>Košice</option>

<!-- Hungary (counties) -->
<option value="Bács-Kiskun" {{ old('province')=='Bács-Kiskun' ? 'selected' : '' }}>Bács-Kiskun</option>
<option value="Baranya" {{ old('province')=='Baranya' ? 'selected' : '' }}>Baranya</option>
<option value="Békés" {{ old('province')=='Békés' ? 'selected' : '' }}>Békés</option>
<option value="Borsod-Abaúj-Zemplén" {{ old('province')=='Borsod-Abaúj-Zemplén' ? 'selected' : '' }}>Borsod-Abaúj-Zemplén</option>
<option value="Budapest" {{ old('province')=='Budapest' ? 'selected' : '' }}>Budapest</option>
<option value="Csongrád-Csanád" {{ old('province')=='Csongrád-Csanád' ? 'selected' : '' }}>Csongrád-Csanád</option>
<option value="Fejér" {{ old('province')=='Fejér' ? 'selected' : '' }}>Fejér</option>
<option value="Győr-Moson-Sopron" {{ old('province')=='Győr-Moson-Sopron' ? 'selected' : '' }}>Győr-Moson-Sopron</option>
<option value="Hajdú-Bihar" {{ old('province')=='Hajdú-Bihar' ? 'selected' : '' }}>Hajdú-Bihar</option>
<option value="Heves" {{ old('province')=='Heves' ? 'selected' : '' }}>Heves</option>
<option value="Jász-Nagykun-Szolnok" {{ old('province')=='Jász-Nagykun-Szolnok' ? 'selected' : '' }}>Jász-Nagykun-Szolnok</option>
<option value="Komárom-Esztergom" {{ old('province')=='Komárom-Esztergom' ? 'selected' : '' }}>Komárom-Esztergom</option>
<option value="Nógrád" {{ old('province')=='Nógrád' ? 'selected' : '' }}>Nógrád</option>
<option value="Pest" {{ old('province')=='Pest' ? 'selected' : '' }}>Pest</option>
<option value="Somogy" {{ old('province')=='Somogy' ? 'selected' : '' }}>Somogy</option>
<option value="Szabolcs-Szatmár-Bereg" {{ old('province')=='Szabolcs-Szatmár-Bereg' ? 'selected' : '' }}>Szabolcs-Szatmár-Bereg</option>
<option value="Tolna" {{ old('province')=='Tolna' ? 'selected' : '' }}>Tolna</option>
<option value="Vas" {{ old('province')=='Vas' ? 'selected' : '' }}>Vas</option>
<option value="Veszprém" {{ old('province')=='Veszprém' ? 'selected' : '' }}>Veszprém</option>
<option value="Zala" {{ old('province')=='Zala' ? 'selected' : '' }}>Zala</option>

<!-- Greece (regions) -->
<option value="Attica" {{ old('province')=='Attica' ? 'selected' : '' }}>Attica</option>
<option value="Central Greece" {{ old('province')=='Central Greece' ? 'selected' : '' }}>Central Greece</option>
<option value="Central Macedonia" {{ old('province')=='Central Macedonia' ? 'selected' : '' }}>Central Macedonia</option>
<option value="Crete" {{ old('province')=='Crete' ? 'selected' : '' }}>Crete</option>
<option value="East Macedonia and Thrace" {{ old('province')=='East Macedonia and Thrace' ? 'selected' : '' }}>East Macedonia and Thrace</option>
<option value="Epirus" {{ old('province')=='Epirus' ? 'selected' : '' }}>Epirus</option>
<option value="Ionian Islands" {{ old('province')=='Ionian Islands' ? 'selected' : '' }}>Ionian Islands</option>
<option value="North Aegean" {{ old('province')=='North Aegean' ? 'selected' : '' }}>North Aegean</option>
<option value="Peloponnese" {{ old('province')=='Peloponnese' ? 'selected' : '' }}>Peloponnese</option>
<option value="South Aegean" {{ old('province')=='South Aegean' ? 'selected' : '' }}>South Aegean</option>
<option value="Western Greece" {{ old('province')=='Western Greece' ? 'selected' : '' }}>Western Greece</option>
<option value="Western Macedonia" {{ old('province')=='Western Macedonia' ? 'selected' : '' }}>Western Macedonia</option>

<!-- Scandinavia -->
<!-- Sweden (counties) -->
<option value="Stockholm County" {{ old('province')=='Stockholm County' ? 'selected' : '' }}>Stockholm County</option>
<option value="Västra Götaland County" {{ old('province')=='Västra Götaland County' ? 'selected' : '' }}>Västra Götaland County</option>
<option value="Skåne County" {{ old('province')=='Skåne County' ? 'selected' : '' }}>Skåne County</option>
<option value="Uppsala County" {{ old('province')=='Uppsala County' ? 'selected' : '' }}>Uppsala County</option>
<!-- (more Swedish counties can be added) -->

<!-- Norway (counties / fylker) -->
<option value="Oslo" {{ old('province')=='Oslo' ? 'selected' : '' }}>Oslo</option>
<option value="Viken" {{ old('province')=='Viken' ? 'selected' : '' }}>Viken</option>
<option value="Vestland" {{ old('province')=='Vestland' ? 'selected' : '' }}>Vestland</option>
<option value="Trøndelag" {{ old('province')=='Trøndelag' ? 'selected' : '' }}>Trøndelag</option>

<!-- Denmark (regions) -->
<option value="Capital Region of Denmark" {{ old('province')=='Capital Region of Denmark' ? 'selected' : '' }}>Capital Region of Denmark</option>
<option value="Region Zealand" {{ old('province')=='Region Zealand' ? 'selected' : '' }}>Region Zealand</option>
<option value="Central Denmark Region" {{ old('province')=='Central Denmark Region' ? 'selected' : '' }}>Central Denmark Region</option>
<option value="North Denmark Region" {{ old('province')=='North Denmark Region' ? 'selected' : '' }}>North Denmark Region</option>
<option value="Region of Southern Denmark" {{ old('province')=='Region of Southern Denmark' ? 'selected' : '' }}>Region of Southern Denmark</option>

<!-- Finland (regions) -->
<option value="Uusimaa" {{ old('province')=='Uusimaa' ? 'selected' : '' }}>Uusimaa</option>
<option value="Pirkanmaa" {{ old('province')=='Pirkanmaa' ? 'selected' : '' }}>Pirkanmaa</option>
<option value="Varsinais-Suomi" {{ old('province')=='Varsinais-Suomi' ? 'selected' : '' }}>Varsinais-Suomi</option>

<!-- Iceland -->
<option value="Capital Region" {{ old('province')=='Capital Region' ? 'selected' : '' }}>Capital Region</option>
<option value="Southern Peninsula" {{ old('province')=='Southern Peninsula' ? 'selected' : '' }}>Southern Peninsula</option>

<!-- Turkey (selected provinces; add more on request) -->
<option value="Istanbul" {{ old('province')=='Istanbul' ? 'selected' : '' }}>Istanbul</option>
<option value="Ankara" {{ old('province')=='Ankara' ? 'selected' : '' }}>Ankara</option>
<option value="İzmir" {{ old('province')=='İzmir' ? 'selected' : '' }}>İzmir</option>
<option value="Antalya" {{ old('province')=='Antalya' ? 'selected' : '' }}>Antalya</option>
<option value="Bursa" {{ old('province')=='Bursa' ? 'selected' : '' }}>Bursa</option>

<!-- Israel -->
<option value="Central District" {{ old('province')=='Central District' ? 'selected' : '' }}>Central District</option>
<option value="Haifa District" {{ old('province')=='Haifa District' ? 'selected' : '' }}>Haifa District</option>
<option value="Jerusalem District" {{ old('province')=='Jerusalem District' ? 'selected' : '' }}>Jerusalem District</option>
<option value="Northern District" {{ old('province')=='Northern District' ? 'selected' : '' }}>Northern District</option>
<option value="Southern District" {{ old('province')=='Southern District' ? 'selected' : '' }}>Southern District</option>

<!-- United Arab Emirates (emirates) -->
<option value="Abu Dhabi" {{ old('province')=='Abu Dhabi' ? 'selected' : '' }}>Abu Dhabi</option>
<option value="Dubai" {{ old('province')=='Dubai' ? 'selected' : '' }}>Dubai</option>
<option value="Sharjah" {{ old('province')=='Sharjah' ? 'selected' : '' }}>Sharjah</option>
<option value="Ajman" {{ old('province')=='Ajman' ? 'selected' : '' }}>Ajman</option>
<option value="Umm Al Quwain" {{ old('province')=='Umm Al Quwain' ? 'selected' : '' }}>Umm Al Quwain</option>
<option value="Ras Al Khaimah" {{ old('province')=='Ras Al Khaimah' ? 'selected' : '' }}>Ras Al Khaimah</option>
<option value="Fujairah" {{ old('province')=='Fujairah' ? 'selected' : '' }}>Fujairah</option>

<!-- Saudi Arabia (regions) -->
<option value="Riyadh Region" {{ old('province')=='Riyadh Region' ? 'selected' : '' }}>Riyadh Region</option>
<option value="Makkah Region" {{ old('province')=='Makkah Region' ? 'selected' : '' }}>Makkah Region</option>
<option value="Madinah Region" {{ old('province')=='Madinah Region' ? 'selected' : '' }}>Madinah Region</option>
<option value="Eastern Province" {{ old('province')=='Eastern Province' ? 'selected' : '' }}>Eastern Province</option>

<!-- Iran (selected provinces; many exist) -->
<option value="Tehran Province" {{ old('province')=='Tehran Province' ? 'selected' : '' }}>Tehran Province</option>
<option value="Isfahan Province" {{ old('province')=='Isfahan Province' ? 'selected' : '' }}>Isfahan Province</option>
<option value="Fars Province" {{ old('province')=='Fars Province' ? 'selected' : '' }}>Fars Province</option>

<!-- Kazakhstan (regions) -->
<option value="Almaty Region" {{ old('province')=='Almaty Region' ? 'selected' : '' }}>Almaty Region</option>
<option value="Atyrau Region" {{ old('province')=='Atyrau Region' ? 'selected' : '' }}>Atyrau Region</option>
<option value="Nur-Sultan (city region)" {{ old('province')=='Nur-Sultan (city region)' ? 'selected' : '' }}>Nur-Sultan (city)</option>

<!-- Ukraine (oblasts) -->
<option value="Kyiv" {{ old('province')=='Kyiv' ? 'selected' : '' }}>Kyiv</option>
<option value="Lviv Oblast" {{ old('province')=='Lviv Oblast' ? 'selected' : '' }}>Lviv Oblast</option>
<option value="Kharkiv Oblast" {{ old('province')=='Kharkiv Oblast' ? 'selected' : '' }}>Kharkiv Oblast</option>
<option value="Odesa Oblast" {{ old('province')=='Odesa Oblast' ? 'selected' : '' }}>Odesa Oblast</option>

<!-- Russia (federal subjects — selected major ones; full list is long) -->
<option value="Moscow" {{ old('province')=='Moscow' ? 'selected' : '' }}>Moscow</option>
<option value="Saint Petersburg" {{ old('province')=='Saint Petersburg' ? 'selected' : '' }}>Saint Petersburg</option>
<option value="Moscow Oblast" {{ old('province')=='Moscow Oblast' ? 'selected' : '' }}>Moscow Oblast</option>
<option value="Krasnodar Krai" {{ old('province')=='Krasnodar Krai' ? 'selected' : '' }}>Krasnodar Krai</option>

<!-- Belgium (provinces - added full list) -->
<option value="Antwerp" {{ old('province')=='Antwerp' ? 'selected' : '' }}>Antwerp</option>
<option value="East Flanders" {{ old('province')=='East Flanders' ? 'selected' : '' }}>East Flanders</option>
<option value="Flemish Brabant" {{ old('province')=='Flemish Brabant' ? 'selected' : '' }}>Flemish Brabant</option>
<option value="Hainaut" {{ old('province')=='Hainaut' ? 'selected' : '' }}>Hainaut</option>
<option value="Liège" {{ old('province')=="Liège" ? 'selected' : '' }}>Liège</option>
<option value="Limburg" {{ old('province')=='Limburg' ? 'selected' : '' }}>Limburg</option>
<option value="Luxembourg (Belgium)" {{ old('province')=="Luxembourg (Belgium)" ? 'selected' : '' }}>Luxembourg</option>
<option value="Namur" {{ old('province')=='Namur' ? 'selected' : '' }}>Namur</option>
<option value="Walloon Brabant" {{ old('province')=='Walloon Brabant' ? 'selected' : '' }}>Walloon Brabant</option>

<!-- Balkans & Eastern Europe (selected countries) -->
<!-- Romania (counties) -->
<option value="Alba County" {{ old('province')=='Alba County' ? 'selected' : '' }}>Alba</option>
<option value="Arad County" {{ old('province')=='Arad County' ? 'selected' : '' }}>Arad</option>
<option value="Bucharest" {{ old('province')=='Bucharest' ? 'selected' : '' }}>Bucharest</option>
<option value="Cluj County" {{ old('province')=='Cluj County' ? 'selected' : '' }}>Cluj</option>
<option value="Timiș County" {{ old('province')=="Timiș County" ? 'selected' : '' }}>Timiș</option>

<!-- Bulgaria (provinces / oblasts) -->
<option value="Blagoevgrad Province" {{ old('province')=='Blagoevgrad Province' ? 'selected' : '' }}>Blagoevgrad</option>
<option value="Burgas Province" {{ old('province')=='Burgas Province' ? 'selected' : '' }}>Burgas</option>
<option value="Sofia Province" {{ old('province')=='Sofia Province' ? 'selected' : '' }}>Sofia Province</option>
<option value="Varna Province" {{ old('province')=='Varna Province' ? 'selected' : '' }}>Varna</option>

<!-- Serbia (districts - selected) -->
<option value="Belgrade" {{ old('province')=='Belgrade' ? 'selected' : '' }}>Belgrade</option>
<option value="Nišava" {{ old('province')=='Nišava' ? 'selected' : '' }}>Nišava</option>

<!-- Croatia (counties) -->
<option value="Zagreb" {{ old('province')=='Zagreb' ? 'selected' : '' }}>Zagreb</option>
<option value="Split-Dalmatia" {{ old('province')=='Split-Dalmatia' ? 'selected' : '' }}>Split-Dalmatia</option>

<!-- Slovenia (regions/municipalities - selected) -->
<option value="Central Slovenia" {{ old('province')=='Central Slovenia' ? 'selected' : '' }}>Central Slovenia</option>
<option value="Drava" {{ old('province')=='Drava' ? 'selected' : '' }}>Drava</option>

<!-- Baltic states -->
<!-- Estonia (counties) -->
<option value="Harju County" {{ old('province')=='Harju County' ? 'selected' : '' }}>Harju</option>
<option value="Tartu County" {{ old('province')=='Tartu County' ? 'selected' : '' }}>Tartu</option>

<!-- Latvia (regions) -->
<option value="Riga" {{ old('province')=='Riga' ? 'selected' : '' }}>Riga</option>
<option value="Vidzeme" {{ old('province')=='Vidzeme' ? 'selected' : '' }}>Vidzeme</option>

<!-- Lithuania (counties) -->
<option value="Vilnius County" {{ old('province')=='Vilnius County' ? 'selected' : '' }}>Vilnius</option>
<option value="Kaunas County" {{ old('province')=='Kaunas County' ? 'selected' : '' }}>Kaunas</option>

<!-- Africa — selected countries and regions -->
<!-- Egypt (governorates) -->
<option value="Cairo Governorate" {{ old('province')=='Cairo Governorate' ? 'selected' : '' }}>Cairo</option>
<option value="Giza Governorate" {{ old('province')=='Giza Governorate' ? 'selected' : '' }}>Giza</option>
<option value="Alexandria Governorate" {{ old('province')=='Alexandria Governorate' ? 'selected' : '' }}>Alexandria</option>

<!-- Morocco (regions) -->
<option value="Casablanca-Settat" {{ old('province')=='Casablanca-Settat' ? 'selected' : '' }}>Casablanca-Settat</option>
<option value="Rabat-Salé-Kénitra" {{ old('province')=='Rabat-Salé-Kénitra' ? 'selected' : '' }}>Rabat-Salé-Kénitra</option>

<!-- Kenya (counties - selected) -->
<option value="Nairobi County" {{ old('province')=='Nairobi County' ? 'selected' : '' }}>Nairobi</option>
<option value="Mombasa County" {{ old('province')=='Mombasa County' ? 'selected' : '' }}>Mombasa</option>

<!-- Ghana (regions) -->
<option value="Greater Accra" {{ old('province')=='Greater Accra' ? 'selected' : '' }}>Greater Accra</option>
<option value="Ashanti" {{ old('province')=='Ashanti' ? 'selected' : '' }}>Ashanti</option>

<!-- Ethiopia (regions) -->
<option value="Addis Ababa" {{ old('province')=='Addis Ababa' ? 'selected' : '' }}>Addis Ababa</option>
<option value="Oromia" {{ old('province')=='Oromia' ? 'selected' : '' }}>Oromia</option>

<!-- Tanzania (regions) -->
<option value="Dar es Salaam" {{ old('province')=='Dar es Salaam' ? 'selected' : '' }}>Dar es Salaam</option>
<option value="Mwanza" {{ old('province')=='Mwanza' ? 'selected' : '' }}>Mwanza</option>

<!-- Algeria (wilayas - selected) -->
<option value="Algiers Province" {{ old('province')=='Algiers Province' ? 'selected' : '' }}>Algiers</option>
<option value="Oran Province" {{ old('province')=='Oran Province' ? 'selected' : '' }}>Oran</option>

<!-- Rest of Central & South America -->
<!-- Colombia (departments) -->
<option value="Antioquia" {{ old('province')=='Antioquia' ? 'selected' : '' }}>Antioquia</option>
<option value="Bogotá" {{ old('province')=='Bogotá' ? 'selected' : '' }}>Bogotá (Capital District)</option>
<option value="Cundinamarca" {{ old('province')=='Cundinamarca' ? 'selected' : '' }}>Cundinamarca</option>

<!-- Peru (regions) -->
<option value="Lima" {{ old('province')=='Lima' ? 'selected' : '' }}>Lima</option>
<option value="Cusco" {{ old('province')=='Cusco' ? 'selected' : '' }}>Cusco</option>
<option value="Arequipa" {{ old('province')=='Arequipa' ? 'selected' : '' }}>Arequipa</option>

<!-- Chile (regions) -->
<option value="Santiago Metropolitan Region" {{ old('province')=='Santiago Metropolitan Region' ? 'selected' : '' }}>Santiago Metropolitan</option>
<option value="Antofagasta Region" {{ old('province')=='Antofagasta Region' ? 'selected' : '' }}>Antofagasta</option>

<!-- Uruguay (departments) -->
<option value="Montevideo" {{ old('province')=='Montevideo' ? 'selected' : '' }}>Montevideo</option>
<option value="Canelones" {{ old('province')=='Canelones' ? 'selected' : '' }}>Canelones</option>

<!-- Paraguay (departments) -->
<option value="Asunción" {{ old('province')=='Asunción' ? 'selected' : '' }}>Asunción</option>
<option value="Central Department" {{ old('province')=='Central Department' ? 'selected' : '' }}>Central</option>

<!-- Central America & Caribbean -->
<!-- Guatemala (departments) -->
<option value="Guatemala Department" {{ old('province')=='Guatemala Department' ? 'selected' : '' }}>Guatemala</option>
<option value="Quetzaltenango Department" {{ old('province')=='Quetzaltenango Department' ? 'selected' : '' }}>Quetzaltenango</option>

<!-- Honduras (departments) -->
<option value="Cortés" {{ old('province')=='Cortés' ? 'selected' : '' }}>Cortés</option>
<option value="Francisco Morazán" {{ old('province')=='Francisco Morazán' ? 'selected' : '' }}>Francisco Morazán</option>

<!-- El Salvador (departments) -->
<option value="San Salvador Department" {{ old('province')=='San Salvador Department' ? 'selected' : '' }}>San Salvador</option>

<!-- Costa Rica (provinces) -->
<option value="San José" {{ old('province')=='San José' ? 'selected' : '' }}>San José</option>
<option value="Alajuela" {{ old('province')=='Alajuela' ? 'selected' : '' }}>Alajuela</option>

<!-- Panama (provinces) -->
<option value="Panama Province" {{ old('province')=='Panama Province' ? 'selected' : '' }}>Panama</option>
<option value="Chiriquí" {{ old('province')=='Chiriquí' ? 'selected' : '' }}>Chiriquí</option>

<!-- Caribbean (selected) -->
<option value="Kingston (Jamaica)" {{ old('province')=="Kingston (Jamaica)" ? 'selected' : '' }}>Kingston</option>
<option value="Havana (Cuba)" {{ old('province')=="Havana (Cuba)" ? 'selected' : '' }}>Havana</option>
<option value="Port-au-Prince (Haiti)" {{ old('province')=="Port-au-Prince (Haiti)" ? 'selected' : '' }}>Port-au-Prince</option>

<!-- East & Southeast Asia -->
<!-- South Korea (provinces & special cities) -->
<option value="Seoul" {{ old('province')=='Seoul' ? 'selected' : '' }}>Seoul</option>
<option value="Busan" {{ old('province')=='Busan' ? 'selected' : '' }}>Busan</option>
<option value="Gyeonggi-do" {{ old('province')=='Gyeonggi-do' ? 'selected' : '' }}>Gyeonggi-do</option>
<option value="Jeju" {{ old('province')=='Jeju' ? 'selected' : '' }}>Jeju</option>

<!-- Philippines (regions - selected) -->
<option value="National Capital Region (NCR)" {{ old('province')=='National Capital Region (NCR)' ? 'selected' : '' }}>NCR (Metro Manila)</option>
<option value="Calabarzon" {{ old('province')=='Calabarzon' ? 'selected' : '' }}>Calabarzon</option>
<option value="Central Visayas" {{ old('province')=='Central Visayas' ? 'selected' : '' }}>Central Visayas</option>

<!-- Vietnam (regions/provinces - selected) -->
<option value="Hanoi" {{ old('province')=='Hanoi' ? 'selected' : '' }}>Hanoi</option>
<option value="Ho Chi Minh City" {{ old('province')=='Ho Chi Minh City' ? 'selected' : '' }}>Ho Chi Minh City</option>
<option value="Da Nang" {{ old('province')=='Da Nang' ? 'selected' : '' }}>Đà Nẵng</option>

<!-- Thailand (provinces - selected) -->
<option value="Bangkok" {{ old('province')=='Bangkok' ? 'selected' : '' }}>Bangkok</option>
<option value="Chiang Mai" {{ old('province')=='Chiang Mai' ? 'selected' : '' }}>Chiang Mai</option>

<!-- Malaysia (states & federal territories) -->
<option value="Selangor" {{ old('province')=='Selangor' ? 'selected' : '' }}>Selangor</option>
<option value="Kuala Lumpur" {{ old('province')=='Kuala Lumpur' ? 'selected' : '' }}>Kuala Lumpur</option>
<option value="Penang" {{ old('province')=='Penang' ? 'selected' : '' }}>Penang</option>

<!-- Singapore (city-state) -->
<option value="Singapore" {{ old('province')=='Singapore' ? 'selected' : '' }}>Singapore</option>

<!-- Oceania & Pacific -->
<!-- New Zealand (regions) -->
<option value="Auckland" {{ old('province')=='Auckland' ? 'selected' : '' }}>Auckland</option>
<option value="Wellington" {{ old('province')=='Wellington' ? 'selected' : '' }}>Wellington</option>
<option value="Canterbury" {{ old('province')=='Canterbury' ? 'selected' : '' }}>Canterbury</option>

<!-- Pacific island groups (selected) -->
<option value="Fiji (Central Division)" {{ old('province')=="Fiji (Central Division)" ? 'selected' : '' }}>Fiji - Central Division</option>
<option value="Papua New Guinea (National Capital District)" {{ old('province')=="Papua New Guinea (National Capital District)" ? 'selected' : '' }}>Papua New Guinea - NCD</option>

<!-- Russia (expanded few more federal subjects) -->
<option value="Saint Petersburg" {{ old('province')=='Saint Petersburg' ? 'selected' : '' }}>Saint Petersburg</option>
<option value="Novosibirsk Oblast" {{ old('province')=='Novosibirsk Oblast' ? 'selected' : '' }}>Novosibirsk Oblast</option>
<option value="Krasnoyarsk Krai" {{ old('province')=='Krasnoyarsk Krai' ? 'selected' : '' }}>Krasnoyarsk Krai</option>

<!-- Turkey (added more provinces) -->
<option value="Gaziantep" {{ old('province')=='Gaziantep' ? 'selected' : '' }}>Gaziantep</option>
<option value="Konya" {{ old('province')=='Konya' ? 'selected' : '' }}>Konya</option>
<option value="Sakarya" {{ old('province')=='Sakarya' ? 'selected' : '' }}>Sakarya</option>

<!-- Iran (added more provinces) -->
<option value="Mazandaran Province" {{ old('province')=='Mazandaran Province' ? 'selected' : '' }}>Mazandaran</option>
<option value="Khorasan Razavi Province" {{ old('province')=='Khorasan Razavi Province' ? 'selected' : '' }}>Khorasan Razavi</option>

<!-- Israel / Palestinian territories (added Gaza & West Bank regions) -->
<option value="Gaza" {{ old('province')=='Gaza' ? 'selected' : '' }}>Gaza</option>
<option value="West Bank" {{ old('province')=='West Bank' ? 'selected' : '' }}>West Bank</option>

<!-- More African countries (expanded) -->
<!-- Angola (provinces) -->
<option value="Bengo" {{ old('province')=='Bengo' ? 'selected' : '' }}>Bengo</option>
<option value="Benguela" {{ old('province')=='Benguela' ? 'selected' : '' }}>Benguela</option>
<option value="Cunene" {{ old('province')=='Cunene' ? 'selected' : '' }}>Cunene</option>
<option value="Huambo" {{ old('province')=='Huambo' ? 'selected' : '' }}>Huambo</option>
<option value="Luanda" {{ old('province')=='Luanda' ? 'selected' : '' }}>Luanda</option>

<!-- Zimbabwe (provinces) -->
<option value="Harare Province" {{ old('province')=='Harare Province' ? 'selected' : '' }}>Harare</option>
<option value="Bulawayo" {{ old('province')=='Bulawayo' ? 'selected' : '' }}>Bulawayo</option>
<option value="Manicaland" {{ old('province')=='Manicaland' ? 'selected' : '' }}>Manicaland</option>
<option value="Mashonaland Central" {{ old('province')=='Mashonaland Central' ? 'selected' : '' }}>Mashonaland Central</option>

<!-- Mozambique (provinces) -->
<option value="Maputo Province" {{ old('province')=='Maputo Province' ? 'selected' : '' }}>Maputo Province</option>
<option value="Nampula" {{ old('province')=='Nampula' ? 'selected' : '' }}>Nampula</option>
<option value="Sofala" {{ old('province')=='Sofala' ? 'selected' : '' }}>Sofala</option>

<!-- Zambia (provinces) -->
<option value="Lusaka Province" {{ old('province')=='Lusaka Province' ? 'selected' : '' }}>Lusaka</option>
<option value="Copperbelt" {{ old('province')=='Copperbelt' ? 'selected' : '' }}>Copperbelt</option>
<option value="Eastern Province (Zambia)" {{ old('province')=="Eastern Province (Zambia)" ? 'selected' : '' }}>Eastern</option>

<!-- Malawi (regions/provinces) -->
<option value="Northern Region" {{ old('province')=='Northern Region' ? 'selected' : '' }}>Northern Region</option>
<option value="Central Region" {{ old('province')=='Central Region' ? 'selected' : '' }}>Central Region</option>
<option value="Southern Region" {{ old('province')=='Southern Region' ? 'selected' : '' }}>Southern Region</option>

<!-- Namibia (regions - selected) -->
<option value="Khomas" {{ old('province')=='Khomas' ? 'selected' : '' }}>Khomas</option>
<option value="Erongo" {{ old('province')=='Erongo' ? 'selected' : '' }}>Erongo</option>
<option value="Oshana" {{ old('province')=='Oshana' ? 'selected' : '' }}>Oshana</option>

<!-- Botswana (districts) -->
<option value="Gaborone" {{ old('province')=='Gaborone' ? 'selected' : '' }}>Gaborone</option>
<option value="North-East District" {{ old('province')=='North-East District' ? 'selected' : '' }}>North-East</option>

<!-- Sudan / South Sudan -->
<option value="Khartoum State" {{ old('province')=='Khartoum State' ? 'selected' : '' }}>Khartoum</option>
<option value="Upper Nile" {{ old('province')=='Upper Nile' ? 'selected' : '' }}>Upper Nile (South Sudan)</option>
<option value="Juba" {{ old('province')=='Juba' ? 'selected' : '' }}>Juba (Central Equatoria)</option>

<!-- Libya (regions / municipalities - selected) -->
<option value="Tripoli" {{ old('province')=='Tripoli' ? 'selected' : '' }}>Tripoli</option>
<option value="Benghazi" {{ old('province')=='Benghazi' ? 'selected' : '' }}>Benghazi</option>

<!-- Tunisia (governorates) -->
<option value="Tunis" {{ old('province')=='Tunis' ? 'selected' : '' }}>Tunis</option>
<option value="Sfax" {{ old('province')=='Sfax' ? 'selected' : '' }}>Sfax</option>
<option value="Sousse" {{ old('province')=='Sousse' ? 'selected' : '' }}>Sousse</option>

<!-- Mauritania (regions - selected) -->
<option value="Nouakchott" {{ old('province')=='Nouakchott' ? 'selected' : '' }}>Nouakchott</option>
<option value="Adrar" {{ old('province')=='Adrar' ? 'selected' : '' }}>Adrar</option>

<!-- Sierra Leone / Liberia / Guinea -->
<option value="Freetown" {{ old('province')=='Freetown' ? 'selected' : '' }}>Freetown (Western Area)</option>
<option value="Monrovia" {{ old('province')=='Monrovia' ? 'selected' : '' }}>Monrovia</option>
<option value="Conakry" {{ old('province')=='Conakry' ? 'selected' : '' }}>Conakry</option>

<!-- The Gambia -->
<option value="Banjul" {{ old('province')=='Banjul' ? 'selected' : '' }}>Banjul</option>
<option value="West Coast Region" {{ old('province')=='West Coast Region' ? 'selected' : '' }}>West Coast Region</option>

<!-- Cameroon -->
<option value="Littoral" {{ old('province')=='Littoral' ? 'selected' : '' }}>Littoral</option>
<option value="Centre (Cameroon)" {{ old('province')=="Centre (Cameroon)" ? 'selected' : '' }}>Centre</option>
<option value="North-West" {{ old('province')=='North-West' ? 'selected' : '' }}>North-West</option>
<option value="South-West" {{ old('province')=='South-West' ? 'selected' : '' }}>South-West</option>

<!-- Republic of the Congo and Democratic Republic of the Congo (selected) -->
<option value="Brazzaville" {{ old('province')=='Brazzaville' ? 'selected' : '' }}>Brazzaville (Congo)</option>
<option value="Kinshasa" {{ old('province')=='Kinshasa' ? 'selected' : '' }}>Kinshasa (DRC)</option>
<option value="Kongo Central" {{ old('province')=='Kongo Central' ? 'selected' : '' }}>Kongo Central</option>

<!-- Madagascar -->
<option value="Antananarivo" {{ old('province')=='Antananarivo' ? 'selected' : '' }}>Antananarivo</option>
<option value="Toamasina" {{ old('province')=='Toamasina' ? 'selected' : '' }}>Toamasina</option>

<!-- Rwanda & Burundi -->
<option value="Kigali" {{ old('province')=='Kigali' ? 'selected' : '' }}>Kigali</option>
<option value="Gitega" {{ old('province')=='Gitega' ? 'selected' : '' }}>Gitega</option>

<!-- Somalia (federal member states - selected) -->
<option value="Somaliland" {{ old('province')=='Somaliland' ? 'selected' : '' }}>Somaliland</option>
<option value="Puntland" {{ old('province')=='Puntland' ? 'selected' : '' }}>Puntland</option>
<option value="Galmudug" {{ old('province')=='Galmudug' ? 'selected' : '' }}>Galmudug</option>

<!-- Central Asia & Caucasus (expanded) -->
<!-- Uzbekistan (regions) -->
<option value="Tashkent Region" {{ old('province')=='Tashkent Region' ? 'selected' : '' }}>Tashkent Region</option>
<option value="Samarkand Region" {{ old('province')=='Samarkand Region' ? 'selected' : '' }}>Samarkand Region</option>
<option value="Bukhara Region" {{ old('province')=='Bukhara Region' ? 'selected' : '' }}>Bukhara Region</option>

<!-- Kazakhstan (more regions) -->
<option value="Almaty" {{ old('province')=='Almaty' ? 'selected' : '' }}>Almaty</option>
<option value="East Kazakhstan" {{ old('province')=='East Kazakhstan' ? 'selected' : '' }}>East Kazakhstan</option>
<option value="Pavlodar Region" {{ old('province')=='Pavlodar Region' ? 'selected' : '' }}>Pavlodar Region</option>

<!-- Kyrgyzstan (regions) -->
<option value="Bishkek City" {{ old('province')=='Bishkek City' ? 'selected' : '' }}>Bishkek</option>
<option value="Chuy Region" {{ old('province')=='Chuy Region' ? 'selected' : '' }}>Chuy</option>

<!-- Tajikistan (regions) -->
<option value="Sughd Region" {{ old('province')=='Sughd Region' ? 'selected' : '' }}>Sughd</option>
<option value="Khatlon Region" {{ old('province')=='Khatlon Region' ? 'selected' : '' }}>Khatlon</option>
<option value="Gorno-Badakhshan" {{ old('province')=='Gorno-Badakhshan' ? 'selected' : '' }}>Gorno-Badakhshan</option>

<!-- Turkmenistan (regions) -->
<option value="Ahal Region" {{ old('province')=='Ahal Region' ? 'selected' : '' }}>Ahal</option>
<option value="Balkan Region" {{ old('province')=='Balkan Region' ? 'selected' : '' }}>Balkan</option>
<option value="Lebap Region" {{ old('province')=='Lebap Region' ? 'selected' : '' }}>Lebap</option>

<!-- Armenia / Azerbaijan / Georgia -->
<option value="Yerevan" {{ old('province')=='Yerevan' ? 'selected' : '' }}>Yerevan (Armenia)</option>
<option value="Tbilisi" {{ old('province')=='Tbilisi' ? 'selected' : '' }}>Tbilisi (Georgia)</option>
<option value="Baku" {{ old('province')=='Baku' ? 'selected' : '' }}>Baku (Azerbaijan)</option>
<option value="Shirak" {{ old('province')=='Shirak' ? 'selected' : '' }}>Shirak (Armenia)</option>

<!-- Caucasus regions (selected) -->
<option value="Kvemo Kartli" {{ old('province')=='Kvemo Kartli' ? 'selected' : '' }}>Kvemo Kartli (Georgia)</option>
<option value="Adjara" {{ old('province')=='Adjara' ? 'selected' : '' }}>Adjara (Georgia)</option>

<!-- More Russia federal subjects (added) -->
<option value="Altai Krai" {{ old('province')=='Altai Krai' ? 'selected' : '' }}>Altai Krai</option>
<option value="Rostov Oblast" {{ old('province')=='Rostov Oblast' ? 'selected' : '' }}>Rostov Oblast</option>
<option value="Samara Oblast" {{ old('province')=='Samara Oblast' ? 'selected' : '' }}>Samara Oblast</option>
<option value="Vladimir Oblast" {{ old('province')=='Vladimir Oblast' ? 'selected' : '' }}>Vladimir Oblast</option>
<option value="Volgograd Oblast" {{ old('province')=='Volgograd Oblast' ? 'selected' : '' }}>Volgograd Oblast</option>

<!-- More Turkey provinces (expanded) -->
<option value="Adana" {{ old('province')=='Adana' ? 'selected' : '' }}>Adana</option>
<option value="Ankara Province" {{ old('province')=='Ankara Province' ? 'selected' : '' }}>Ankara Province</option>
<option value="Bursa Province" {{ old('province')=='Bursa Province' ? 'selected' : '' }}>Bursa Province</option>
<option value="Kayseri" {{ old('province')=='Kayseri' ? 'selected' : '' }}>Kayseri</option>
<option value="Mersin" {{ old('province')=='Mersin' ? 'selected' : '' }}>Mersin</option>
<option value="Sivas" {{ old('province')=='Sivas' ? 'selected' : '' }}>Sivas</option>

<!-- More Eastern Europe -->
<!-- Belarus -->
<option value="Minsk Region" {{ old('province')=='Minsk Region' ? 'selected' : '' }}>Minsk Region</option>
<option value="Brest Region" {{ old('province')=='Brest Region' ? 'selected' : '' }}>Brest Region</option>

<!-- Moldova -->
<option value="Chisinau" {{ old('province')=='Chisinau' ? 'selected' : '' }}>Chișinău</option>
<option value="Transnistria (Dniestr)" {{ old('province')=='Transnistria (Dniestr)' ? 'selected' : '' }}>Transnistria</option>

<!-- Albania / North Macedonia / Montenegro (selected) -->
<option value="Tirana" {{ old('province')=='Tirana' ? 'selected' : '' }}>Tirana</option>
<option value="Skopje" {{ old('province')=='Skopje' ? 'selected' : '' }}>Skopje</option>
<option value="Podgorica" {{ old('province')=='Podgorica' ? 'selected' : '' }}>Podgorica</option>

<!-- More of Central & South America (selected additions) -->
<!-- Bolivia -->
<option value="La Paz Department" {{ old('province')=='La Paz Department' ? 'selected' : '' }}>La Paz</option>
<option value="Santa Cruz Department" {{ old('province')=='Santa Cruz Department' ? 'selected' : '' }}>Santa Cruz</option>

<!-- Ecuador -->
<option value="Pichincha" {{ old('province')=='Pichincha' ? 'selected' : '' }}>Pichincha</option>
<option value="Guayas" {{ old('province')=='Guayas' ? 'selected' : '' }}>Guayas</option>

<!-- Venezuela -->
<option value="Distrito Capital" {{ old('province')=='Distrito Capital' ? 'selected' : '' }}>Distrito Capital</option>
<option value="Miranda" {{ old('province')=='Miranda' ? 'selected' : '' }}>Miranda</option>

<!-- More Caribbean islands -->
<option value="Trinidad and Tobago" {{ old('province')=='Trinidad and Tobago' ? 'selected' : '' }}>Trinidad and Tobago</option>
<option value="Barbados" {{ old('province')=='Barbados' ? 'selected' : '' }}>Barbados</option>
<option value="Saint Lucia" {{ old('province')=='Saint Lucia' ? 'selected' : '' }}>Saint Lucia</option>

<!-- More Oceania (selected) -->
<option value="Solomon Islands (Central)" {{ old('province')=="Solomon Islands (Central)" ? 'selected' : '' }}>Solomon Islands - Central</option>
<option value="Vanuatu (Shefa)" {{ old('province')=="Vanuatu (Shefa)" ? 'selected' : '' }}>Vanuatu - Shefa</option>






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
        
<!-- Africa -->
<option value="Abidjan" {{ old('city')=='Abidjan' ? 'selected' : '' }}>Abidjan</option>
<option value="Accra" {{ old('city')=='Accra' ? 'selected' : '' }}>Accra</option>
<option value="Addis Ababa" {{ old('city')=='Addis Ababa' ? 'selected' : '' }}>Addis Ababa</option>
<option value="Algiers" {{ old('city')=='Algiers' ? 'selected' : '' }}>Algiers</option>
<option value="Cairo" {{ old('city')=='Cairo' ? 'selected' : '' }}>Cairo</option>
<option value="Cape Town" {{ old('city')=='Cape Town' ? 'selected' : '' }}>Cape Town</option>
<option value="Casablanca" {{ old('city')=='Casablanca' ? 'selected' : '' }}>Casablanca</option>
<option value="Durban" {{ old('city')=='Durban' ? 'selected' : '' }}>Durban</option>
<option value="Johannesburg" {{ old('city')=='Johannesburg' ? 'selected' : '' }}>Johannesburg</option>
<option value="Lagos" {{ old('city')=='Lagos' ? 'selected' : '' }}>Lagos</option>
<option value="Nairobi" {{ old('city')=='Nairobi' ? 'selected' : '' }}>Nairobi</option>
<option value="Tunis" {{ old('city')=='Tunis' ? 'selected' : '' }}>Tunis</option>

<!-- Asia -->
<option value="Abu Dhabi" {{ old('city')=='Abu Dhabi' ? 'selected' : '' }}>Abu Dhabi</option>
<option value="Ahmedabad" {{ old('city')=='Ahmedabad' ? 'selected' : '' }}>Ahmedabad</option>
<option value="Amritsar" {{ old('city')=='Amritsar' ? 'selected' : '' }}>Amritsar</option>
<option value="Bangalore" {{ old('city')=='Bangalore' ? 'selected' : '' }}>Bangalore</option>
<option value="Bangkok" {{ old('city')=='Bangkok' ? 'selected' : '' }}>Bangkok</option>
<option value="Beijing" {{ old('city')=='Beijing' ? 'selected' : '' }}>Beijing</option>
<option value="Chennai" {{ old('city')=='Chennai' ? 'selected' : '' }}>Chennai</option>
<option value="Colombo" {{ old('city')=='Colombo' ? 'selected' : '' }}>Colombo</option>
<option value="Delhi" {{ old('city')=='Delhi' ? 'selected' : '' }}>Delhi</option>
<option value="Dhaka" {{ old('city')=='Dhaka' ? 'selected' : '' }}>Dhaka</option>
<option value="Dubai" {{ old('city')=='Dubai' ? 'selected' : '' }}>Dubai</option>
<option value="Hanoi" {{ old('city')=='Hanoi' ? 'selected' : '' }}>Hanoi</option>
<option value="Hong Kong" {{ old('city')=='Hong Kong' ? 'selected' : '' }}>Hong Kong</option>
<option value="Hyderabad" {{ old('city')=='Hyderabad' ? 'selected' : '' }}>Hyderabad</option>
<option value="Islamabad" {{ old('city')=='Islamabad' ? 'selected' : '' }}>Islamabad</option>
<option value="Jakarta" {{ old('city')=='Jakarta' ? 'selected' : '' }}>Jakarta</option>
<option value="Karachi" {{ old('city')=='Karachi' ? 'selected' : '' }}>Karachi</option>
<option value="Kathmandu" {{ old('city')=='Kathmandu' ? 'selected' : '' }}>Kathmandu</option>
<option value="Kuala Lumpur" {{ old('city')=='Kuala Lumpur' ? 'selected' : '' }}>Kuala Lumpur</option>
<option value="Manila" {{ old('city')=='Manila' ? 'selected' : '' }}>Manila</option>
<option value="Mumbai" {{ old('city')=='Mumbai' ? 'selected' : '' }}>Mumbai</option>
<option value="Nagoya" {{ old('city')=='Nagoya' ? 'selected' : '' }}>Nagoya</option>
<option value="Osaka" {{ old('city')=='Osaka' ? 'selected' : '' }}>Osaka</option>
<option value="Seoul" {{ old('city')=='Seoul' ? 'selected' : '' }}>Seoul</option>
<option value="Shanghai" {{ old('city')=='Shanghai' ? 'selected' : '' }}>Shanghai</option>
<option value="Singapore" {{ old('city')=='Singapore' ? 'selected' : '' }}>Singapore</option>
<option value="Taipei" {{ old('city')=='Taipei' ? 'selected' : '' }}>Taipei</option>
<option value="Tehran" {{ old('city')=='Tehran' ? 'selected' : '' }}>Tehran</option>
<option value="Tokyo" {{ old('city')=='Tokyo' ? 'selected' : '' }}>Tokyo</option>

<!-- Europe -->
<option value="Amsterdam" {{ old('city')=='Amsterdam' ? 'selected' : '' }}>Amsterdam</option>
<option value="Athens" {{ old('city')=='Athens' ? 'selected' : '' }}>Athens</option>
<option value="Barcelona" {{ old('city')=='Barcelona' ? 'selected' : '' }}>Barcelona</option>
<option value="Belgrade" {{ old('city')=='Belgrade' ? 'selected' : '' }}>Belgrade</option>
<option value="Berlin" {{ old('city')=='Berlin' ? 'selected' : '' }}>Berlin</option>
<option value="Brussels" {{ old('city')=='Brussels' ? 'selected' : '' }}>Brussels</option>
<option value="Budapest" {{ old('city')=='Budapest' ? 'selected' : '' }}>Budapest</option>
<option value="Copenhagen" {{ old('city')=='Copenhagen' ? 'selected' : '' }}>Copenhagen</option>
<option value="Dublin" {{ old('city')=='Dublin' ? 'selected' : '' }}>Dublin</option>
<option value="Edinburgh" {{ old('city')=='Edinburgh' ? 'selected' : '' }}>Edinburgh</option>
<option value="Florence" {{ old('city')=='Florence' ? 'selected' : '' }}>Florence</option>
<option value="Geneva" {{ old('city')=='Geneva' ? 'selected' : '' }}>Geneva</option>
<option value="Hamburg" {{ old('city')=='Hamburg' ? 'selected' : '' }}>Hamburg</option>
<option value="Helsinki" {{ old('city')=='Helsinki' ? 'selected' : '' }}>Helsinki</option>
<option value="Lisbon" {{ old('city')=='Lisbon' ? 'selected' : '' }}>Lisbon</option>
<option value="London" {{ old('city')=='London' ? 'selected' : '' }}>London</option>
<option value="Madrid" {{ old('city')=='Madrid' ? 'selected' : '' }}>Madrid</option>
<option value="Milan" {{ old('city')=='Milan' ? 'selected' : '' }}>Milan</option>
<option value="Munich" {{ old('city')=='Munich' ? 'selected' : '' }}>Munich</option>
<option value="Oslo" {{ old('city')=='Oslo' ? 'selected' : '' }}>Oslo</option>
<option value="Paris" {{ old('city')=='Paris' ? 'selected' : '' }}>Paris</option>
<option value="Prague" {{ old('city')=='Prague' ? 'selected' : '' }}>Prague</option>
<option value="Rome" {{ old('city')=='Rome' ? 'selected' : '' }}>Rome</option>
<option value="Stockholm" {{ old('city')=='Stockholm' ? 'selected' : '' }}>Stockholm</option>
<option value="Vienna" {{ old('city')=='Vienna' ? 'selected' : '' }}>Vienna</option>
<option value="Warsaw" {{ old('city')=='Warsaw' ? 'selected' : '' }}>Warsaw</option>
<option value="Zurich" {{ old('city')=='Zurich' ? 'selected' : '' }}>Zurich</option>

<!-- North America -->
<option value="Atlanta" {{ old('city')=='Atlanta' ? 'selected' : '' }}>Atlanta</option>
<option value="Boston" {{ old('city')=='Boston' ? 'selected' : '' }}>Boston</option>
<option value="Calgary" {{ old('city')=='Calgary' ? 'selected' : '' }}>Calgary</option>
<option value="Chicago" {{ old('city')=='Chicago' ? 'selected' : '' }}>Chicago</option>
<option value="Dallas" {{ old('city')=='Dallas' ? 'selected' : '' }}>Dallas</option>
<option value="Denver" {{ old('city')=='Denver' ? 'selected' : '' }}>Denver</option>
<option value="Edmonton" {{ old('city')=='Edmonton' ? 'selected' : '' }}>Edmonton</option>
<option value="Houston" {{ old('city')=='Houston' ? 'selected' : '' }}>Houston</option>
<option value="Las Vegas" {{ old('city')=='Las Vegas' ? 'selected' : '' }}>Las Vegas</option>
<option value="Los Angeles" {{ old('city')=='Los Angeles' ? 'selected' : '' }}>Los Angeles</option>
<option value="Mexico City" {{ old('city')=='Mexico City' ? 'selected' : '' }}>Mexico City</option>
<option value="Miami" {{ old('city')=='Miami' ? 'selected' : '' }}>Miami</option>
<option value="Montreal" {{ old('city')=='Montreal' ? 'selected' : '' }}>Montreal</option>
<option value="New York" {{ old('city')=='New York' ? 'selected' : '' }}>New York</option>
<option value="Orlando" {{ old('city')=='Orlando' ? 'selected' : '' }}>Orlando</option>
<option value="Ottawa" {{ old('city')=='Ottawa' ? 'selected' : '' }}>Ottawa</option>
<option value="Philadelphia" {{ old('city')=='Philadelphia' ? 'selected' : '' }}>Philadelphia</option>
<option value="Phoenix" {{ old('city')=='Phoenix' ? 'selected' : '' }}>Phoenix</option>
<option value="San Diego" {{ old('city')=='San Diego' ? 'selected' : '' }}>San Diego</option>
<option value="San Francisco" {{ old('city')=='San Francisco' ? 'selected' : '' }}>San Francisco</option>
<option value="Seattle" {{ old('city')=='Seattle' ? 'selected' : '' }}>Seattle</option>
<option value="Stony Plain" {{ old('city')=='Stony Plain' ? 'selected' : '' }}>Stony Plain</option>
<option value="Toronto" {{ old('city')=='Toronto' ? 'selected' : '' }}>Toronto</option>
<option value="Vancouver" {{ old('city')=='Vancouver' ? 'selected' : '' }}>Vancouver</option>
<option value="Washington" {{ old('city')=='Washington' ? 'selected' : '' }}>Washington</option>
<option value="Winnipeg" {{ old('city')=='Winnipeg' ? 'selected' : '' }}>Winnipeg</option>

<!-- South America -->
<option value="Bogotá" {{ old('city')=='Bogotá' ? 'selected' : '' }}>Bogotá</option>
<option value="Buenos Aires" {{ old('city')=='Buenos Aires' ? 'selected' : '' }}>Buenos Aires</option>
<option value="Caracas" {{ old('city')=='Caracas' ? 'selected' : '' }}>Caracas</option>
<option value="Lima" {{ old('city')=='Lima' ? 'selected' : '' }}>Lima</option>
<option value="Montevideo" {{ old('city')=='Montevideo' ? 'selected' : '' }}>Montevideo</option>
<option value="Quito" {{ old('city')=='Quito' ? 'selected' : '' }}>Quito</option>
<option value="Rio de Janeiro" {{ old('city')=='Rio de Janeiro' ? 'selected' : '' }}>Rio de Janeiro</option>
<option value="Santiago" {{ old('city')=='Santiago' ? 'selected' : '' }}>Santiago</option>
<option value="São Paulo" {{ old('city')=='São Paulo' ? 'selected' : '' }}>São Paulo</option>

<!-- Oceania -->
<option value="Auckland" {{ old('city')=='Auckland' ? 'selected' : '' }}>Auckland</option>
<option value="Brisbane" {{ old('city')=='Brisbane' ? 'selected' : '' }}>Brisbane</option>
<option value="Melbourne" {{ old('city')=='Melbourne' ? 'selected' : '' }}>Melbourne</option>
<option value="Perth" {{ old('city')=='Perth' ? 'selected' : '' }}>Perth</option>
<option value="Sydney" {{ old('city')=='Sydney' ? 'selected' : '' }}>Sydney</option>
<option value="Wellington" {{ old('city')=='Wellington' ? 'selected' : '' }}>Wellington</option>

<option value="Abidjan" {{ old('city')=='Abidjan' ? 'selected' : '' }}>Abidjan</option>
<option value="Abu Dhabi" {{ old('city')=='Abu Dhabi' ? 'selected' : '' }}>Abu Dhabi</option>
<option value="Accra" {{ old('city')=='Accra' ? 'selected' : '' }}>Accra</option>
<option value="Addis Ababa" {{ old('city')=='Addis Ababa' ? 'selected' : '' }}>Addis Ababa</option>
<option value="Ahmedabad" {{ old('city')=='Ahmedabad' ? 'selected' : '' }}>Ahmedabad</option>
<option value="Algiers" {{ old('city')=='Algiers' ? 'selected' : '' }}>Algiers</option>
<option value="Amman" {{ old('city')=='Amman' ? 'selected' : '' }}>Amman</option>
<option value="Amsterdam" {{ old('city')=='Amsterdam' ? 'selected' : '' }}>Amsterdam</option>
<option value="Ankara" {{ old('city')=='Ankara' ? 'selected' : '' }}>Ankara</option>
<option value="Athens" {{ old('city')=='Athens' ? 'selected' : '' }}>Athens</option>
<option value="Atlanta" {{ old('city')=='Atlanta' ? 'selected' : '' }}>Atlanta</option>
<option value="Auckland" {{ old('city')=='Auckland' ? 'selected' : '' }}>Auckland</option>
<option value="Baghdad" {{ old('city')=='Baghdad' ? 'selected' : '' }}>Baghdad</option>
<option value="Baku" {{ old('city')=='Baku' ? 'selected' : '' }}>Baku</option>
<option value="Bali" {{ old('city')=='Bali' ? 'selected' : '' }}>Bali</option>
<option value="Baltimore" {{ old('city')=='Baltimore' ? 'selected' : '' }}>Baltimore</option>
<option value="Bangkok" {{ old('city')=='Bangkok' ? 'selected' : '' }}>Bangkok</option>
<option value="Bangalore" {{ old('city')=='Bangalore' ? 'selected' : '' }}>Bangalore</option>
<option value="Barcelona" {{ old('city')=='Barcelona' ? 'selected' : '' }}>Barcelona</option>
<option value="Beijing" {{ old('city')=='Beijing' ? 'selected' : '' }}>Beijing</option>
<option value="Beirut" {{ old('city')=='Beirut' ? 'selected' : '' }}>Beirut</option>
<option value="Belgrade" {{ old('city')=='Belgrade' ? 'selected' : '' }}>Belgrade</option>
<option value="Berlin" {{ old('city')=='Berlin' ? 'selected' : '' }}>Berlin</option>
<option value="Bern" {{ old('city')=='Bern' ? 'selected' : '' }}>Bern</option>
<option value="Birmingham" {{ old('city')=='Birmingham' ? 'selected' : '' }}>Birmingham</option>
<option value="Bogotá" {{ old('city')=='Bogotá' ? 'selected' : '' }}>Bogotá</option>
<option value="Bombay" {{ old('city')=='Bombay' ? 'selected' : '' }}>Bombay</option>
<option value="Boston" {{ old('city')=='Boston' ? 'selected' : '' }}>Boston</option>
<option value="Brasília" {{ old('city')=='Brasília' ? 'selected' : '' }}>Brasília</option>
<option value="Brisbane" {{ old('city')=='Brisbane' ? 'selected' : '' }}>Brisbane</option>
<option value="Brussels" {{ old('city')=='Brussels' ? 'selected' : '' }}>Brussels</option>
<option value="Bucharest" {{ old('city')=='Bucharest' ? 'selected' : '' }}>Bucharest</option>
<option value="Budapest" {{ old('city')=='Budapest' ? 'selected' : '' }}>Budapest</option>
<option value="Buenos Aires" {{ old('city')=='Buenos Aires' ? 'selected' : '' }}>Buenos Aires</option>
<option value="Cairo" {{ old('city')=='Cairo' ? 'selected' : '' }}>Cairo</option>
<option value="Calgary" {{ old('city')=='Calgary' ? 'selected' : '' }}>Calgary</option>
<option value="Cape Town" {{ old('city')=='Cape Town' ? 'selected' : '' }}>Cape Town</option>
<option value="Caracas" {{ old('city')=='Caracas' ? 'selected' : '' }}>Caracas</option>
<option value="Casablanca" {{ old('city')=='Casablanca' ? 'selected' : '' }}>Casablanca</option>
<option value="Chandigarh" {{ old('city')=='Chandigarh' ? 'selected' : '' }}>Chandigarh</option>
<option value="Chennai" {{ old('city')=='Chennai' ? 'selected' : '' }}>Chennai</option>
<option value="Chicago" {{ old('city')=='Chicago' ? 'selected' : '' }}>Chicago</option>
<option value="Copenhagen" {{ old('city')=='Copenhagen' ? 'selected' : '' }}>Copenhagen</option>
<option value="Dallas" {{ old('city')=='Dallas' ? 'selected' : '' }}>Dallas</option>
<option value="Delhi" {{ old('city')=='Delhi' ? 'selected' : '' }}>Delhi</option>
<option value="Denver" {{ old('city')=='Denver' ? 'selected' : '' }}>Denver</option>
<option value="Detroit" {{ old('city')=='Detroit' ? 'selected' : '' }}>Detroit</option>
<option value="Dhaka" {{ old('city')=='Dhaka' ? 'selected' : '' }}>Dhaka</option>
<option value="Doha" {{ old('city')=='Doha' ? 'selected' : '' }}>Doha</option>
<option value="Dubai" {{ old('city')=='Dubai' ? 'selected' : '' }}>Dubai</option>
<option value="Dublin" {{ old('city')=='Dublin' ? 'selected' : '' }}>Dublin</option>
<option value="Durban" {{ old('city')=='Durban' ? 'selected' : '' }}>Durban</option>
<option value="Edinburgh" {{ old('city')=='Edinburgh' ? 'selected' : '' }}>Edinburgh</option>
<option value="Frankfurt" {{ old('city')=='Frankfurt' ? 'selected' : '' }}>Frankfurt</option>
<option value="Geneva" {{ old('city')=='Geneva' ? 'selected' : '' }}>Geneva</option>
<option value="Glasgow" {{ old('city')=='Glasgow' ? 'selected' : '' }}>Glasgow</option>
<option value="Guangzhou" {{ old('city')=='Guangzhou' ? 'selected' : '' }}>Guangzhou</option>
<option value="Hamburg" {{ old('city')=='Hamburg' ? 'selected' : '' }}>Hamburg</option>
<option value="Hanoi" {{ old('city')=='Hanoi' ? 'selected' : '' }}>Hanoi</option>
<option value="Helsinki" {{ old('city')=='Helsinki' ? 'selected' : '' }}>Helsinki</option>
<option value="Ho Chi Minh City" {{ old('city')=='Ho Chi Minh City' ? 'selected' : '' }}>Ho Chi Minh City</option>
<option value="Hong Kong" {{ old('city')=='Hong Kong' ? 'selected' : '' }}>Hong Kong</option>
<option value="Houston" {{ old('city')=='Houston' ? 'selected' : '' }}>Houston</option>
<option value="Hyderabad" {{ old('city')=='Hyderabad' ? 'selected' : '' }}>Hyderabad</option>
<option value="Istanbul" {{ old('city')=='Istanbul' ? 'selected' : '' }}>Istanbul</option>
<option value="Jakarta" {{ old('city')=='Jakarta' ? 'selected' : '' }}>Jakarta</option>
<option value="Jeddah" {{ old('city')=='Jeddah' ? 'selected' : '' }}>Jeddah</option>
<option value="Johannesburg" {{ old('city')=='Johannesburg' ? 'selected' : '' }}>Johannesburg</option>
<option value="Karachi" {{ old('city')=='Karachi' ? 'selected' : '' }}>Karachi</option>
<option value="Kathmandu" {{ old('city')=='Kathmandu' ? 'selected' : '' }}>Kathmandu</option>
<option value="Kolkata" {{ old('city')=='Kolkata' ? 'selected' : '' }}>Kolkata</option>
<option value="Kuala Lumpur" {{ old('city')=='Kuala Lumpur' ? 'selected' : '' }}>Kuala Lumpur</option>
<option value="Kyoto" {{ old('city')=='Kyoto' ? 'selected' : '' }}>Kyoto</option>
<option value="Lagos" {{ old('city')=='Lagos' ? 'selected' : '' }}>Lagos</option>
<option value="Lahore" {{ old('city')=='Lahore' ? 'selected' : '' }}>Lahore</option>
<option value="Las Vegas" {{ old('city')=='Las Vegas' ? 'selected' : '' }}>Las Vegas</option>
<option value="Lisbon" {{ old('city')=='Lisbon' ? 'selected' : '' }}>Lisbon</option>
<option value="London" {{ old('city')=='London' ? 'selected' : '' }}>London</option>
<option value="Los Angeles" {{ old('city')=='Los Angeles' ? 'selected' : '' }}>Los Angeles</option>
<option value="Lusaka" {{ old('city')=='Lusaka' ? 'selected' : '' }}>Lusaka</option>
<option value="Lyon" {{ old('city')=='Lyon' ? 'selected' : '' }}>Lyon</option>
<option value="Madrid" {{ old('city')=='Madrid' ? 'selected' : '' }}>Madrid</option>
<option value="Manila" {{ old('city')=='Manila' ? 'selected' : '' }}>Manila</option>
<option value="Melbourne" {{ old('city')=='Melbourne' ? 'selected' : '' }}>Melbourne</option>
<option value="Mexico City" {{ old('city')=='Mexico City' ? 'selected' : '' }}>Mexico City</option>
<option value="Miami" {{ old('city')=='Miami' ? 'selected' : '' }}>Miami</option>
<option value="Milan" {{ old('city')=='Milan' ? 'selected' : '' }}>Milan</option>
<option value="Monaco" {{ old('city')=='Monaco' ? 'selected' : '' }}>Monaco</option>
<option value="Montreal" {{ old('city')=='Montreal' ? 'selected' : '' }}>Montreal</option>
<option value="Moscow" {{ old('city')=='Moscow' ? 'selected' : '' }}>Moscow</option>
<option value="Mumbai" {{ old('city')=='Mumbai' ? 'selected' : '' }}>Mumbai</option>
<option value="Munich" {{ old('city')=='Munich' ? 'selected' : '' }}>Munich</option>
<option value="Nairobi" {{ old('city')=='Nairobi' ? 'selected' : '' }}>Nairobi</option>
<option value="New Delhi" {{ old('city')=='New Delhi' ? 'selected' : '' }}>New Delhi</option>
<option value="New York" {{ old('city')=='New York' ? 'selected' : '' }}>New York</option>
<option value="Nice" {{ old('city')=='Nice' ? 'selected' : '' }}>Nice</option>
<option value="Osaka" {{ old('city')=='Osaka' ? 'selected' : '' }}>Osaka</option>
<option value="Oslo" {{ old('city')=='Oslo' ? 'selected' : '' }}>Oslo</option>
<option value="Ottawa" {{ old('city')=='Ottawa' ? 'selected' : '' }}>Ottawa</option>
<option value="Paris" {{ old('city')=='Paris' ? 'selected' : '' }}>Paris</option>
<option value="Perth" {{ old('city')=='Perth' ? 'selected' : '' }}>Perth</option>
<option value="Philadelphia" {{ old('city')=='Philadelphia' ? 'selected' : '' }}>Philadelphia</option>
<option value="Phoenix" {{ old('city')=='Phoenix' ? 'selected' : '' }}>Phoenix</option>
<option value="Prague" {{ old('city')=='Prague' ? 'selected' : '' }}>Prague</option>
<option value="Quebec City" {{ old('city')=='Quebec City' ? 'selected' : '' }}>Quebec City</option>
<option value="Quito" {{ old('city')=='Quito' ? 'selected' : '' }}>Quito</option>
<option value="Rio de Janeiro" {{ old('city')=='Rio de Janeiro' ? 'selected' : '' }}>Rio de Janeiro</option>
<option value="Riyadh" {{ old('city')=='Riyadh' ? 'selected' : '' }}>Riyadh</option>
<option value="Rome" {{ old('city')=='Rome' ? 'selected' : '' }}>Rome</option>
<option value="San Diego" {{ old('city')=='San Diego' ? 'selected' : '' }}>San Diego</option>
<option value="San Francisco" {{ old('city')=='San Francisco' ? 'selected' : '' }}>San Francisco</option>
<option value="Santiago" {{ old('city')=='Santiago' ? 'selected' : '' }}>Santiago</option>
<option value="São Paulo" {{ old('city')=='São Paulo' ? 'selected' : '' }}>São Paulo</option>
<option value="Seoul" {{ old('city')=='Seoul' ? 'selected' : '' }}>Seoul</option>
<option value="Shanghai" {{ old('city')=='Shanghai' ? 'selected' : '' }}>Shanghai</option>
<option value="Singapore" {{ old('city')=='Singapore' ? 'selected' : '' }}>Singapore</option>
<option value="Stony Plain" {{ old('city')=='Stony Plain' ? 'selected' : '' }}>Stony Plain</option>
<option value="Stockholm" {{ old('city')=='Stockholm' ? 'selected' : '' }}>Stockholm</option>
<option value="Sydney" {{ old('city')=='Sydney' ? 'selected' : '' }}>Sydney</option>
<option value="Taipei" {{ old('city')=='Taipei' ? 'selected' : '' }}>Taipei</option>
<option value="Tehran" {{ old('city')=='Tehran' ? 'selected' : '' }}>Tehran</option>
<option value="Tokyo" {{ old('city')=='Tokyo' ? 'selected' : '' }}>Tokyo</option>
<option value="Toronto" {{ old('city')=='Toronto' ? 'selected' : '' }}>Toronto</option>
<option value="Vancouver" {{ old('city')=='Vancouver' ? 'selected' : '' }}>Vancouver</option>
<option value="Venice" {{ old('city')=='Venice' ? 'selected' : '' }}>Venice</option>
<option value="Vienna" {{ old('city')=='Vienna' ? 'selected' : '' }}>Vienna</option>
<option value="Warsaw" {{ old('city')=='Warsaw' ? 'selected' : '' }}>Warsaw</option>
<option value="Washington" {{ old('city')=='Washington' ? 'selected' : '' }}>Washington</option>
<option value="Wellington" {{ old('city')=='Wellington' ? 'selected' : '' }}>Wellington</option>
<option value="Zurich" {{ old('city')=='Zurich' ? 'selected' : '' }}>Zurich</option>


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