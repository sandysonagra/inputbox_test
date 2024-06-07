<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;

class FormController extends Controller
{
    public function showpage1()
    {
        return view('form.page1');
    }
    public function processpage1(Request $request)
    {
        $request->validate([
            'number' => 'required|integer|min:3'
        ]);

        session(['number' => $request->number]);

        return redirect()->route('form.page2');
    }

    public function showpage2()
    {
        $number = session('number');

        return view('form.page2', compact('number'));
    }

    public function processpage2(Request $request)
    {
        $request->validate([
            'inputs' => 'array',
            'inputs.*' => 'nullable|string'
        ]);

        $inputs = $request->input('inputs', []);
        $fillsInputes = array_filter($inputs);

        if (count($fillsInputes) < 3) {
            return back()->withErrors('You must fill at least 3 textboxes.');
        }

        session(['inputs' => $inputs]);
        return redirect()->route('form.page3');
    }

    public function showpage3()
    {
        $inputs = session('inputs');

        return view('form.page3',compact('inputs'));
    }

    public function processpage3(Request $request)
    {
        $selectInputs = array_filter($request->input('selected',[]));
        session(['selectInputs'=>$selectInputs]);
        return redirect()->route('form.page4');
    }

    public function showpage4()
    {
        $selectedInputs = session('selectInputs');
        foreach ($selectedInputs as $input) {
            FormData::create(['value'=>$input]);
        }
        $recentInputs = FormData::latest()->take(count($selectedInputs))->get();
        return view('form.page4', compact('recentInputs'));
    }
}
