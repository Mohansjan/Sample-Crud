<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Sample;
use Illuminate\View\View;

class SampleController extends Controller
{

    public function index(): View
    {
        $samples = Sample::all();
        return view('students.index')->with('students', $samples);
    }


    public function create(): View
    {
        return view('samples.create');
    }


    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Sample::create($input);
        return redirect('sample')->with('flash_message', 'Student Addedd!');
    }

    public function show(string $id): View
    {
        $sample = Sample::find($id);
        return view('samples.show')->with('students', $sample);
    }

    public function edit(string $id): View
    {
        $sample = Sample::find($id);
        return view('samples.edit')->with('samples', $sample);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $sample = Sample::find($id);
        $input = $request->all();
        $sample->update($input);
        return redirect('sample')->with('flash_message', 'student Updated!');
    }


    public function destroy(string $id): RedirectResponse
    {
        Sample::destroy($id);
        return redirect('sample')->with('flash_message', 'Student deleted!');
    }
}
