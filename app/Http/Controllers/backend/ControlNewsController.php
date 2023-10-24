<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ControlNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // return News::all();
        return view('backend.news.index', [
            'title' => 'News',
            'news'  => News::where('deleted_by', '0')->orderBy('created_at', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.news.create',[
            'title' => 'News Create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'image' => 'image|file|max:100000',
            'title' => 'required',
            'subtitle' => 'required',
            'url' => 'required|unique:news',
            'content' => 'required',
            'status' => 'required',
        ]);

        if ($request->file('image')) {
            $validated['image']    = $request->file('image')->store('news-images');
        }

        $validated['created_by']    = auth()->user()->id;
        // $validated['excerp']        = Str::limit(strip_tags($request->content), 200);

        News::create($validated);
        return redirect('/control/news')->with('success','News has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
        return view('backend.news.show',[
            'title' => 'News Detail',
            'news'  => $news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
        return view('backend.news.edit',[
            'title' => 'News Edit',
            'news'  => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        //
        $validated = [
            'image' => 'image|file|max:100000',
            'title' => 'required',
            'subtitle' => 'required',
            'content' => 'required',
            'status' => 'required',
        ];
        
        if ($request->url != $news->url) {
            $validated['url'] = 'required|unique:news';
        }

        $validatedData = $request->validate($validated);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image']    = $request->file('image')->store('news-images');
        }

        $validatedData['updated_by']    = auth()->user()->id;

        News::where('id', $news->id)
            ->update($validatedData);
        return redirect('/control/news')->with('success','News has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
        if ($news->image) {
            Storage::delete($news->image);
        }
        News::destroy($news->id);
        return redirect('/control/news')->with('success','News has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        //
        $slug = SlugService::createSlug(News::class, 'url', $request);
        return response()->json(['url' => $slug]);
        // return $request;
    }

}
