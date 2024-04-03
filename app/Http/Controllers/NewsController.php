<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $news = News::where('user_id', auth()->user()->id)->latest();
        $data = $request->searcing;

        if ($request->searcing) {
            $news->where('title', 'like', '%' . $data . '%');
        }

        return view('dashboard.admin.news.index', [
            'news' => $news->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'image' => 'image|file',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('newsImg');
        }
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 70);

        $validateData['user_id'] = auth()->user()->id;

        News::create($validateData);
        return redirect('/dashboard/news')->with('toast_success', 'your news has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('dashboard.admin.news.show', [
            'news' => $news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('dashboard.admin.news.edit', [
            'news' => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $req = [
            'title' => 'required',
            'image' => 'image|file',
            'body' => 'required'
        ];

        $validateData = $request->validate($req);

        if ($request->file('image')) {
            if ($news->image != null) {
                Storage::delete($news->image);
            }
            $validateData['image'] = $request->file('image')->store('newsImg');
        }
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 70);
        $validateData['user_id'] = auth()->user()->id;

        News::where('id', $news->id)->update($validateData);

        return redirect('/dashboard/news')->with('toast_success', 'Your news has been update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {

        if ($news->image) {
            Storage::delete($news->image);
        }
        News::destroy('id', $news->id);

        return redirect('/dashboard/news')->with('toast_warning', 'news has been deleted');
    }
}
