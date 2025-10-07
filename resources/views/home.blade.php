@extends('layouts.app')
@section('content')
    <div class="py-4">
        <style>
            .header-btn {
                display: flex;
                height: 50px;
            }

            .mini-card {
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 4px 14px rgba(0, 0, 0, 0.05);
                background-color: white;
                transition: transform 0.2s ease-in-out;
                height: 120px;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .card-header-custom {
                padding: 0.6rem 1rem;
                font-weight: 600;
                font-size: 0.95rem;
                display: flex;
                justify-content: space-between;
                align-items: center;
                color: #2e2e2e;
            }

            .card-body-custom {
                padding: 0.5rem 1rem;
                font-size: 1rem;
                font-weight: bold;
                color: #2e2e2e;
            }

            .card-header-custom i {
                font-size: 1.4rem;
            }
        </style>


        <div class="row gx-3 gy-3">
            <!-- Card 1 -->
            <div class="col-lg-3 col-md-6 col-12 mb-4">
                <div class="mini-card">
                    <div class="card-header-custom">
                        Total User
                        <i class="fas fa-calendar-check icon-green"></i>
                    </div>
                    <div class="card-body-custom">
                        {{ $users ?? 0 }} {{-- Total Customers --}}
                    </div>
                </div>
            </div>

        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection
