<?php

namespace App\Http\Controllers;

use App\Models\PaymentSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function index()
    {
        $settings = PaymentSetting::orderBy('id', 'desc')->paginate(10);
        return view('admin.payment-settings.index', compact('settings'));
    }

    // public function create()
    // {
    //     return view('admin.payment-settings.create');
    // }

    // public function store(Request $request)
    // {
    //     // Validate payment and gst (required and numeric). total will be calculated server-side.
    //     $validated = $request->validate([
    //         'payment' => 'required|numeric',
    //         'gst'     => 'required|numeric',
    //     ]);

    //     $payment = (float) $validated['payment'];
    //     $gst     = (float) $validated['gst'];
    //     $total   = $payment + $gst;

    //     PaymentSetting::create([
    //         'payment' => number_format($payment, 2, '.', ''),
    //         'gst'     => number_format($gst, 2, '.', ''),
    //         'total'   => number_format($total, 2, '.', ''),
    //     ]);

    //     return redirect()->route('admin.payment-settings.index')
    //         ->with('success', 'Payment setting created successfully.');
    // }

    public function edit($id)
    {
        $setting = PaymentSetting::findOrFail($id);
        return view('admin.payment-settings.edit', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        // Validate payment and gst (required and numeric). total will be calculated server-side.
        $validated = $request->validate([
            'payment' => 'required|numeric',
            'gst'     => 'required|numeric',
        ]);

        $payment = (float) $validated['payment'];
        $gst     = (float) $validated['gst'];
        $total   = $payment + $gst;

        $setting = PaymentSetting::findOrFail($id);

        $setting->update([
            'payment' => number_format($payment, 2, '.', ''),
            'gst'     => number_format($gst, 2, '.', ''),
            'total'   => number_format($total, 2, '.', ''),
        ]);

        return redirect()->route('admin.payment-settings.index')
            ->with('success', 'Payment setting updated successfully.');
    }


    // public function destroy($id)
    // {
    //     $setting = PaymentSetting::findOrFail($id);

    //     try {
    //         $setting->delete();
    //         return redirect()->route('admin.payment-settings.index')
    //             ->with('success', 'Payment setting deleted successfully.');
    //     } catch (\Throwable $e) {
    //         return redirect()->route('admin.payment-settings.index')
    //             ->with('error', 'Unable to delete payment setting: ' . $e->getMessage());
    //     }
    // }
}
