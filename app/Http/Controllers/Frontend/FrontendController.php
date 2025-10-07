<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{

    public function index()
    {
        return view('frontend.index');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function eligibility()
    {
        return view('frontend.eligibility');
    }
    public function enroll()
    {
        return view('frontend.enroll');
    }
    public function payment()
    {
        return view('frontend.payment');
    }
    public function refunds()
    {
        return view('frontend.refunds');
    }
    public function syllabus()
    {
        return view('frontend.syllabus');
    }
    public function terms()
    {
        return view('frontend.terms');
    }
}
