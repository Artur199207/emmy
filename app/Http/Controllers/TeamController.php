<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamFormReaquest;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $team = Team::all();
        return view('team.index', compact('team'));
    }
    public function create()
    {
        return view('team.create');
    }
   public function store(TeamFormReaquest $request)
{
    $data = $request->validated();

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('team_images', 'public');
    } 

    Team::create($data);

    return redirect()->route('team.index')->with('success', 'Նոր պենալը հաջողությամբ ավելացվեց։');
}

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('team.edit', compact('team'));
    }
    public function update(TeamFormReaquest $request, $id)
    {
        $team = Team::findOrFail($id);

        $request->validate([
            'titleRu' => 'required|string',
            'titleEn' => 'required|string',
            'descriptionRu' => 'required|string',
            'descriptionEn' => 'required|string',
        ]);

        $team->titleRu = $request->titleRu;
        $team->titleEn = $request->titleEn;
        $team->descriptionRu = $request->descriptionRu;
        $team->descriptionEn = $request->descriptionEn;

        // Image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/team/', $filename);
            $team->image = $filename;
        }

        $team->save();

        return redirect()->route('team.index')->with('status', 'Элемент успешно обновлен!');
    }
    public function destroy($id)
    {
        $team = Team::findOrFail($id);

        if ($team->image && file_exists(public_path('uploads/team/' . $team->image))) {
            unlink(public_path('uploads/team/' . $team->image));
        }

        $team->delete();

        return redirect()->route('team.index')->with('status', 'Элемент успешно удален!');
    }
}
