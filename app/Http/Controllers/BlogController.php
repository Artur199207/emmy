<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogFormRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::all();
        return view('blog.index', compact('blog'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(BlogFormRequest $request)
    {
        $validated = $request->validated();

        $mainImage = null;
        if ($request->hasFile('image')) {
            $mainImage = $request->file('image')->store('blog', 'public');
        }

        $blog = new Blog();
        $blog->dataRu = $validated['dataRu'];
        $blog->dataEn = $validated['dataEn'];
        $blog->titleRu = $validated['titleRu'];
        $blog->titleEn = $validated['titleEn'];
        $blog->image = $mainImage;
        $blog->informationRu = $validated['informationRu'];
        $blog->informationEn = $validated['informationEn'];
        $blog->descriptionRu = $validated['descriptionRu'];
        $blog->descriptionEn = $validated['descriptionEn'];
        $blog->save();

        return redirect()->route('blog.index')->with('success', 'Блог успешно добавлен.');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.show', compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.edit', compact('blog'));
    }

    public function update(BlogFormRequest $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $validated = $request->validated();

        $blog->dataRu = $validated['dataRu'];
        $blog->dataEn = $validated['dataEn'];
        $blog->titleRu = $validated['titleRu'];
        $blog->titleEn = $validated['titleEn'];
        $blog->descriptionRu = $validated['descriptionRu'];
        $blog->descriptionEn = $validated['descriptionEn'];
        $blog->informationRu = $validated['informationRu'];
        $blog->informationEn = $validated['informationEn'];

        if ($request->hasFile('image')) {
            $blog->image = $request->file('image')->store('blog', 'public');
        }

        $blog->save();

        return redirect()->route('blog.index')->with('success', 'Блог успешно обновлен.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blog.index')->with('success', 'Блог успешно удален.');
    }
}
