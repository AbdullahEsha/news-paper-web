<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\News;
use App\Models\Category;
use Symfony\Component\VarDumper\VarDumper;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        try {
            $category = Category::orderBy('created_at', 'desc')->get();
            return view('admin.upload')->with('category', $category);
        } catch (\Exception $e) {
            $req->session(['error', $e->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $newsUpload = new News();
        try {
            // Debug the request data
            $newsUpload->title = $req->title;
            $newsUpload->description = $req->description;
            $newsUpload->author = $req->author;
            $newsUpload->status = $req->status;
            $newsUpload->category = $req->category;
            $newsUpload->tag = json_encode($req->tag);
            $newsUpload->location = $req->location;

            if ($req->hasFile('image')) {
                $file = $req->file('image');
                $filename = time() . "-" . $file->getClientOriginalName();
                $file->move('uploads/news/', $filename);
                $newsUpload->image = $filename;
            } else {
                $newsUpload->image = '';
            }

            $newsUpload->save();

            $req->session()->put('msg', 'News was successfully uploaded!!');
            return redirect('/admin');
        } catch (\Exception $e) {
            $req->session()->put('error', $e->getMessage());
            return redirect('/error');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $News
     * @return \Illuminate\Http\Response
     */
    public function show(Request $req)
    {
        try {
            $newsData = News::orderBy('id', 'desc')->get();
            return view('admin.viewAll')->with('newsData', $newsData);
        } catch (\Exception $e) {
            $req->session(['error', $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $News
     * @return \Illuminate\Http\Response
     */
    public function viewAllNews(Request $req)
    {
        try {
            $allNews = News::orderBy('id', 'desc')->get();
            return view('News')->with('allNews', $allNews);
        } catch (\Exception $e) {
            $req->session(['error', $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $News
     * @return \Illuminate\Http\Response
     */
    public function viewAllNewsHome(Request $req)
    {
        try {
            $newsDataView = News::orderBy('id', 'desc')->get();
            $newsCategoryView = News::groupBy('category')->get();
            $newsAllCategory = Category::all();

            return view('home', compact('newsDataView', 'newsCategoryView', 'newsAllCategory'));
        } catch (\Exception $e) {
            $req->session(['error', $e->getMessage()]);
            return redirect('/error');
        }
    }

    /**
     * Display the specified News
     *
     * @param  \App\Models\News  $News
     * @return \Illuminate\Http\Response
     */
    public function individualNews(Request $req, $slug)
    {
        try {
            $individual = News::whereIn('slug', [$slug])->first();
            $allNewsData = News::orderBy('id', 'desc')->get();
            return view('NewsIndividual')->with('individual', $individual)->with("allNewsData", $allNewsData);
        } catch (\Exception $e) {
            $req->session(['error', $e->getMessage()]);
        }
    }

    /**
     * Display the specified News for delete.
     *
     * @param  \App\Models\News  $News
     * @return \Illuminate\Http\Response
     */
    public function showNewsDestroy(Request $req, $slug)
    {
        try {
            $findNews = News::whereIn('slug', [$slug])->first();
            return view('admin.deleteNews')->with('findNews', $findNews);
        } catch (\Exception $e) {
            $req->session(['error', $e->getMessage()]);
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $News
     * @return \Illuminate\Http\Response
     */
    public function showNewsEdit(Request $req, $slug)
    {
        try {
            $editNews = News::whereIn('slug', [$slug])->first();
            $categoryEdit = Category::orderBy('id', 'desc')->get();
            return view('admin.editNews')->with('editNews', $editNews)->with("categoryEdit", $categoryEdit);
        } catch (\Exception $e) {
            $req->session(['error', $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $News
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $update = News::find($req->id);
        try {
            $update->title = $req->title;
            $update->slug = $req->slug;
            $update->metaDescription = $req->metaDescription;
            $update->author = $req->author;
            $update->status = $req->status;
            $update->category = $req->category;
            $update->description = $req->description;

            $update->update();

            $req->session(['msg', 'News was successfully updated!!']);
            return redirect('/admin/News');
        } catch (\Exception $e) {
            $req->session(['error', $e->getMessage()]);
            return redirect('/error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $News
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        $deleteNews = News::find($req->id);
        try {
            $deleteNews->delete();
            $req->session(['msg', 'News was successfully deleted!!']);
            return redirect('/admin/News');
        } catch (\Exception $e) {
            $req->session(['error', $e->getMessage()]);
        }
    }
}
