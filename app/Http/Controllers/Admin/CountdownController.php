<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Countdown;
use App\Http\Requests\CountdownRequest;

class CountdownController extends Controller
{
    public function index()
    {
        $countdowns = Countdown::latest()->get();
        return view('admin.countdowns.index', compact('countdowns'));
    }

    public function create()
    {
        return view('admin.countdowns.create');
    }

    public function store(CountdownRequest $request)
    {
        Countdown::create($request->validated());
        return redirect()->route('admin.countdowns.index')->with('success', 'Created');
    }

    public function edit(Countdown $countdown)
    {
        return view('admin.countdowns.edit', compact('countdown'));
    }

    public function update(CountdownRequest $request, Countdown $countdown)
    {
        $countdown->update($request->validated());
        return redirect()->route('admin.countdowns.index')->with('success', 'Updated');
    }
}
