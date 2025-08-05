<?php

namespace App\Http\Controllers;

use App\Http\Requests\PicRequest;
use App\Models\Pic;
use Illuminate\Http\Request;

class PicController extends Controller
{
    public function index()
    {
        $pic = Pic::all();
        return view('pic.index', compact('pic'));
    }
    public function create()
    {
        return view('pic.create');
    }
   public function store(PicRequest $request)
{
    $data = $request->validated();

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('pic', 'public');
    } 

    Pic::create($data);

    return redirect()->route('pic.index')->with('success', 'Նոր պենալը հաջողությամբ ավելացվեց։');
}

    public function edit($id)
    {
        $pic = Pic::findOrFail($id);
        return view('pic.edit', compact('pic'));
    }
    public function update(PicRequest $request, $id)
    {
        $pic = Pic::findOrFail($id);

        $request->validate();



        // Image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/pic/', $filename);
            $pic->image = $filename;
        }

        $pic->save();

        return redirect()->route('pic.index')->with('status', 'Элемент успешно обновлен!');
    }
    public function destroy($id)
    {
        $pic = Pic::findOrFail($id);

        if ($pic->image && file_exists(public_path('uploads/pic/' . $pic->image))) {
            unlink(public_path('uploads/pic/' . $pic->image));
        }

        $pic->delete();

        return redirect()->route('pic.index')->with('status', 'Элемент успешно удален!');
    }
}
