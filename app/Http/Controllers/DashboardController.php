<?php

namespace App\Http\Controllers;

// use App\Models\Booking;
use App\Models\User;
// use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
// use Illuminate\Support\Facades\Mail;
// use App\Mail\SendRecordMail;
// use Barryvdh\DomPDF\Facade\Pdf;

class DashboardController extends Controller
{

    public function index(Request $request)
    {
        $users = User::all()->count();

        return view('home', compact(
            'users'
        ));
    }
}
