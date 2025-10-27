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

// public function attemptQuestionShow()
// {
//     $attempts = Attempt::with('user')->get();
//     return view('admin.attempt-questions.index', compact('attempts'));

// }


public function attemptQuestionShow()
{
    // load attempts with users
    $attempts = Attempt::with('user')->get();

    // group by user_id and build a row for each user
    $rows = $attempts->groupBy('user_id')->map(function ($userAttempts) {
        $first = $userAttempts->first();
        $user = $first->user;

        // prepare placeholders for levels 1..3
        $levels = [
            1 => null,
            2 => null,
            3 => null,
        ];

        // fill level data (if multiple attempts for same level you may want to aggregate;
        // here we keep the latest attempt per level by updated_at)
        foreach ($userAttempts->groupBy('level') as $levelNum => $levelAttempts) {
            $latest = $levelAttempts->sortByDesc('updated_at')->first();
            $levels[(int)$levelNum] = [
                'total'     => $latest->total_questions,
                'correct'   => $latest->correct_count,
                'incorrect' => $latest->incorrect_count,
                'status'    => $latest->status,
                'updated_at'=> $latest->updated_at,
            ];
        }

        // find last (most recent) attempt overall for this user
        $last = $userAttempts->sortByDesc('updated_at')->first();

        return [
            'user'       => $user,
            'levels'     => $levels,
            'last_level' => $last->level,
            'last_total' => $last->total_questions,
            'last_correct'=> $last->correct_count,
            'last_status'=> $last->status,
            'last_at'    => $last->updated_at,
        ];
    })->values(); // reset numeric keys

    return view('admin.attempt-questions.index', compact('rows'));
}



}
