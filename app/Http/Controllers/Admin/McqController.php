<?php

namespace App\Http\Controllers\Admin;

use App\Models\Mcq;
use App\Models\Option;
use App\Models\Attempt;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class McqController extends Controller
{
    public function index()
    {
        $mcqs = Mcq::with('options')->get();
        return view('admin.mcqs.index', compact('mcqs'));
    }

    public function create()
    {
        return view('admin.mcqs.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'options' => 'required|array|min:2',
            'correct_option' => 'required'
        ]);

        $mcq = Mcq::create(['question' => $request->question]);

        foreach ($request->options as $key => $option) {
            Option::create([
                'mcq_id' => $mcq->id,
                'option_text' => $option,
                'is_correct' => ($request->correct_option == $key)
            ]);
        }

        return redirect()->route('admin.mcqs.index')->with('success', 'MCQ Added Successfully');
    }

    public function edit($id)
    {
        $mcq = Mcq::with('options')->findOrFail($id);
        return view('admin.mcqs.edit', compact('mcq'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required',
            'options' => 'required|array|min:2',
            'correct_option' => 'required'
        ]);

        $mcq = Mcq::findOrFail($id);
        $mcq->update(['question' => $request->question]);

        $mcq->options()->delete();
        foreach ($request->options as $key => $option) {
            Option::create([
                'mcq_id' => $mcq->id,
                'option_text' => $option,
                'is_correct' => ($request->correct_option == $key)
            ]);
        }

        return redirect()->route('admin.mcqs.index')->with('success', 'MCQ Updated Successfully');
    }
public function show($id)
{

    $mcq = Mcq::with('options')->findOrFail($id);
    return view('admin.mcqs.show', compact('mcq'));
}
    public function destroy($id)
    {
        $mcq = Mcq::findOrFail($id);
        $mcq->delete();
        return redirect()->route('admin.mcqs.index')->with('success', 'MCQ Deleted Successfully');
    }

public function toggleStatus($id)
{
    $mcq = Mcq::findOrFail($id);
    $mcq->status = !$mcq->status;
    $mcq->save();

    return response()->json(['success' => true, 'status' => $mcq->status]);
}

public function attemptQuestionShow()
{
    $attempts = Attempt::with('user')->get();
    return view('admin.attempt-questions.index', compact('attempts'));

}
}
