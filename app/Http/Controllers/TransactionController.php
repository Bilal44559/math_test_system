<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function enrollment()
    {
        return view('admin.enrollment.index');
    }
    public function enrollmentShow()
    {
        return view('admin.enrollment.view');
    }
}
